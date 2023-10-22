<?php

include 'dbconfig.php';
if (isset($_POST['susubmit'])) {
	$username =  $_POST['suusername'];
	$password =  $_POST['supassword'];

	$insert = "INSERT INTO user (username,password) VALUES ('$username','$password')";

	$insert_q=mysqli_query($conn,$insert);
	if ($insert_q) {
		?>
		<script type="text/javascript">
			alert("Data inserted successfully!");
			window.location.href = "index.php";
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




 