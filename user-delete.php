
<?php

include 'dbconfig.php';
$id=$_GET['id'];
$delete="DELETE FROM user WHERE id = '$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:users-display.php');

?>