<?php

session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");


if(isset ($_POST["add"])){

    if(isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"], "item_id");
        if(!in_array($_GET["latestproducts_id"], $item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'item_id'            => $_GET["latestproducts_id"],
                'item_name'          => $_POST["hidden_name"],
                'item_price'         => $_POST["hidden_price"]
            );

            $_SESSION["cart"][$count] = $item_array;

           

        }
        else{
            echo '<script>alert("Product Already added")</script>';
            echo '<script>window.location="home.php"</script>';

        }
   
    }
    else{

        $item_array = array(
            'item_id'            => $_GET["latestproducts_id"],
            'item_name'          => $_POST["hidden_name"],
            'item_price'         => $_POST["hidden_price"]
        );

        $_SESSION["cart"] [0] = $item_array;

    }
}


if(isset($_POST["join"])){

   

     $query = "INSERT INTO  newsletter values( '',' $_POST[email]')";
     mysqli_query($connect, $query);

    echo'<script>alert("Your Email has been successfully added.")</script>';
    echo '<script>window.location="home.php"</script>';

}


?>


<!DOCTYPE html>
<html>
    <head>
        <!--the meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Kabwe Oluchi Akujiobi">
        <title>Home | Bling Gems</title>
        <!--linking the external css-->
        <link rel ="stylesheet" href ="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class = "container">
                <div id = "branding">
                    <img src="images/logo/blingGemsBlack.png"/>
                </div>
                <nav>
                    <ul>
                        <li class = "current"><a href ="#">HOME</a></li>
                        <li><a href = "services.php">SERVICES</a></li>
                        <li><a href = "about.php">ABOUT</a></li>
                        <li><a href = "contact.php">CONTACT</a></li>
                    </ul>
                </nav>
                <div id = "icons">
                    <img src="images/icons/cart.png"><a href ="cart.php">CART

                    <?php
                    if(isset($_SESSION["cart"])){
                        $count = count($_SESSION["cart"]);
                        echo"<span>($count)</span>";

                    }
                    else{
                        echo"<span>0</span>";
                    }
                    ?>

                    </a> </img>
                </div>
            </div>
        </header>

        <!--the proucts link-->
        <section id = "products">
            <div class = "categories">
                <ul>
                    <li><a href ="products/bracelets.php">BRACELETS</a></li>
                    <li><a href ="products/earrings.php">EARRINGS</a></li>
                    <li><a href ="products/gemstones.php">GEM STONES</a></li>
                    <li><a href ="products/necklaces.php">NECKLACES</a></li>
                    <li><a href ="products/ring.php">RINGS</a></li>
                </ul>
            </div>
        </section>

        <!--the section to display images in a side show-->
        
            <div id = "imageSlider">
                <figure>
                    <img src="images/slider/slider4.jpg">
                    <img src="images/slider/slider7.png">
                    <img src="images/slider/slider4.jpg">
                    <img src="images/slider/slider6.jpg">
                    <img src="images/slider/slider4.jpg">
                </figure>
            </div>


        <!--the section to display latest products-->
     
        <section id="latest">
            <h3>Latest Products</h3>
            <?php

            $query = "SELECT * FROM latestproducts";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-4">

                    <form action="home.php?action=add&latestproducts_id=<?php echo $row["latestproducts_id"]; ?>" method ="post">
                    <img src="<?php echo $row["latestproducts_image"];  ?>"/>
                    <h5> <?php echo $row["latestproducts_name"] ?></h5>
                    <p>R <?php echo $row["latestproducts_price"] ?></p>
                    <input type="hidden" name="hidden_name" value="<?php echo $row["latestproducts_name"] ?>"/>
                    <input type="hidden" name="hidden_price" value="<?php echo $row["latestproducts_price"] ?>"/>
                    <button type= "submit" name="add" class="btn btn-outline-success">ADD TO CART</button>
                   
                    </form>
                    </div>

                    <?php

                }

            }
            ?>
        </section>
        
        <!--The section for a user to subsribe to the newsletter-->
        <section id ="newsletter">
            <div class="news">
            <h1>Join our newsletter</h1>
                    <p> Join our newsletter to keep posted with our products and services.</p>
					<form name="news " action=" " method="post">
						<input type="text" placeholder="Your email address..." name="email">
						<button type="submit" name="join"> Join</button>
                    </form>
            </div>
        </section>

        <!--the footer -->
        <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="home.php"><img src="images/logo/blingGemsBlack.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
Copyright &copy; All rights reserved | Bling Gems
</p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="home.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.php">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.php">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

       <!-- <footer>
        <div class = "container">
                <div class="social-info d-flex justify-content-between">
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
                <div id = "locate">
                    <h3>Locate Us</h3>
                    <p>Bling Gems<br>543 Avenue Street<br>Sandton<br>Johannesburg</p>
                </div>
            <p>Copyright &copy; 2020 Bling Gems. All rights reserved. </p>
        </div>
        </footer>-->

    </body>
</html>