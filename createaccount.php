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
              <li><a>Logo</a></li>
              <li><a href="home.php">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="events.php">Events</a></li>
              <li style="float:right"><a href="login.php">Log In</a></li>
              <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
          </ul>
      </div>

        Create Account
        <div class="hero">
            <h1 class="center">Hero Image</h1>
        </div>
        
        <?php
            //open server connection
            session_start();
            include("dbconnect.php");

            $errorCount = 0;

            if (isset($_POST["create"]))
            {
                preg_replace("/[^0-9]/", "", $_POST["phone"]);

                //Form validation
                if(isset($_POST["create"]))
                {
                    if(empty($_POST["username"]))
                    {
                        echo "Username is required.<br>";
                        $errorCount++;
                    }

                    if(empty($_POST["password"]))
                    {
                        echo "Password is required.<br>";
                        $errorCount++;
                    }

                    if(empty($_POST["phone"]))
                    {
                        echo "Phone number is required.<br>";
                        $errorCount++;
                    }
                    else
                    {
                        $_POST["phone"] = preg_replace("/[^0-9]/", "", $_POST["phone"]);
                        if(!preg_match("/[0-9]{10}/", $_POST["phone"]))
                        {
                            echo "Phone number must be 10 digits from 0-9.<br>";
                            $errorCount++;
                        }
                    }

                    if(empty($_POST["email"]))
                    {
                        echo "Email is required.<br>";
                        $errorCount++;
                    }
                    else if(!preg_match("/[@]/", $_POST["email"]) || !preg_match("/[.]/", $_POST["email"]))
                    {
                        echo "Invalid email format.<br>";
                        $errorCount++;
                    }

                    if(empty($_POST["street"]))
                    {
                        echo "Street address is required.<br>";
                        $errorCount++;
                    }
                    else
                    {
                        $_POST["street"] = $_POST["street"] . "~";
                        if(!preg_match("/(^)[0-9]/", $_POST["street"]) || !preg_match("/[A-Za-z]~/", $_POST["street"]))
                        {
                            echo "Invalid street address format.<br>";
                            $errorCount++;
                        }
                    }

                    if(empty($_POST["city"]))
                    {
                        echo "City is required.<br>";
                        $errorCount++;
                    }

                    if(empty($_POST["zip"]))
                    {
                        echo "Zip code is required.<br>";
                        $errorCount++;
                    }
                    else if(!preg_match("/[0-9]{5}/", $_POST["zip"]))
                    {
                        echo "Zip code must be five digits from 0-9.<br>";
                        $errorCount++;
                    }

                    if(empty($_POST["state"]))
                    {
                        echo "State is required.<br>";
                        $errorCount++;
                    }
                    else if(!preg_match("/[A-Z]{2}/", $_POST["state"]))
                    {
                        echo "State must be two capital letters.<br>";
                        $errorCount++;
                    }

                    $addusername = $_POST["username"];
                    $addpassword = sha1($_POST["password"]);
                    $addphone = $_POST["phone"];
                    $addemail = $_POST["email"];
                    $addstreet = $_POST["street"];
                    $addcity = $_POST["city"];
                    $addzip = $_POST["zip"];
                    $addstate = $_POST["state"];

                    if($errorCount == 0)
                    {
                        $sql = "INSERT INTO users (username, password, phone, email, street, city, zip, state) VALUES ('$addusername', '$addpassword', '$addphone', '$addemail', '$addstreet', '$addcity', '$addzip', '$addstate')";
                        if (mysqli_query($connection, $sql)) {
                            echo "You have successfully created an account. You will be redirected to the home page.";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }
                        header("refresh:5; url=home.php");
                    }
                }
            }
        ?>
        
                    <form action="" method="POST">
                <fieldset>
                    <legend class="legend"><h2>Create Your Account</h2></legend>
                    <input type="text" name="username" placeholder="Username"><br><br>
                    <input type="text" name="password" placeholder="Password"><br><br>
                    <input type="text" name="phone" placeholder="Phone Number"><br><br>
                    <input type="email" name="email" placeholder="Email"><br><br>
                    <input type="text" name="street" placeholder="Street Address"><br><br>
                    <input type="text" name="city" placeholder="City"><br><br>
                    <input type="text" name="zip" placeholder="Zipcode"><br><br>
                    <input type="text" name="state" placeholder="State"><br><br>
                    <input type="submit" name="create" value="Create Account"><br>
                </fieldset><br>
                <p>Already have an account? <a href="login.php">Log in!</a></p>
            </form>

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
