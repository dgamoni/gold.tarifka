
jQuery(document).ready(function($){

	$(".myevent").click(function(){
	
		var tit = $(this).attr('data-title');

				//------------- ajax  -----------------------------------			
				var data = {
						action: 'my_action',
						tit: tit      // We pass php values differently!

							};
				// We can also pass the url value separately from ajaxurl for front end AJAX implementations
				jQuery.post(
				MyAjax.ajaxurl,
				data,
				function(response) {
				alert('vall: ' + response);
				
				});	//------------------end ajax------------------------
	
	});//end click

}) //end document.ready