<?php
namespace wheelform\controllers;

use Craft;
use craft\web\Controller;
use wheelform\models\Form;
use wheelform\models\FormField;
use wheelform\models\Message;
use wheelform\models\MessageValue;
use wheelform\helpers\ExportHelper;
use yii\web\HttpException;
use yii\base\Exception;
use yii\data\Pagination;
use yii\widgets\LinkPager;
use craft\helpers\Path;
use craft\helpers\DateTimeHelper;

class EntriesController extends Controller
{
    public function actionIndex()
    {
        $params = Craft::$app->getUrlManager()->getRouteParams();
        $form_id = intval($params['id']);
        $form = Form::findOne($form_id);
        if (! $form) {
            throw new HttpException(404);
        }

        $query = Message::find()->where(['form_id' => $form_id]);
        $count = $query->count();
        $pages = new Pagination(['totalCount' => $count]);
        $pages->setPageSize(50);

        $entries = $query
            ->orderBy(['dateCreated' => SORT_DESC])
            ->with('value')
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $pager = LinkPager::widget([
            'pagination' => $pages,
        ]);

        $headerFields = FormField::find()
            ->where(['form_id' => $form_id, 'index_view' => 1, 'active' => 1])
            ->orderBy(['order' => SORT_ASC])
            ->all();

        return $this->renderTemplate('wheelform/_entries.twig', [
            'entries' => $entries,
            'pager' => $pager,
            'headerFields' => $headerFields,
        ]);
    }

    public function actionView()
    {
        $params = Craft::$app->getUrlManager()->getRouteParams();
        $entry_id = intval($params['id']);
        $message = Message::find()->where(['id' => $entry_id])->with('form')->one();

        if (! $message) {
            throw new HttpException(404);
        }

        $message->read = 1;
        $message->save();

        $messageValues = MessageValue::find()
            ->where(['message_id' => $message->id])
            ->joinWith('field')
            ->orderBy(FormField::tableName().'.order', SORT_ASC)
            ->all();

        return $this->renderTemplate('wheelform/_entry.twig', [
            'messageValues' => $messageValues,
            'entry' => $message,
            'form_id' => $message->form->id
        ]);
    }

    public function actionUpdateEntry()
    {
        $this->requirePostRequest();

        $entryId = Craft::$app->getRequest()->getRequiredBodyParam('entry_id');
        $readStatus = Craft::$app->getRequest()->getRequiredBodyParam('read_status');
        $entry = Message::findOne($entryId);

        $entry->read = intval($readStatus);

        if (! $entry->update()) {
            if (Craft::$app->getRequest()->getAcceptsJson()) {
                return $this->asJson(['success' => false]);
            }

            Craft::$app->getSession()->setError(Craft::t('app', 'Couldn’t udpate entry.'));

            // Send the entry back to the template
            Craft::$app->getUrlManager()->setRouteParams([
                'entry' => $entry
            ]);

            return null;
        }

        if (Craft::$app->getRequest()->getAcceptsJson()) {
            return $this->asJson(['success' => true]);
        }

        Craft::$app->getSession()->setNotice(Craft::t('app', 'Entry updated.'));

        return $this->redirectToPostedUrl($entry);

    }

    public function actionDeleteEntry()
    {
        $this->requirePostRequest();

        $entryId = Craft::$app->getRequest()->getRequiredBodyParam('entry_id');
        $entry = Message::findOne($entryId);

        if (! $entry->delete()) {
            if (Craft::$app->getRequest()->getAcceptsJson()) {
                return $this->asJson(['success' => false]);
            }

            Craft::$app->getSession()->setError(Craft::t('app', 'Couldn’t delete entry.'));

            // Send the entry back to the template
            Craft::$app->getUrlManager()->setRouteParams([
                'entry' => $entry
            ]);

            return null;
        }

        if (Craft::$app->getRequest()->getAcceptsJson()) {
            return $this->asJson(['success' => true]);
        }

        Craft::$app->getSession()->setNotice(Craft::t('app', 'Entry deleted.'));

        return $this->redirectToPostedUrl($entry);
    }

    public function actionExport()
    {
        $params = Craft::$app->getRequest()->getRequiredBodyParam('params');
        $form_id = $params['form_id'];
        $where = [];

        if(empty($form_id))
        {
            throw new Exception(Craft::t('Form ID is required.', 'wheelform'));
        }

        try {
            $exportHelper = new ExportHelper();
            $where['form_id'] = $form_id;

            if(! empty($params['start_date']))
            {
                $date = DateTimeHelper::toIso8601($params['start_date']);
                $where['start_date'] = $date;
            }
            if(! empty($params['end_date']))
            {
                $date = DateTimeHelper::toIso8601($params['end_date']);
                $where['end_date'] = $date;
            }

            $csvPath = $exportHelper->getCsv($where);
        } catch (\Throwable $e) {
            throw new Exception('Could not create csv: '.$e->getMessage());
        }

        if (!is_file($csvPath)) {
            throw new Exception("Could not create csv: the csv file doesn't exist.");
        }

        $filename = pathinfo($csvPath, PATHINFO_BASENAME);

        return $this->asJson([
            'csvFile' => pathinfo($filename, PATHINFO_FILENAME)
        ]);
    }


    public function actionDownloadFile()
    {
        $filename = Craft::$app->getRequest()->getRequiredQueryParam('filename');
        $filePath = Craft::$app->getPath()->getTempPath().DIRECTORY_SEPARATOR.$filename.'.csv';

        if (!is_file($filePath) || !Path::ensurePathIsContained($filePath)) {
            throw new NotFoundHttpException(Craft::t('wheelform', 'Invalid csv name: {filename}', [
                'filename' => $filename
            ]));
        }

        return Craft::$app->getResponse()->sendFile($filePath);
    }
}
