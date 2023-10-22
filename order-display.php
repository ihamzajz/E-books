<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order list</title>

			<!-- css plugins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--main css-->
	<link rel="stylesheet" href="files/assets/css/styles.css">
	<style type="text/css">

		a{
		text-decoration: none;
		}
		a: hover{
		text-decoration: none;

		}
	</style>
</head>
<body class="bg-light">


<?php
include 'admin-navbar.php';
?>

	<div class="container" style="padding-top: 10px;float: right;padding-right: 50px;">

		<div class="row justify-content-center">
			<div class="col-12">

				<h3 class="text-center pb-3" style=" font-size: 32px;">Order list</h3>

				<?php

				include 'dbconfig.php';
				$select = "SELECT * FROM orders";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>
				
				<table class="table table-bordered text-center" style="border-top:1px solid black;font-family: proxi;">
					<tr class="bg-dark text-white font-weight-light">
						<th>id</th>
						<th>Book name</th>
						<th>Quantity</th>
						<th>Full name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Zip Code</th>

						
					</tr>
					<?php 
					if($data){
						while ($row=mysqli_fetch_array($select_q)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['book_name']?></td>
								<td><?php echo $row['quantity']?></td>
								<td><?php echo $row['full_name']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['address']?></td>
								<td><?php echo $row['zip_code']?></td>
		
							</tr>

							<?php
						}
					}
					else{
						echo "No record found!";
					}
					?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>