<?php


$a=$_POST['email'];
$b=$_POST['password'];

$con=new mysqli("localhost","root","","nibm");

$sql="SELECT * FROM admin where email = '$a'";

$resultSet = mysqli_query($con,$sql);
if(mysqli_num_rows($resultSet)>0){
	$row = mysqli_fetch_assoc($resultSet);
	if($row['password'] == $b){

	echo "<script>alert('Successfully Logged!');</script>";
	
	header('Location:admin-home.html');	
	}
	
	else{
	echo "<script>alert('Password is Wrong');</script>";

	header('Location:admin-login.html');	
	}

	}
	
else{
	echo "<script>alert('Email is Wrong');</script>";

	header('Location:admin-login.html');	
	}


  
?>

