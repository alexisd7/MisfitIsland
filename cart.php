<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

      <div class="nav">
          <ul>
              <li><a href="home.php">Logo</a></li>
              <li><a href="home.php">Home</a></li>
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
              
              <li class="active" style="float:right"><a href="cart.php">Shopping Cart</a></li>
          </ul>
      </div>
        
        <h1>Your Shopping Cart</h1>
        
        <div class="cartlist">
            <cartlist-item><img class="cartimg" src="img/lolsurprise.jpeg"/>L.O.L. Surprise! Glam Glitter Doll</cartlist-item><br><hr><br>
            <cartlist-item><img class="cartimg" src="img/litebrite.jpeg"/>Basic Fun Lite Brite Magic Screen Retro Style Toy</cartlist-item><br><hr><br>
            <cartlist-item><img class="cartimg" src="img/soundofmusic.jpeg"/>The Sound Of Music (50th Anniversary Edition) (Widescreen)</cartlist-item><br><hr><br>
            <cartlist-item><img class="cartimg" src="img/elf.jpeg"/>Elf (Blu-Ray)</cartlist-item><br><hr><br>
            <cartlist-item><img class="cartimg" src="img/reindeer.jpeg"/>Home Accents Holiday 52 in. 120-Light LED White Wire Reindeer</cartlist-item><br><hr><br>
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
