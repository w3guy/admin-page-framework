<?php
/**
 Admin Page Framework v3.7.8 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_UserMeta_Model___UserMeta extends AdminPageFramework_FrameworkUtility {
    public $iUserID = array();
    public $aFieldsets = array();
    public function __construct() {
        $_aParameters = func_get_args() + array($this->iUserID, $this->aFieldsets,);
        $this->iUserID = $_aParameters[0];
        $this->aFieldsets = $_aParameters[1];
    }
    public function get() {
        if (!$this->iUserID) {
            return array();
        }
        return $this->_getSavedDataFromFieldsets($this->iUserID, $this->aFieldsets);
    }
    private function _getSavedDataFromFieldsets($iUserID, $aFieldsets) {
        $_aMetaKeys = array_keys(get_user_meta($iUserID));
        $_aMetaData = array();
        foreach ($aFieldsets as $_sSectionID => $_aFieldsets) {
            if ('_default' == $_sSectionID) {
                foreach ($_aFieldsets as $_aFieldset) {
                    if (!in_array($_aFieldset['field_id'], $_aMetaKeys)) {
                        continue;
                    }
                    $_aMetaData[$_aFieldset['field_id']] = get_user_meta($iUserID, $_aFieldset['field_id'], true);
                }
            }
            if (!in_array($_sSectionID, $_aMetaKeys)) {
                continue;
            }
            $_aMetaData[$_sSectionID] = get_user_meta($iUserID, $_sSectionID, true);
        }
        return $_aMetaData;
    }
}