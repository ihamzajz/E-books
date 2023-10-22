<?php

include 'dbconfig.php';
if (isset($_POST['acreatebtn'])) {
	$username =  $_POST['adminname'];
	$password =  $_POST['adminpassword'];

	$insert = "INSERT INTO admin (username,password) VALUES ('$username','$password')";

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




 