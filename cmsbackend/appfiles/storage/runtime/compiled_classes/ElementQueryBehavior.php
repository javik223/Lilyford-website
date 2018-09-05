<?php // vhcfAvmVeuWY4
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
 * @method self mission(mixed $value) Sets the [[mission]] property
 * @method self instagram(mixed $value) Sets the [[instagram]] property
 * @method self aimsObjectives(mixed $value) Sets the [[aimsObjectives]] property
 * @method self volunteeringPartnerships(mixed $value) Sets the [[volunteeringPartnerships]] property
 * @method self profile_text(mixed $value) Sets the [[profile_text]] property
 * @method self correspondence(mixed $value) Sets the [[correspondence]] property
 * @method self aimsTitle(mixed $value) Sets the [[aimsTitle]] property
 * @method self aimsIcon(mixed $value) Sets the [[aimsIcon]] property
 * @method self subHeader(mixed $value) Sets the [[subHeader]] property
 * @method self facebook(mixed $value) Sets the [[facebook]] property
 * @method self introText(mixed $value) Sets the [[introText]] property
 * @method self linkedin(mixed $value) Sets the [[linkedin]] property
 * @method self twitter(mixed $value) Sets the [[twitter]] property
 * @method self text(mixed $value) Sets the [[text]] property
 * @method self aimsText(mixed $value) Sets the [[aimsText]] property
 * @method self vision(mixed $value) Sets the [[vision]] property
 * @method self profile_thumbnail(mixed $value) Sets the [[profile_thumbnail]] property
 * @method self profile_designation(mixed $value) Sets the [[profile_designation]] property
 * @method self seo(mixed $value) Sets the [[seo]] property
 * @method self heroImage(mixed $value) Sets the [[heroImage]] property
 * @method self profile_picture(mixed $value) Sets the [[profile_picture]] property
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
