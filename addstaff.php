<?php

$a=$_POST['regid'];
$b=$_POST['name'];
$c=$_POST['telephone'];
$d=$_POST['address'];
$e=$_POST['email'];
$f=$_POST['password'];
$g=$_POST['radios'];


$con=new mysqli("localhost","root","","nibm");

$sql="INSERT INTO staff VALUES('$a','$b','$c','$d','$e','$f','$g')";

if($con->query($sql))
{	
	echo "<script>alert('Successfully Added!');</script>";
	header('Location:admin-addstaff.php');
}
else
{
	echo "<script>alert('Staff Member Adding Failed!');</script>";
		header('Location:admin-addstaff.html');	

}	
   
  
?>