<?php

include 'dbconfig.php';
if (isset($_POST['bcreatebtn'])) {
	$name =  $_POST['bname'];
	$author =  $_POST['bauthor'];
	$price =  $_POST['bprice'];
	$description =  $_POST['bdescription'];
	$rating =  $_POST['brating'];
	$status =  $_POST['bstatus'];
	$genre =  $_POST['bgenre'];

	$pdf =  $_FILES['bpdf']['name'];
	$tmp_name =  $_FILES['bpdf']['tmp_name'];
	$destination = "images/".$pdf;
	move_uploaded_file($tmp_name, $destination);

	$image =  $_FILES['bimage']['name'];
	$tmp_name =  $_FILES['bimage']['tmp_name'];
	$destination = "images/".$image;
	move_uploaded_file($tmp_name, $destination);

	$insert = "INSERT INTO books (name,author,price,rating,status,description,image,genre,pdf) VALUES ('$name','$author','$price','$rating','$status','$description','$image','$genre','$pdf')";

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




 