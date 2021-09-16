<?php
error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","","swiggy");
if(!conn)
{
	echo'not connected';
	die(mysqli_error());
}
$mailid=$_SESSION["usermailid"];
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
	<body style="background-image:url(img5.jpg) ; background-size :cover">
	<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	<table class="center">
	<caption style="font-size:40px"><strong>Your Order</strong></caption>
	<thead style="background-color:#FFC312">
	<tr><th>Name of the Dish</th><th>Price</th><th>Quantity</th></tr>
	</thead>
	<tbody style="background-color:white">
	<?php
	echo$mailid;
	$sql="select * from `order` where `emailid`='$mailid'";
	$res=mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_array($res))
	{
	echo'<tr><td>'.$row['dish'].'</td><td>'.$row['quantity'].'</td><td>'.$row['amount'].'</td></tr>';
	}
	?>
	</tbody>
	</table>
	</body>
	</html>
	
	