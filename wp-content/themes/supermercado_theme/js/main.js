jQuery( document ).ready(function($) {



    


    $('#site-navigation').on( "click", function() {
    	if ($(this).hasClass('toggled')) {
    		$(this).removeClass('toggled');
    	}else{
    		$(this).addClass('toggled');
    	}
	});
});