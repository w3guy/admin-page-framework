<?php
/**
 Admin Page Framework v3.7.8 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class AdminPageFramework_Form_View___Generate_FlatFieldInputName extends AdminPageFramework_Form_View___Generate_FieldInputName {
    public function get() {
        $_sIndex = $this->getAOrB('0' !== $this->sIndex && empty($this->sIndex), '', "|{$this->sIndex}");
        return $this->_getFiltered($this->_getFlatFieldName() . $_sIndex);
    }
}