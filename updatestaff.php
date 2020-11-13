
<?php

$a=$_POST['regid'];
$b=$_POST['name'];
$c=$_POST['telephone'];
$d=$_POST['address'];
$e=$_POST['email'];
$g=$_POST['radios'];
$f=$_POST['password'];


$con=new mysqli("localhost","root","","nibm");

$sql="UPDATE staff SET name='$b' , telno='$c' , address='$d' , email='$e' , gender='$g' , password='$f' WHERE regid='$a'";

if($con->query($sql))
{	
	echo "<script>alert('Successfully Updated!');</script>";
	header('Location:admin-updatestaff.html');
}
else
{
	echo "<script>alert('Staff Member Update Failed!);</script>";
		header('Location:admin-updatestaff.html');	

}	
   
  
?>









