
<?php
include 'books-insert.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book create</title>
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   

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
	<div class="container">


		<div class="row justify-content-center pt-5">

			<div class="col-lg-4 col-md-6"> 

				<h3 class="text-center pb-3" style=" font-size: 32px;">Add book</h3>

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
					  <input type="file" class="form-control" name="bpdf" required>
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
              			<button type="submit" class="btn btn-dark w-50" name="bcreatebtn">Create</button>
      			    </div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>