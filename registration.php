<?php
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
	echo'not connected';
	die(mysqli_error());
}
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['mailid'];
$password=$_POST['password'];
$sql="insert into `cutomerreg`(`Name`,`mailid`, `phone`,`password`) values ('$name','$email','$phone','$password')";
$res=mysqli_query($conn,$sql);

if(!$res)
{
echo'<script type="text/javascript">alert("Try another emailid because this mail id is already registered")</script>';
echo'<script type="text/javascript">window.location= "registration.html";</script>';
}
else
{
	echo'<script type="text/javascript">alert("Successfully Registered")</script>';
	echo'<script type="text/javascript">window.location="0index.html";</script>';
}
?>
	