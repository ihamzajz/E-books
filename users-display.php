<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>

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

				<h3 class="text-center pb-3" style="font-family: proxi; font-size: 32px;">Users List</h3>
				<p class="text-info" ><a href="user-create.php" style="text-decoration: none; float: right;">Add new user</a></p>
				<?php

				include 'dbconfig.php';
				$select = "SELECT * FROM user";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>
				
				<table class="table table-bordered text-center" style="border-top:1px solid black;font-family: proxi;">
					<tr class="bg-dark text-white font-weight-light">
						<th>id</th>
						<th>Username</th>
						<th>Password</th>

						<th colspan="2">Actions</th>
					</tr>
					<?php 
					if($data){
						while ($row=mysqli_fetch_array($select_q)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['username']?></td>
								<td><?php echo $row['password']?></td>
								<td><a href="user-edit.php?id=<?php echo $row['id'] ?>" class="text-success" style="text-decoration: none;">Edit<a/></td>
								<td ><a href="user-delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete')" class="text-danger" style="text-decoration: none;">Delete<a/></td>
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