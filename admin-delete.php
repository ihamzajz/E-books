
<?php

include 'dbconfig.php';
$id=$_GET['id'];
$delete="DELETE FROM admin WHERE id = '$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:admins-display.php');

?>