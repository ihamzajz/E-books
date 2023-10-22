<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order book</title>
		<!-- css plugins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--main css-->
	<link rel="stylesheet" href="files/assets/css/styles.css">

	      <style type="text/css">
      input[type=text],[type=password],input[type=file],select,[type=number],[type=email]
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
		include 'user-navbar.php'
	?>
	<div class="container" style="padding-bottom: 70px;padding-top:110px;">


		<div class="row justify-content-center pt-5">

			<div class="col-lg-4 col-md-6"> 

				<h3 class="text-center pb-3" style=" font-size: 32px;">Order book</h3>

				<form action="" method="POST" enctype="multipart/form-data"    style="border-top: 4px solid black; border-left:4px solid black; padding: 15px; padding-bottom: 0px;">

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Book name</label>
					  <input type="text" class="form-control" name="orderbname" required autocomplete="off">
			        </div>

        			<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Quantity</label>
					  <input type="number" class="form-control" name="orderqty" required autocomplete="off" min="1" max="10"> 
			        </div>


					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Full name</label>
					  <input type="text" class="form-control" name="ordername" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label  class="form-label" style="font-size: 15px">Email</label>
					  <input type="email" class="form-control" name="orderemail" required autocomplete="off"> 
			        </div>

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Address</label>
					  <input type="text" class="form-control" name="orderaddress" required autocomplete="off">
			        </div>

					<div class="mb-3">
					  <label class="form-label" style="font-size: 15px">Zip Code</label>
					  <input type="text" class="form-control" name="orderzip" required autocomplete="off">
			        </div>

		

	

                    <div class="text-center">
              			<button type="submit" class="btn btn-dark w-50" name="orderbtn">Place Order</button>
      			    </div>
				</form>
				<?php 
				include 'order-process.php';
				?>
			</div>
		</div>
	</div>
<?php
include 'user-footer.php';
?>
</body>
</html>