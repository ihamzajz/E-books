<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books display</title>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    
   <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 





	
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
include 'dbconfig.php';
include 'admin-navbar.php';
?>

	<div class="container" style="padding-top: 10px;float: right;padding-right: 50px;">

		<div class="row justify-content-center">
			<div class="col-12">

				<h3 class="text-center pb-3" style="font-family: proxi; font-size: 32px;">Books Details</h3>
				<p class="text-info" ><a href="books-create.php" style="text-decoration: none; float: right;">Add new book</a></p>
				<?php

				include 'dbconfig.php';
				$select = "SELECT * FROM books";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>
				
				<table  class="table table-bordered text-center  " style="border-top:1px solid black;font-family: proxi;">
					<thead>
						<tr style="background-color: black;color: white;font-weight: 200;">
						<th>Id</th>
						<th>Name</th>
						<th>Author</th>
						<th>Price</th>
						<th>Description</th>
						<th>Image</th>
						<th>Status</th>
						<th>Rating</th>
						<th>Genre</th>
						<th colspan="2">Actions</th>
					</tr>
					</thead>
			
					<?php 
					if($data){
						while ($row=mysqli_fetch_array($select_q)) {
							?>
							<tbody>
								<tr style="font-size:15px">
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['author']?></td>
								<td><?php echo $row['price']?></td>
								<td style="font-size:12px"><?php echo $row['description']?></td>
								<td><img src="images/<?php echo $row['image']?>" style="width: 80px;"> </td>
								<td><?php echo $row['status']?></td>
								<td><?php echo $row['rating']?></td>
								<td><?php echo $row['genre']?></td>
								<td><a href="books-edit.php?id=<?php echo $row['id'] ?>" class="text-success" style="text-decoration: none;color: green;">Edit<a/></td>
								<td ><a href="books-delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete')" style="text-decoration: none;color: red;">Delete<a/></td>
							</tr>
							</tbody>

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
