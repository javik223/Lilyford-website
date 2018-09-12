<?php // vmx0KY4g2TWPn
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

/**
 * Element Query behavior
 *
 * This class provides attributes for all the unique custom field handles.
 *
 * @method self seo(mixed $value) Sets the [[seo]] property
 * @method self heroImage(mixed $value) Sets the [[heroImage]] property
 * @method self color(mixed $value) Sets the [[color]] property
 * @method self mission(mixed $value) Sets the [[mission]] property
 * @method self quickFactsSummary(mixed $value) Sets the [[quickFactsSummary]] property
 * @method self moreText(mixed $value) Sets the [[moreText]] property
 * @method self profilePicture(mixed $value) Sets the [[profilePicture]] property
 * @method self quickFactsStatistics(mixed $value) Sets the [[quickFactsStatistics]] property
 * @method self icon(mixed $value) Sets the [[icon]] property
 * @method self instagram(mixed $value) Sets the [[instagram]] property
 * @method self aimsObjectives(mixed $value) Sets the [[aimsObjectives]] property
 * @method self volunteeringPartnerships(mixed $value) Sets the [[volunteeringPartnerships]] property
 * @method self profileThumbnail(mixed $value) Sets the [[profileThumbnail]] property
 * @method self quickFacts(mixed $value) Sets the [[quickFacts]] property
 * @method self correspondence(mixed $value) Sets the [[correspondence]] property
 * @method self theChallenge(mixed $value) Sets the [[theChallenge]] property
 * @method self inverseIcon(mixed $value) Sets the [[inverseIcon]] property
 * @method self aimsTitle(mixed $value) Sets the [[aimsTitle]] property
 * @method self aimsIcon(mixed $value) Sets the [[aimsIcon]] property
 * @method self subHeader(mixed $value) Sets the [[subHeader]] property
 * @method self profileText(mixed $value) Sets the [[profileText]] property
 * @method self whatWeAreDoing(mixed $value) Sets the [[whatWeAreDoing]] property
 * @method self facebook(mixed $value) Sets the [[facebook]] property
 * @method self profileDesignation(mixed $value) Sets the [[profileDesignation]] property
 * @method self introText(mixed $value) Sets the [[introText]] property
 * @method self linkedin(mixed $value) Sets the [[linkedin]] property
 * @method self twitter(mixed $value) Sets the [[twitter]] property
 * @method self text(mixed $value) Sets the [[text]] property
 * @method self aimsText(mixed $value) Sets the [[aimsText]] property
 * @method self vision(mixed $value) Sets the [[vision]] property
 */
class ElementQueryBehavior extends ContentBehavior
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (isset(self::$fieldHandles[$name]) && count($params) === 1) {
            $this->$name = $params[0];
            return $this->owner;
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::hasMethod($name);
    }
}
