<?php 
/**
	Admin Page Framework v3.7.10b05 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/admin-page-framework>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class AdminPageFramework_Form_View___Script_SectionTab extends AdminPageFramework_Form_View___Script_Base {
    static public function getScript() {
        return <<<JAVASCRIPTS
( function( $ ) {
        
    $.fn.createTabs = function( asOptions ) {
        
        var _bIsRefresh = ( typeof asOptions === 'string' && asOptions === 'refresh' );
        if ( typeof asOptions === 'object' ) {
            var aOptions = $.extend( 
                {}, 
                asOptions 
            );
        }
             
        var _sURLHash = 'undefined' !== typeof window.location.hash
            ? window.location.hash
            : '';

        this.children( 'ul' ).each( function () {
                 
            // First, check if the url has a hash that exists in this tab group. 
            // Consider the possibility that multiple tab groups are in one page.
            var _bSetActive = false;
            $( this ).children( 'li' ).each( function( i ) {     
                var sTabContentID = $( this ).children( 'a' ).attr( 'href' );
                if ( '' !== _sURLHash && sTabContentID === _sURLHash ) {
                    _bSetActive = true;
                    return false;
                }
            });
            
            // Second iteration
            $( this ).children( 'li' ).each( function( i ) {     
                
                var sTabContentID = $( this ).children( 'a' ).attr( 'href' );

                // If the url hash is set, compare the content id with it. If it matches, activate it.
                if ( '' !== _sURLHash && sTabContentID === _sURLHash ) {
                    $( this ).addClass( 'active' );
                }
                
                if ( ! _bIsRefresh && ! _bSetActive ) {
                    $( this ).addClass( 'active' );
                    _bSetActive = true;
                }
                
                if ( $( this ).hasClass( 'active' ) ) {
                    $( sTabContentID ).show();
                } else {                           
                    $( sTabContentID ).css( 'display', 'none' );
                }
                
                $( this ).addClass( 'nav-tab' );
                $( this ).children( 'a' ).addClass( 'anchor' );
                
                $( this ).unbind( 'click' ); // for refreshing 
                $( this ).click( function( e ){
                         
                    e.preventDefault(); // Prevents jumping to the anchor which moves the scroll bar.
                    
                    // Remove the active tab and set the clicked tab to be active.
                    $( this ).siblings( 'li.active' ).removeClass( 'active' );
                    $( this ).addClass( 'active' );
                    
                    // Find the element id and select the content element with it.
                    var sTabContentID = $( this ).find( 'a' ).attr( 'href' );
                    var _oActiveContent = $( this ).parent().parent().find( sTabContentID ).css( 'display', 'block' ); 
                    _oActiveContent.siblings( ':not( ul )' ).css( 'display', 'none' );
                    
                });                        

            });

        });      
                                
    };

    
}( jQuery ));
JAVASCRIPTS;
        
    }
    static private $_bLoadedTabEnablerScript = false;
    static public function getEnabler() {
        if (self::$_bLoadedTabEnablerScript) {
            return '';
        }
        self::$_bLoadedTabEnablerScript = true;
        new self;
        $_sScript = <<<JAVASCRIPTS
jQuery( document ).ready( function() {
// the parent element of the ul tag; The ul element holds li tags of titles.
jQuery( '.admin-page-framework-section-tabs-contents' ).createTabs(); 
});            
JAVASCRIPTS;
        return "<script type='text/javascript' class='admin-page-framework-section-tabs-script'>" . '/* <![CDATA[ */' . $_sScript . '/* ]]> */' . "</script>";
    }
}