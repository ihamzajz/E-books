<?php

include 'dbconfig.php';
if (isset($_POST['ucreatebtn'])) {
	$username =  $_POST['username'];
	$password =  $_POST['userpassword'];

	$insert = "INSERT INTO user (username,password) VALUES ('$username','$password')";

	$insert_q=mysqli_query($conn,$insert);
	if ($insert_q) {
		?>
		<script type="text/javascript">
			alert("Data inserted successfully!");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Data inserting failed!");
		</script>
		<?php
	}
	}

?>




 