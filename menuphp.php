<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
	echo'not connected';
	die(mysqli_error());
}

$hotel=$_POST[];
$Name=$_SESSION["name"];
$phone=$_SESSION["phone"];
$dish=$_POST[];
$quantity=$_Post[];
$price=$_POST[];

$new=$quantity*$price;

$sql="INSERT INTO `order`(`Hotal`, `Name`, `emailid`, `phone_no`, `dish`, `quantity`, `amount`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
$res=mysqli_query($conn,$sql);
if(!res)
{
	echo'<script type="text/javascript">alert("TryAgain")</script>';
	echo'<script type="text/javascript">window.location= "menu.php";</script>';
}
else
{
	echo'<script type="text/javascript">alert("Ordered Successfully")</script>';
	echo'<script type="text/javascript">window.location="menu.php";</script>';
}
?>
