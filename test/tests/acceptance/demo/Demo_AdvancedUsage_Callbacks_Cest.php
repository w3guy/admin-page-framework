<?php


/**
 * Bootstrap does not work for including abstract classes.
 * @see     https://github.com/Codeception/Codeception/issues/862
 */
require_once( dirname( dirname( __FILE__ ) ) . '/_bootstrap.php' );

class Demo_AdvancedUsage_Callbacks_Cest extends \Demo_AdminPage_Base {

    /**
     * @group   demo
     * @group   form
     * @group   advanced_usage
     * @group   callbacks
     * @group   admin
     * @group   loader
     */
    public function checkTab( \AcceptanceTester $I ) {

        $I->wantTo( 'Check the Callbacks tab of the built-in field type of the demo of the loader plugin.' );

        // Click on the 'Built-in Field Types' menu link.
        // <a href="edit.php?post_type=apf_posts&amp;page=apf_advanced_usage">Advanced Usage</a>
        $I->click( '//li/a[contains(@href, "page=apf_advanced_usage")]' );

        // Click on the 'Callbacks' tab.
        $I->click( '//a[@data-tab-slug="callbacks"]' );

        $this->_checkCommonElements( $I );

        // Check some field elements.
        $I->seeElement( '//select[contains(@name, "callback_example")]' );

        // @todo fill the form and confirm that values are stored

    }

}
