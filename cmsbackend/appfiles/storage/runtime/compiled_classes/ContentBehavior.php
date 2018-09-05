<?php // vhcfAvmVeuWY4
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

use yii\base\Behavior;

/**
 * Content behavior
 *
 * This class provides attributes for all the unique custom field handles.
 */
class ContentBehavior extends Behavior
{
    // Static
    // =========================================================================

    /**
     * @var string[] List of supported field handles.
     */
    public static $fieldHandles = [
        'mission' => true,
        'instagram' => true,
        'aimsObjectives' => true,
        'volunteeringPartnerships' => true,
        'profile_text' => true,
        'correspondence' => true,
        'aimsTitle' => true,
        'aimsIcon' => true,
        'subHeader' => true,
        'facebook' => true,
        'introText' => true,
        'linkedin' => true,
        'twitter' => true,
        'text' => true,
        'aimsText' => true,
        'vision' => true,
        'profile_thumbnail' => true,
        'profile_designation' => true,
        'seo' => true,
        'heroImage' => true,
        'profile_picture' => true,
    ];

    // Properties
    // =========================================================================

    /**
     * @var mixed Value for field with the handle “mission”.
     */
    public $mission;

    /**
     * @var mixed Value for field with the handle “instagram”.
     */
    public $instagram;

    /**
     * @var mixed Value for field with the handle “aimsObjectives”.
     */
    public $aimsObjectives;

    /**
     * @var mixed Value for field with the handle “volunteeringPartnerships”.
     */
    public $volunteeringPartnerships;

    /**
     * @var mixed Value for field with the handle “profile_text”.
     */
    public $profile_text;

    /**
     * @var mixed Value for field with the handle “correspondence”.
     */
    public $correspondence;

    /**
     * @var mixed Value for field with the handle “aimsTitle”.
     */
    public $aimsTitle;

    /**
     * @var mixed Value for field with the handle “aimsIcon”.
     */
    public $aimsIcon;

    /**
     * @var mixed Value for field with the handle “subHeader”.
     */
    public $subHeader;

    /**
     * @var mixed Value for field with the handle “facebook”.
     */
    public $facebook;

    /**
     * @var mixed Value for field with the handle “introText”.
     */
    public $introText;

    /**
     * @var mixed Value for field with the handle “linkedin”.
     */
    public $linkedin;

    /**
     * @var mixed Value for field with the handle “twitter”.
     */
    public $twitter;

    /**
     * @var mixed Value for field with the handle “text”.
     */
    public $text;

    /**
     * @var mixed Value for field with the handle “aimsText”.
     */
    public $aimsText;

    /**
     * @var mixed Value for field with the handle “vision”.
     */
    public $vision;

    /**
     * @var mixed Value for field with the handle “profile_thumbnail”.
     */
    public $profile_thumbnail;

    /**
     * @var mixed Value for field with the handle “profile_designation”.
     */
    public $profile_designation;

    /**
     * @var mixed Value for field with the handle “seo”.
     */
    public $seo;

    /**
     * @var mixed Value for field with the handle “heroImage”.
     */
    public $heroImage;

    /**
     * @var mixed Value for field with the handle “profile_picture”.
     */
    public $profile_picture;

    /**
     * @var array Additional custom field values we don’t know about yet.
     */
    private $_customFieldValues = [];

    // Magic Property Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return $this->_customFieldValues[$name] ?? null;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (isset(self::$fieldHandles[$name])) {
            $this->_customFieldValues[$name] = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars);
    }
}
