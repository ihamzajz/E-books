<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>E-book</title>


	<!-- css plugins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--main css-->
	<link rel="stylesheet" href="files/assets/css/styles.css">

</head>
<body class="bg-white">


<?php
include 'navbar.php';
include 'hero-section.php';
?>






	<!-- section:1 (shop by category) starts -->
	<section class="bg-light"> 
		<div class="container sbc">
			<h1 class="sbc-h1">Books By Genre</h1>


			<!--Self Improvement starts-->
			<?php

				include 'dbconfig.php';

				$select = "SELECT * FROM books Where genre = 'Self Improvement'";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>



			<h2 class="sbc-h2">Self Improvement</h2> 
			<div class="row">
				<div class="col-sm-12">
					<div id="sbc" class="owl-carousel  owl-theme">

						<?php 
						if($data){
						while ($row=mysqli_fetch_array($select_q)) {
						?>	

						<div class="item text-center">
							<a href="user-login.php">
								<div class="card">
									<img src="images/<?php echo $row['image']?>" style="width: 180px; height: 220px;padding: 0px;" class="img-fluid mx-auto">
									<div class="card-body py-2 px-2">
										<p class="card-text "><?php echo $row['name']?></p>
										<!--<p class="card-text bg-transparent"><?php echo $row['author']?></p>-->
										<!--<p class="card-text bg-transparent" style="color:red; font-size:15px;"><span style="color:black">Price: </span><?php echo $row['price']?></p> --->
									</div>
								</div>
							</a>
						</div>

						<?php
						}
						}
						?>	
					</div>
				</div>
			</div> 
           <!--Self Improvementstarts-->







			<!--Romance starts-->
			<?php

				include 'dbconfig.php';

				$select = "SELECT * FROM books Where genre = 'Romance'";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>



			<h2 class="sbc-h2">Romance</h2> <!--Romance starts-->
			<div class="row">
				<div class="col-sm-12">
					<div id="sbc" class="owl-carousel  owl-theme">

						<?php 
						if($data){
						while ($row=mysqli_fetch_array($select_q)) {
						?>	

						<div class="item text-center ">
							<a href="user-login.php">
								<div class="card bg-light" style="border:0px">
									<img src="images/<?php echo $row['image']?>" style="width: 180px; height: 220px;" class="img-fluid mx-auto">
									<div class="card-body py-2 px-2">
										<p class="card-text bg-transparent"><?php echo $row['name']?></p>
										<!--<p class="card-text bg-transparent"><?php echo $row['author']?></p>-->
									<!--						<p class="card-text bg-transparent" style="color:red; font-size:15px"><span style="color:black">Price: </span><?php echo $row['price']?></p>-->
									</div>
								</div>
							</a>
						</div>

						<?php
						}
						}
						?>	
					</div>
				</div>
			</div> 
           <!--Romance ends-->







			<!--Fiction starts-->
			<?php

				include 'dbconfig.php';

				$select = "SELECT * FROM books Where genre = 'Fiction'";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>



			<h2 class="sbc-h2">Fiction</h2> 
			<div class="row">
				<div class="col-sm-12">
					<div id="sbc" class="owl-carousel  owl-theme">

						<?php 
						if($data){
						while ($row=mysqli_fetch_array($select_q)) {
						?>	

						<div class="item text-center ">
							<a href="user-login.php">
								<div class="card bg-light" style="border:0px">
									<img src="images/<?php echo $row['image']?>" style="width: 180px; height: 220px;" class="img-fluid mx-auto">
									<div class="card-body py-2 px-2">
										<p class="card-text bg-transparent"><?php echo $row['name']?></p>
										<!--<p class="card-text bg-transparent"><?php echo $row['author']?></p>-->
										<!--<p class="card-text bg-transparent" style="color:red; font-size:15px"><span style="color:black">Price: </span><?php echo $row['price']?></p>-->
									</div>
								</div>
							</a>
						</div>

						<?php
						}
						}
						?>	
					</div>
				</div>
			</div> 
           <!--Fiction starts-->



           <!--Thriller starts-->
			<?php

				include 'dbconfig.php';

				$select = "SELECT * FROM books Where genre = 'Thriller'";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>



			<h2 class="sbc-h2">Thriller</h2> 
			<div class="row">
				<div class="col-sm-12">
					<div id="sbc" class="owl-carousel  owl-theme">

						<?php 
						if($data){
						while ($row=mysqli_fetch_array($select_q)) {
						?>	

						<div class="item text-center ">
							<a href="user-login.php">
								<div class="card bg-light" style="border:0px">
									<img src="images/<?php echo $row['image']?>" style="width: 180px; height: 220px;" class="img-fluid mx-auto">
									<div class="card-body py-2 px-2">
										<p class="card-text bg-transparent"><?php echo $row['name']?></p>
										<!--<p class="card-text bg-transparent"><?php echo $row['author']?></p>-->
										<!--<p class="card-text bg-transparent" style="color:red; font-size:15px"><span style="color:black">Price: </span><?php echo $row['price']?></p>-->
									</div>
								</div>
							</a>
						</div>

						<?php
						}
						}
						?>	
					</div>
				</div>
			</div> 
           <!--Thriller ends-->




           <!--Anime/Manga starts-->
			<?php

				include 'dbconfig.php';

				$select = "SELECT * FROM books Where genre = 'Anime/Manga'";
				$select_q = mysqli_query($conn,$select);
				$data = mysqli_num_rows($select_q);
				?>



			<h2 class="sbc-h2">Anime</h2> 
			<div class="row pb-5">
				<div class="col-sm-12">
					<div id="sbc" class="owl-carousel  owl-theme">

						<?php 
						if($data){
						while ($row=mysqli_fetch_array($select_q)) {
						?>	

						<div class="item text-center ">
							<a href="user-login.php">
								<div class="card bg-light" style="border:0px">
									<img src="images/<?php echo $row['image']?>" style="width: 180px; height: 220px;" class="img-fluid mx-auto">
									<div class="card-body py-2 px-2">
										<p class="card-text bg-transparent"><?php echo $row['name']?></p>
										<!--<p class="card-text bg-transparent"><?php echo $row['author']?></p>-->
										<!--<p class="card-text bg-transparent" style="color:red; font-size:15px"><span style="color:black">Price: </span><?php echo $row['price']?></p>-->
									</div>
								</div>
							</a>
						</div>

						<?php
						}
						}
						?>	
					</div>
				</div>
			</div> 
           <!--Anime/Manga starts-->
		</div>
	</section>
	<!-- section:1 (shop by category) ends -->


		<!-- section:3 (custom handicraft) starts -->
	<section class="section-3 pt-5">
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-7">
					<p class="section3-p pt-5 m-0" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">Yearly Membership</p>
					<h1 class="section3-p" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500"><span class="section3-h1"></span> </h1>
					<p class="section3-p2" data-aos="zoom-in" data-aos-delay="150" data-aos-duration="500">Get 50% off on all books</p>
				</div>
			</div>
		</div>
	</section>
	<!-- section:3 (custom handicraft) ends -->




	<!-- section:2 (why we are better than others) starts -->
	<section class="bg-light pb-3">
		<div class="container mt-3 pt-5">
			<h2 class="text-center wwrb-h2 mt-md-3">Other activities for<span id="wwrb-span"> Kids</span></h2>
			<div class="row pt-5 text-center">

				<div class="col-md-4 pt-2 pt-md-0" data-aos="fade-left">

					<div class="card sec2-cards" >
						<div class="card-body">
						<h3 class="card-title text-center s2-h">Writing Competetion</h3>
						<p class="card-text s2-p pt-2">Winner gets free membership for one year.</p>
							<p class="s2-vm text-center pt-2 pb-1">View more <i class="fas fa-chevron-circle-right"></i></p>
						</div>
					</div>
				</div>


				<div class="col-md-4 pt-2 pt-md-0"  data-aos="zoom-in">
					<div class="card sec2-cards">
						<div class="card-body">
						<h3 class="card-title text-center s2-h">Journaling Competition.</h3>
						<p class="card-text s2-p pt-2 bg-transparent">Winner gets 50,000
						</p>
							<p class="s2-vm text-center pt-2 pb-1">View more <i class="fas fa-chevron-circle-right"></i></p>
						</div>
					</div>
				</div>


				<div class="col-md-4 pt-2 pt-md-0"  data-aos="zoom-in">
						<div class="card sec2-cards">
							<div class="card-body">
							<h3 class="card-title text-center s2-h">Speech Competition.</h3>
							<p class="card-text s2-p pt-2 bg-transparent">Winner gets free membership and 50,000
							</p>
								<p class="s2-vm text-center pt-2 pb-1">View more <i class="fas fa-chevron-circle-right"></i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section:2 (why we are better than others) ends -->






	<?php
		include 'footer.php';
	?>



	<!-- js plugins -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- main js -->
	<script src="files/assets/js/main.js"></script>


	<!--animate on scroll library initilization-->
	<script>
		AOS.init({
			offset: 120,
			duration: 700,
		});
	</script>

</body>
</html>