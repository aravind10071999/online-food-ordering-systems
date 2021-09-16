<?php
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
	echo'not connected';
	die(mysqli_error());
}
$hotel=$_POST['hotel'];
$Dish=$_POST['Dish'];
$price=$_POST['price'];

$sql="INSERT INTO `product`(`Hotal`, `menu`, `Price`)VALUES('$hotel','$Dish','$price')";
$res=mysqli_query($conn,$sql);

if(!$res)
{
echo'<script type="text/javascript">alert("Not Inserted Try Again")</script>';
echo'<script type="text/javascript">window.location= "Addproduct.html";</script>';
}
else
{
	echo'<script type="text/javascript">alert("Successfully Inserted")</script>';
	echo'<script type="text/javascript">window.location="Addproduct.html";</script>';
}
?>