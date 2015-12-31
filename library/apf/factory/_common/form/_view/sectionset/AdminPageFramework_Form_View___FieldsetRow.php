<?php
/**
 Admin Page Framework v3.7.8 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Form_View___FieldsetRow extends AdminPageFramework_Form_View___FieldsetTableRow {
    public $aFieldset = array();
    public $aSavedData = array();
    public $aFieldErrors = array();
    public $aFieldTypeDefinitions = array();
    public $aCallbacks = array();
    public $oMsg;
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aFieldset, $this->aSavedData, $this->aFieldErrors, $this->aFieldTypeDefinitions, $this->aCallbacks, $this->oMsg,);
        $this->aFieldset = $_aParameters[0];
        $this->aSavedData = $_aParameters[1];
        $this->aFieldErrors = $_aParameters[2];
        $this->aFieldTypeDefinitions = $_aParameters[3];
        $this->aCallbacks = $_aParameters[4];
        $this->oMsg = $_aParameters[5];
    }
    public function get() {
        $aFieldset = $this->aFieldset;
        if ('section_title' === $aFieldset['type']) {
            return '';
        }
        $_oFieldrowAttribute = new AdminPageFramework_Form_View___Attribute_Fieldrow($aFieldset);
        return $this->_getFieldByContainer($aFieldset, array('open_main' => "<div " . $_oFieldrowAttribute->get() . ">", 'close_main' => "</div>",));
    }
}