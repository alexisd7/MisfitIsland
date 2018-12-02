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
              <li><a href="events.php">Events</a></li>
              <li class="active" style="float:right"><a href="login.php">Log In</a></li>
              <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
          </ul>
      </div>

        Login
        <?php
        
        session_start();
        include("dbconnect.php");
        
            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == 'true') {
                ?>
                    <div class="form-border">
                            <form action="logoutform.php" method="POST">
                                <fieldset>
                                    <legend class="legend"><h2>Are you sure you want to log out?</h2></legend>
                                    <input type="submit" name="submit" value="Yes, log out."><br>
                                </fieldset>
                            </form><br>
                        <p><a href="home.php">No, stay logged in.</a></p>
                        </div>


                <?php
            }
            else {
                ?>
                    <div class="form-border">
                            <form action="loginform.php" method="POST">
                                <fieldset>
                                    <legend class="legend"><h2>Log In</h2></legend>
                                    <input type="text" name="username" placeholder="Username"><br><br>
                                    <input type="password" name="password" placeholder="Password"><br><br>
                                    <input type="submit" name="submit" value="Submit"><br>
                                </fieldset><br>
                                <p>Don't have an account? <a href="createaccount.php">Create one!</a></p>
                            </form>
                        <br><br><br>
                        </div>
                <?php
            }
        ?>

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

</html>
