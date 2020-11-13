function validate()
	{

var a=document.getElementById("email").value;
var b=document.getElementById("password").value;

if(a== ""){
	alert("Email can not be blank");
	return false;
	
}
else if(b== ""){
	alert("Password can not be blank");	
	return false;
}else 
{

	return true;
}
	
	
	}