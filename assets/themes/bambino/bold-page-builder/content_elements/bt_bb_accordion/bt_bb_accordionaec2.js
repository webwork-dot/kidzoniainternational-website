(function( $ ) {
	"use strict";
	$( '.bt_bb_accordion_item' ).click(function() {
		var $item = $( this ).closest( '.bt_bb_accordion_item' );
		if ( ! $item.hasClass('on') ) {
			$( this ).closest( '.bt_bb_accordion' ).find( '.bt_bb_accordion_item.on' ).removeClass( 'on' );
			$item.addClass( 'on' );
			if( ! window.initialaccordion ) {
				var top_of_element = $item.offset().top;
				var bottom_of_element = $item.offset().top + $("#element").outerHeight();
				var bottom_of_screen = $( window ).scrollTop() + $(window).innerHeight();
				var top_of_screen = $( window ).scrollTop();
				var diff = top_of_screen - top_of_element;
				if( diff > 0 ) {
					$( 'html' ).scrollTop( $( 'html' ).scrollTop() - diff - 15 );
				}

			} else {
				window.initialaccordion = false;
			}
		
		} else {
			$( this ).closest( '.bt_bb_accordion_item' ).removeClass( 'on' );
		}
	});
	$( '.bt_bb_accordion' ).each(function() {
		if ( $( this ).data( 'closed' ) != 'closed' ) {
			window.initialaccordion = true;
			$( this ).find( '.bt_bb_accordion_item' ).first().click();
		}
	});
})( jQuery );