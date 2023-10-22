<?php

session_start ();
include("dbconfig.php"); 

if(isset($_REQUEST['submit']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($conn,"SELECT * FROM admin WHERE username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:books-display.php");
}
else	
{
	header("location:admin-login.php?err=1");
	
}
}
?>