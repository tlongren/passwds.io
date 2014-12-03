$(document).ready(function() {
	
	//if submit button is clicked
	$('#generateSubmit').click(function () {		
		
		//Get the data from all the fields
		var data = $("#passwordSubmitForm").serialize();
		
		//start the ajax
		$.ajax({
			url: "process.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html=="good") {					
					$('.notComplete').fadeOut('fast');
					$('.passwordList').fadeIn('fast');
					$.ajax({
						//this is the php file that processes the data and send mail
						url: "getPasswords.php",	
						
						//GET method is used
						type: "GET",
					
						//pass the data			
						data: data,		
						
						//Do not cache the page
						cache: false,
						
						//success
						success: function (html) {
								$('.passwordList').html(html);			
						}		
					});
				} else if (html=="notComplete") {
					$('.passwordList').fadeOut('fast');
					$('.notComplete').fadeIn('fast');
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
				
		//cancel the submit button default behaviours
		return false;
	});	
});	