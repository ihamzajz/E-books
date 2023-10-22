<?php
$host = 'localhost';
$username = 'root';
$password= '';
$database = 'ebook';

$conn = new mysqli ($host,$username,$password,$database);
if($conn-> connect_error) 

	die('connection error');

?>