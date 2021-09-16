<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
	echo'not connected';
	die(mysqli_error());
}
$hotel = $_POST['hotel'];
echo"$hotel";
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
		border-collapse:collapse;
		border:4px solid black;
		background-color:peach;
		padding:15px;
		text-align: center;
		font-variant: small-caps;
		font-size:25px;
		
		}
	table.center
	{
		margin-left:auto;  
		margin-right: auto;
	}
	
	</style>
	</head>
	<body style="background-image: url('img2.jpg'); background-size: cover;">
	<a href="home.html"><i class="fa fa-arrow-left" style="font-size:24px;color:black">BACK</i></a>
	
	

	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="logout.php"><i class="fa fa-arrow-left" style="font-size:24px;color:black">logout</i></a> 
	<table class="center">
	<caption style="font-size:40px"><strong>Menu</strong></caption>
	<thead style="background-color:#FFC312">
	<?php
	echo'<tr><th>Name of the Dish</th><th>Price</th><th>Select your Quantity</th><th>Cart</th></tr>';?>
	</thead>
	<tbody style="background-color:white">
	<?php
	if($hotel=="Le Meridien Menu")
	{
		$sql="SELECT `menu`,`Price` FROM `product` WHERE Hotal='Le Meridien Coimbatore'";
		$res=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';
		}
		
	}
	
		elseif($hotel=="Shree Anandhaas Menu")
		{
		$sql="select * from `product` where `Hotal`='Shree Annapoorna'";
		$res=mysqli_query($conn,$sql);
		
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';		
		}
		
		}
		elseif($hotel=="Hari bhavan Menu")
		{
		$sql="select * from `product` where `Hotal`='Hari Bhavan'";
		$res=mysqli_query($conn,$sql);
		
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';
		}
		
		}
		elseif($hotel=="Shree Annapoorna Menu")
		{
		$sql="select * from `product` where `Hotal`='Shree Annapoorna'";
		$res=mysqli_query($conn,$sql);
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';
		}
		
		}
		elseif($hotel=="French door menu")
		{
		$sql="select * from `product` where `Hotal`='The French Door Cafe & Restaurant'";
		$res=mysqli_query($conn,$sql);
		
		
		while($row=mysqli_fetch_array($res))
		{
        echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';  		
		}
		}
		elseif($hotel=="Ci Gusta Menu")
		{
		$sql="select * from `product` where `Hotal`='Ci Gusta!'";
		$res=mysqli_query($conn,$sql);
		
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';
		}
		
		}
		elseif($hotel=="Tandoori Tonight Menu")
		{
		$sql="select * from `product` where `Hotal`='Tandoori Tonight'";
		$res=mysqli_query($conn,$sql);
		
		
		while($row=mysqli_fetch_array($res))
		{
		echo '<tr><td>'.$row['menu'].'</td><td>'.$row['Price'].'</td><td><input type="number" name="quantity"></td><td><input type="submit" name="sumit" value="cart"></td></tr>';
		}
		
		}?>
			
		</tbody>
		
</table>
	
	</body>
	</html>
	
	