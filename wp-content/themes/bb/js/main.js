//Toggle serach for wrappers
/*
$('#search-form-toggle, #search-form-close').on('click', function(){
	$('#search-box, #search-form-close').toggleClass('toggled');
	
	$('#search-form input#s').attr('value','Search...');
}); 
*/

//apl fits vids to all iframes embedded in the text of posts.
var videoIframes = $('p > iframe');
console.log( videoIframes );


$('input#s').on('focus', function(){

	$('body, html').animate({
		scrollTop : 0
	} , 200 );
	
});


//remove width and heights that WP applies to images in post body
$('img').each(function(){
	$(this).removeAttr('width');
	$(this).removeAttr('height');
})

$('#masonize-me').imagesLoaded(function() {
    $('#masonize-me').masonry({
        itemSelector: '.post'
    });
});

	
	$('#searchform #s').on('focus', function(){
		$('#searchsubmit').addClass('focussed');
		//console.log('focus')
	});
	
/*
	
	if( $('#searchform #s').has('focus')) {
		$('#searchsubmit').addClass('focussed');
	}
	else {
		$('#searchsubmit').removeClass('focussed');
	}

*/




	var $formWrapper = $('#mc_embed_signup');
	var $form = $('#mc-embedded-subscribe-form'); //chnage to id of your form
	var $formInput = $('#mc-embedded-subscribe-form input[type="submit"]');



	// Form validation 
	if ( $form.length > 0 ) {
	    $formInput.bind('click', function ( event ) {
	        if ( event ) event.preventDefault();
	        // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
	        if ( validate_input($form) ) { register($form); }
	    });
	}



	// Hide the Error message when user click on the input again  
	$(document).on('click', '#mc_embed_signup input', function(){
		var $errorResponce = $('#mce-error-response');
	    if ( !$errorResponce.hasClass('style')) {
	    	$errorResponce.fadeOut('slow');
	    }
	});



	
function validate_input($form) {
	if ( $form.find('input').val() == "" )
		return false; 
	else 
		return true;
}

function register($form) {

    $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize(),
        cache       : false,
        dataType    : 'jsonp',
        jsonp : 'c', 
        contentType: "application/json; charset=utf-8",
        error       : function(err) { alert("Could not connect to the server. Please try again later."); },
        success     : function(data) {
            if (data.result != "success") {
            //On Error
                $('#mce-error-response').removeAttr('style').html(data.msg);
            } else {
            //On success
                $('#mc_embed_signup').append('<div id="mce-success-response">'+ data.msg +'</div>')
            }
        }
        });
}
