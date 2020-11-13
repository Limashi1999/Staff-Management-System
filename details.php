<?php



$con=new mysqli("localhost","root","","nibm");

$sql="SELECT * FROM staff ";


$result=$con->query($sql);
   
   echo "<table border='2' cellpadding='15'>";
   echo "<tr>";
   echo "<th>Registration ID</th>";
   echo "<th>Name</th>";
   echo "<th>Telephone No</th>";
   echo "<th>Address</th>";
   echo "<th>Email</th>";
   echo "<th> Gender</th>";
   echo "</tr>";
	while($col=$result->Fetch_assoc())
	{
	
	echo "<tr>";	
	echo "<td>".$col['regId'] ."</td>";
	echo "<td>".$col['name']."</td>";
	echo "<td>".$col['telno']."</td>";
	echo "<td>".$col['address']."</td>";
	echo "<td>".$col['email']."</td>";
	echo "<td>".$col['gender']."</td>";
	echo "</tr>";
	
	}
	echo "</table>";
	

  
?>