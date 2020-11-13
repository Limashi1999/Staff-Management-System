<?php
	
	session_start();

$a=$_SESSION['username'];
$b=$_POST['current'];
$c=$_POST['new'];

$con=new mysqli("localhost","root","","nibm");

$sql="UPDATE staff SET password='$c'  WHERE regId='$a'";

if($con->query($sql))
{	
	echo "<script>alert('Password Changed!');</script>";
	header('Location:staff-changepassword.php');
}
else
{
	echo "<script>alert('Password Change Failed!');</script>";
		header('Location:staff-changepassword.html');	

}	
   
  
?>



