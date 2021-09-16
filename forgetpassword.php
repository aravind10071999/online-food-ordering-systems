<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","swiggy");
if(!$conn)
{
echo"Not connected";
die(mysqli_error());
}
$emailid=$_POST['forgetmailid'];
$phone=$_POST['forgetphone'];

$sql="select `password` from `cutomerreg` where `phone`='$phone' AND `mailid`='$emailid'";

$res=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($res))
{
echo'<script type="text/javascript">alert("YOUR PASSWORD :' .$row['password']. ' ")</script>';
echo'<script type="text/javascript">window.location = "0index.html";</script>';
}
else
{
echo'<script type="text/javascript">alert("User Not Found")</script>';
echo'<script type="text/javascript">window.location = "forgetpassword.html";</script>';
}
?>