/*
Custom scripting for app
*/
(function( $ ){
	
	$.mobile.defaultDialogTransition = "flip";

	
	$( document ).bind( "pagebeforeshow", function(e){
		
		// Add next page's class to body
		var pageClass = $( e.target ).attr( "class" ),
			types	= pageClass.match( /(albums?|view|signout)/ ) && RegExp.$1 || "",
			interior = pageClass.indexOf( "interior" ) >-1 ? " interior" : "";

		$( "body" ).attr( "class", types + interior );
		
		
		//change default transition depending on window size
		if( $( window ).width() >= 1000 ){
			$.mobile.defaultPageTransition = "fade";
		}
		else{
			$.mobile.defaultPageTransition = "slide";
		}
		
	});
	
	
		// beforecreate, make the signout button
	$( document ).bind( "pagebeforecreate", function( e ){

		//create button from signout link
		$( ".signout", e.target )
			.buttonMarkup({
				iconpos: "notext",
				icon: "gear",
				theme: "d"
			})
			.addClass( "ui-btn-right" );
		
		//create button from signout link
		$( ".back-albums", e.target )
			.buttonMarkup({
				iconpos: "notext",
				icon: "arrow-l",
				theme: "d"
			})
			.addClass( "ui-btn-left" );	
	
		//create button from signout link
		$( ".close", e.target )
			.buttonMarkup({
				iconpos: "notext",
				icon: "grid",
				theme: "d"
			})
			.addClass( "ui-btn-left" );
	});	
	
})( jQuery );