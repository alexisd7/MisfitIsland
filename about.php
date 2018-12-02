<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>

      <div class="nav">
          <ul>
              <li><a href="home.php">Logo</a></li>
              <li><a href="home.php">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li><a class="active" href="about.php">About Us</a></li>
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
        <!-- Start of Hero section and wall of text -->
        <div id="hero-container">
            <div class="hero-size-wrapper">
                <div class="hero-img">
                    <div class="hero-txt">
                        <h1>Misfit Island</h1>
                        <p>hero p text goes here.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="about-container">
            <h2>H2 Text Specific to About.php about-container id</h2>
            <p>p text specific to about.php about-container id</p>
            <div class="about-threenested">
                <div class="about-inner">
                    <img src="images/icons8-us-dollar-64.png" alt="money sign"/>
                    <h3>H3 text for about-inner</h3>
                    <p>p text for about-inner</p>
                </div>
                <div class="about-inner">
                    <img src="images/icons8-recycle-64.png" alt="recycle"/>
                    <h3>H3 text for about-inner</h3>
                    <p>p text for about-inner</p>
                </div>
                <div class="about-inner">
                    <img src="images/icons8-price-tag-64.png" alt="sell"/>
                    <h3>H3 text for about-inner</h3>
                    <p>p text for about-inner</p>
                </div>
            </div>
        </div>
        <!-- End of Hero Section and wall of text -->
        <div class="deals">
            <div class="deals-grid-container">
                <div class="deals-grid-item"></div>
                <div class="deals-grid-item"></div>
                <div class="deals-grid-item"></div>
                <div class="deals-grid-item"></div>
                <div class="deals-grid-item"></div>
                <div class="deals-grid-item"></div>
            </div>
        </div>
        <div class="app">
            <p class="center">We have an app!</p>
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

    </body>
</html>
