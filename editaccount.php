<?php

	session_start();

$a=$_SESSION['username'];
$b=$_POST['name'];
$c=$_POST['telephone'];
$d=$_POST['address'];
$e=$_POST['email'];
$f=$_POST['gender'];


$con=new mysqli("localhost","root","","nibm");

$sql="UPDATE staff SET name='$b' , telno='$c' , address='$d' , email='$e' , gender='$f'  WHERE regId='$a'";

if($con->query($sql))
{	
	echo "<script>alert('Account Updated!');</script>";
	header('Location:staff-editaccount.html');
}
else
{
	echo "<script>alert('Account Update Failed!');</script>";
	header('Location:staff-editaccount.html');	

}	
   
  
?>









