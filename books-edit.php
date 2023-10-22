<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book edit</title>

		<!-- css plugins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--main css-->
	<link rel="stylesheet" href="files/assets/css/styles.css">



	  <style type="text/css">
      input[type=text],[type=password],input[type=file],select
      {
        background-color: white;
        border: 2px solid #f26827;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: black;
        font-size: 15px;
        font-weight: 300;
        padding-left: 5px;
      }
      .form-control:focus {
          border-color: inherit;
          -webkit-box-shadow: none;
          box-shadow: none;
          border: 2px solid #f26827;
          outline: 0;
          background-color: white;
          color: black;
      }

      input:focus {
          outline: none;
          box-shadow: 0 0 0;
      }
    </style>

</head>
<body class="bg-light">
			<?php
		include 'admin-navbar.php'
	?>
<div class="container" style="padding-bottom:50px">

	<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6"> 
				<h3 class="text-center pb-3" style="font-family: proxi; font-size: 32px;padding-top: 10px;">Edit Book</h3>
			<?php

include 'dbconfig.php';
$id=$_GET['id'];

$select="SELECT * FROM books WHERE id = '$id'";
$select_q=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($select_q);
?>

				<form action="" method="POST" enctype="multipart/form-data"    style="border-top: 4px solid black; border-left:4px solid black; padding: 15px; padding-bottom: 0px;">
					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Name</label>
					  <input type="text" class="form-control" name="bname" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label  class="form-label" style="font-size: 15px">Author</label>
					  <input type="text" class="form-control" name="bauthor" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Price</label>
					  <input type="text" class="form-control" name="bprice" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Description</label>
					  <input type="text" class="form-control" name="bdescription" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Genre</label>
					  <input type="text" class="form-control" name="bgenre" required autocomplete="off">
			        </div>




			    	<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Image</label>
					  <input type="file" class="form-control" name="bimage" required>
			        </div>

  			    	<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">PDF</label>
					  <input type="file" class="form-control" name="bpdf" required readonly>
		        </div>


					<div class="mb-1">
						<label style="font-size: 15px">Rating</label>

						<select name="brating" id="">
						  <option value="★">★</option>
						  <option value="★★">★★</option>
						  <option value="★★★">★★★</option>
						  <option value="★★★★">★★★★</option>
						  <option value="★★★★★">★★★★★</option>
						</select>
			        </div>


			        <div class="mb-1">
			        	
			        	<label for="status" style="font-size: 15px;">Status:</label>

						<select name="bstatus" id="">
						  <option value="Available">Available</option>
						  <option value="Not Available">Not Available</option>
						</select>
			        </div>


	

                    <div class="text-center">
              			<button type="submit" class="btn btn-dark w-50" name="bupdatebtn">Update</button>
      			    </div>
      			    <p class="text-left pt-2"><a href="books-display.php" class="text-success" style="font-size:17px">Back to list</a></p>
				</form>

				<?php
               		if (isset($_POST['bupdatebtn'])) {
               				$name =  $_POST['bname'];
							$author =  $_POST['bauthor'];
							$price =  $_POST['bprice'];
							$description =  $_POST['bdescription'];
							$rating =  $_POST['brating'];
							$status =  $_POST['bstatus'];
							$genre =  $_POST['bgenre'];
							$image =  $_FILES['bimage']['name'];
							$tmp_name =  $_FILES['bimage']['tmp_name'];
							$destination = "images/".$image;
							if ($image!="") 
							{
								move_uploaded_file($tmp_name, $destination);
								$update="UPDATE books SET name='$name',author ='$author',price='$price',description='$description',rating='$rating',status='$status',genre='$genre',image='$image' WHERE id = '$id'";
								$update_q=mysqli_query($conn,$update);
								header('location:books-display.php');
							}
							else
							{
								$update="UPDATE books SET name='$name',author ='$author',price='$price',description='$description',rating='$rating',status='$status',genre='$genre'WHERE id = '$id'";
								$update_q=mysqli_query($conn,$update);
								header('location:books-display.php');
							}
               		}
				?>
		</div>
	</div>
	
</div>
</body>
</html>