<?php

$a=$_POST['regid'];


$con=new mysqli("localhost","root","","nibm");

$sql="DELETE FROM Staff WHERE regid='$a'";

if($con->query($sql))
{	echo "<script>alert('Successfully Deleted!');</script>";

	header('Location:admin-deletestaff.html');
}
else
{
	echo "<script>alert('Staff Member Delete Failed!');</script>";
		header('Location:admin-deletestaff.html');	

}	
   
  
?>