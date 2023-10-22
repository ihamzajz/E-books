            



<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book details</title>

    <!-- css plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--main css-->
    <link rel="stylesheet" href="files/assets/css/styles.css">

</head>
<body class="bg-light">
    <?php
        include 'user-navbar.php';
     ?>

<div class="container" style="padding-bottom: 70px;padding-top:110px;">
    <div class="row pt-5 justify-content-center">
        <div class="col-md-6 order-last">
            <?php

include 'dbconfig.php';
$id=$_GET['id'];

$select="SELECT * FROM books WHERE id = '$id'";
$select_q=mysqli_query($conn,$select);



while ($row=mysqli_fetch_array($select_q)) {


    $name=$row['name'];
    $author=$row['author'];
    $description=$row['description'];
    $price=$row['price'];
    $status=$row['status'];
    $image=$row['image'];
    $genre=$row['genre'];
    $rating=$row['rating'];
    

    echo "<div><p><span style='font-size:20px;color:#f26827'>Name:</span>  <span style='font-size:25px;font-weight:bold'>$name </span></p></div>";

    echo "<div><p><span style='font-size:20px;color:#f26827'>Author: </span>  <span style='font-size:22px;'>$author </span></p></div>";


    echo "<div><p><span style='font-size:20px;color:#f26827'>Description: </span>  <span style='font-size:16px;'>$description </span></p></div>";

     echo "<div><p><span style='font-size:20px;color:#f26827'>Price: </span>  <span style='font-size:20px;'>$price </span></p></div>";


     echo "<div><p><span style='font-size:20px;color:#f26827'>Status: </span>  <span style='font-size:20px;'>$status </span></p></div>";

      echo "<div><p><span style='font-size:20px;color:#f26827'>Rating: </span>  <span style='font-size:20px;'>$rating </span></p></div>";



      echo "<div><p><span style='font-size:20px;color:#f26827'>Genre: </span>  <span style='font-size:20px;'>$genre </span></p></div>";
    

    ?>
    </div>
    <div class="col-md-4 order-first">
        <div class="text-center">
            <img src="images/<?php echo $row['image']?>" class="img-fluid w-75 h-75 pb-3" >

              <a href="pdf-download.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Download PDF</button></a>
            <a href="order.php"><button class="btn btn-Success">Order now</button></a>
        </div>


    </div>
    <?php

    
    }
?>

        </div>
    </div>
</div>


        <?php
    include 'user-footer.php';
    ?>

</body>
</html>