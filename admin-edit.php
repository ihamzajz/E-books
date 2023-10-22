<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin edit</title>

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

				$select="SELECT * FROM admin WHERE id = '$id'";
				$select_q=mysqli_query($conn,$select);
				$fetch=mysqli_fetch_array($select_q);
			?>

				<form action="" method="POST" style="border-top: 4px solid black; border-left:4px solid black; padding:15px; padding-bottom: 0px;">
					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Username</label>
					  <input type="text" class="form-control" name="adminname" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label  class="form-label" style="font-size: 15px">Password</label>
					  <input type="password" class="form-control" name="adminpassword" required autocomplete="off">
			        </div>


	

                    <div class="text-center">
              			<button type="submit" class="btn btn-dark w-50" name="aupdatebtn">Update</button>
      			    </div>
      			    <p class="text-left pt-2"><a href="admins-display.php" class="text-success" style="font-size:17px">Back to list</a></p>
				</form>

				<?php
               		if (isset($_POST['aupdatebtn'])) {
               				$username =  $_POST['adminname'];
											$password =  $_POST['adminpassword'];
						

											$update="UPDATE admin SET username='$username',password ='$password'";
											$update_q=mysqli_query($conn,$update);

               		}
				?>
		</div>
	</div>
	
</div>
</body>
</html>