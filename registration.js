$(document).ready(function(){

$("#register").click(function(){

	var name = $("#name").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var cpassword = $("#cpassword").val();
    var error= 0;
	
	if( name =='' || email =='' || password =='' || cpassword =='')
		{
            // window.location.href='registration.html';
		  alert("Please fill all fields...!!!!!!");
            error=1;
           
		}		
	else if((password.length)<8)
		{
			alert("Password should atleast 8 character in length...!!!!!!");
              error=1;
		}
		
    if(!(password).match(cpassword))
		{
			alert("Your passwords don't match. Try again?");
              error=1;
		} 
	
	else
	   {
           error=2;
           if(eror==2){
               
	     $.post("register.php",{ name1: name, email1: email, password1:password},
		  function(data) {
		   if(data=='You have Successfully Registered.....')
		   {
			$("form")[0].reset();
				
		   }
		   alert(data);
		});}
        else
            {
              window.location.href='registration.html';
            }
	   }
	
	});

});
