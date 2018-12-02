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
              <li><a href="about.php">About Us</a></li>
              <li><a class="active" href="events.php">Events</a></li>
              
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

        <div class="container">
          <img style="float:center"src="img/event.png"></img>

        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>


        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>

        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>

        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>


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
