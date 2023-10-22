<?php

include 'dbconfig.php';
if (isset($_POST['orderbtn'])) {
	$bookname =  $_POST['orderbname'];
	$fullname =  $_POST['ordername'];
	$email =  $_POST['orderemail'];
	$address =  $_POST['orderaddress'];
	$zipcode =  $_POST['orderzip'];
	$quantity = $_POST['orderqty'];

	$insert = "INSERT INTO orders (full_name,email,address,zip_code,book_name,quantity) VALUES ('$fullname','$email','$address','$zipcode','$bookname','$quantity')";

	$insert_q=mysqli_query($conn,$insert);
	if ($insert_q) {
		?>
		<script type="text/javascript">
			alert("Your Order Has Been Placed!");
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





 