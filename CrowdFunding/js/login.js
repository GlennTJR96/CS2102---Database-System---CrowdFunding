$(document).ready(ini);

function ini(){
	"use strict";
    $("#submit").click(validate);
}	

function validate(){
	"use strict";
	
	var email = $("#email").val();
	var password = $("#psw").val();
	
	if( email === "" || password === "" ){
		$("div#done").addClass("error");
		$("div#done").html("<div class='alert alert-danger'><p align='center'><i class='fa fa-times-circle'></i><strong>Please enter both email and password</strong></p></div>");
	}
	
	else{
	
	$.ajax({
           type: "POST",
           url: "UserLogInResult.php",
			data: {
			email :email,
			user_password :password
			},
           success: function(data){
			  $("div#done").addClass("error");
			  $("div#done").html(data);
			  var field= document.getElementById('psw');
			  field.value= field.defaultValue;
           }
         });
		 
    return false;
  
	}
	
}