<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css plugins -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--main css-->
  <link rel="stylesheet" href="files/assets/css/styles.css">
  <title>Admin login</title>

 
    <style type="text/css">
      input[type=text] 
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
      input[type=password] 
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
    </style>

  </head>



  <body class="bg-light"> 

<?php
include 'navbar.php';
?>


    <div class="container" style="padding-bottom: 70px;padding-top:110px;" >
    	<div class="row justify-content-center pt-5">
    		<div class="col-md-4 ">
    			<h3 class="text-center pb-3" style="font-family: proxi; font-size: 32px;">Admin login</h3>
			    <form action="admin-login-process.php" method="POST"   style="border-top: 4px solid black; border-left:4px solid black; padding: 15px; padding-bottom: 0px;">
					  <div class="mb-3">
					    <label class="form-label" style="font-size: 17px;font-family: proxi">User name</label>
					    <input type="text" class="form-control" name="username" required autocomplete="off">
					  </div>
					  <div class="mb-3">
					    <label style="font-size: 17px;font-family: proxi">Password</label>
					    <input type="password" class="form-control" name="password" required autocomplete="off">
					  </div>
            <div class="text-center">
              <button type="submit" class="btn btn-dark w-50" name="submit" style="font-family: proxi;font-size: 17px">login</button>
            </div>

            <br>
            <?php 
            if(isset($_REQUEST["err"]))
              $msg="Invalid username or Password";
            ?>
            <p style="color:red; text-align: center;">
            <?php if(isset($msg))
            {
              
            echo $msg;
            }
            ?>

</p>


					  
				</form>


  

    		</div>
    		
    	</div>
    </div>

    <?php
    include 'footer.php';

    ?>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>