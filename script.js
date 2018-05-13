$(document).ready(function(){

	

	$('#formsubmit').click(function(){
	//post to the php file	
		$.post("submit.php", 
			{
			name: $('#name').val(), 
			email: $('#email').val(),
			gender: $("[name='gender']:checked").val(),
			password:$('#password').val(),
			comm: $("[name='communucation']:checked").val()
			}, 

			//the response of the php file
			function(data){
				$('#response').html(data);
			}
		);
		
	});

});

