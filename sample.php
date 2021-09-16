<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","swiggy");
if(!conn)
{
	echo'not connected';
	die(mysqli_error());
}
$name = $_POST['hotel'];
echo"$name";
?>