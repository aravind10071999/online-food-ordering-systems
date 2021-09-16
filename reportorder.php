<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","swiggy");
if(!conn)
{
	echo'not connected';
	die(mysqli_error());
}


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<style>
	table
	{	
		width:70%;
		border:4px solid black;
		border-collapse:collapse;
	}
	table,th,tr,td
	{
		border:6px solid black;
		background-color:peach;
		padding:15px;
		text-align:center;
	}
	table.center
	{
		margin-left:auto;  
		margin-right: auto;
	}
	
	</style>
	</head>
	<body style="background-image:url(img8.jpg) ; background-size :cover">
	<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
	<table class="center">
	<caption style="font-size:40px"><strong>Customer Orders</strong></caption>
	<thead style="background-color:#FFC312">
	<tr><th>Hotel Name</th><th>Customer Name</th><th>Phone no</th><th>Dish</th><th>Quantity</th><th>Amount</th></tr>
	</thead>
	<tbody style="background-color:white">
	<?php
	session_start();
	$name=$_SESSION["name"];
	$phone=$_SESSION["phone"];
	$sql="select * from `order` where 1";
	$res=mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_array($res))
	{
	echo'<tr><td>'.$row['Hotal'].'</td><td>'.$name.'</td><td>'.$phone.'</td><td>'.$row['dish'].'</td><td>'.$row['quantity'].'</td><td>'.$row['amount'].'</td></tr>';
	}
	?>
	</tbody>
	</table>
	</body>
	</html>
	
	