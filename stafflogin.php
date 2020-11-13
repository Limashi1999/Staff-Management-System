<?php
session_start();

$a=$_POST['email'];
$b=$_POST['password'];

$con=new mysqli("localhost","root","","nibm");

$sql="SELECT * FROM staff where email = '$a'";

$resultSet = mysqli_query($con,$sql);
if(mysqli_num_rows($resultSet)>0){
	$row = mysqli_fetch_assoc($resultSet);
	if($row['password'] == $b){
	
	$_SESSION['username']=$row['regid'];

	echo "<script>alert('Successfully Logged!');</script>";
	header('Location:staff-home.html');	}
	
	else{
	echo "<script>alert('Password is Wrong');</script>";
	header('Location:staff-login.html');	

	}
	
}else{
	echo "<script>alert('Email is Wrong');</script>";
	header('Location:staff-login.html');	

}
  
?>
