<?php

$a=$_POST['fullname'];
$b=$_POST['email'];
$c=$_POST['subject'];
$d=$_POST['message'];

$con=new mysqli("localhost","root","","nibm");

$sql="INSERT INTO contact VALUES('$a','$b','$c','$d')";

if($con->query($sql))
{	
	echo "<script>alert('Message Sent!');</script>";
	header('Location:contact.html');
}
else
{
	echo "<script>alert('Message Sending Failed!');</script>";
}	
   
  
?>