<?php

session_start ();
include("dbconfig.php"); 

if(isset($_REQUEST['usubmit']))
{
$a = $_REQUEST['uusername'];
$b = $_REQUEST['upassword'];

$res = mysqli_query($conn,"SELECT * FROM user WHERE username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:user-panel.php");
}
else	
{
	header("location:user-login.php?errr=1");
	
}
}
?>