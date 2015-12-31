<?php
/**
 Admin Page Framework v3.7.8 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Form_View___Section_Base extends AdminPageFramework_Form_Base {
    public function isSectionsetVisible($aSectionset) {
        if (empty($aSectionset)) {
            return false;
        }
        return $this->callBack($this->aCallbacks['is_sectionset_visible'], array(true, $aSectionset));
    }
    public function isFieldsetVisible($aFieldset) {
        if (empty($aFieldset)) {
            return false;
        }
        return $this->callBack($this->aCallbacks['is_fieldset_visible'], array(true, $aFieldset));
    }
    public function getFieldsetOutput($aFieldset) {
        if (!$this->isFieldsetVisible($aFieldset)) {
            return '';
        }
        $_oFieldset = new AdminPageFramework_Form_View___Fieldset($aFieldset, $this->aSavedData, $this->aFieldErrors, $this->aFieldTypeDefinitions, $this->oMsg, $this->aCallbacks);
        $_sFieldOutput = $_oFieldset->get();
        return $_sFieldOutput;
    }
}