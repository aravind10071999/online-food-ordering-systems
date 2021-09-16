<?php
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
echo 'not connected';
die (mysqli_error());
} 
session_start();

$usermailid=$_POST['usermailid'];
$password=$_POST['password'];
if($usermailid=='admin' && $password=='admin')
{	
	echo'<script type="text/javascript">alert("Successfully logged")</script>';
	echo'<script type="text/javascript">window.location="Admin.html";</script>';
}
else
{
$sql="SELECT * from `cutomerreg` where `mailid`='$usermailid' And `password`='$password'"; 
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
        $_SESSION["usermailid"]=$row['mailid'];
		$_SESSION["name"]=$row['Name'];
        $_SESSION["phone"]=$row['phone'];
        
if($row)
{		
		echo'<script type="text/javascript"> alert("SUCCESS ! ! ! !")</script>';
		echo'<script type="text/javascript">window.location = "home.html";</script>';

 }
else
{
        echo '<script type="text/javascript"> alert("INVALID ID / PASSWORD ! ! ! !")</script>';
		echo'<script type="text/javascript">window.location = "0index.html";</script>';
}
}
?>