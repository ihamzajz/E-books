
<?php

include 'dbconfig.php';
$id=$_GET['id'];
$delete="DELETE FROM books WHERE id = '$id'";
$delete_q=mysqli_query($conn,$delete);
header('location:books-display.php');

?>