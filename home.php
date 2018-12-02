<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

        <style>
        .mySlides {display:none;}
        </style>
    </head>
    <body>

          <div class="nav">
              <ul>
                  <li><a href="home.php">Logo</a></li>
                  <li><a class="active" href="home.php">Home</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="events.php">Events</a></li>
                  
                  <?php
                  session_start();
                include("dbconnect.php");
                  
                    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == 'true') {
                  ?>
                    <li style="float:right"><a href="login.php">Log Out</a></li>
                  <?php
                    }
                    else {
                  ?>
                    <li style="float:right"><a href="login.php">Log In</a></li>
                  <?php } ?>
                  
                  <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
              </ul>
          </div>

          <div class="banner" style="max-width:100%">
            <img class="mySlides" src="img/blockbuster.png" style="width:100%; height: 500px">
            <img class="mySlides" src="img/radioshack.jpg" style="width:100%;height: 500px">
            <img class="mySlides" src="img/toysrus1.jpg" style="width:100%;height: 500px">
            <img class="mySlides" src="img/sports.jpg" style="width:100%;height: 500px">
          </div>


        <div class="container">
          <h1 class="center">Deals</h1>

          <?php

            $dir = glob('images/{*.jpg,*.png}',GLOB_BRACE);

            foreach($dir as $key=> $value)
            {
              ?>
              <div class="photo">
                <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
              </div>
              <?php
            }
            ?>

            <a href="shop.php" class="button">View More</a><br><br>

      <!--      <div class="outer">
              </div>
              <div class="inner">
                <p><span class="rightb">
                  <span class="bold">BIG NEWS:</span><br><br>
                  SEE WHAT WE HAVE<br> RIGHT
                  AT THE PALM OF YOUR HANDS!<br><br></span>
                <u>Find out more</u></p>
            </div> -->


        </div>

        <div class="footer">
          <div class="row">
              <div class="column">
                <a href="url"><span class="flink">Contact Us</span></a>
                <br>
                <a href="url"><span class="flink">Home</span></a>
                <br>
                <a href="url"><span class="flink">Shop</span></a>
                <br>
                <a href="url"><span class="flink">Events</span></a>
                <br>
              </div>
              <div class="column">
                <p>Copyright © 2018 MisfitIsland<p>
                  <br>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
              </div>
              <div class="column">
                <p>Wanna keep up with our blog?</p><br>
                <a href="url"><span class="flink">MisfitIsland Blog</span></a>
              </div>
          </div>
        </div>

        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>



    </body>

</html>
