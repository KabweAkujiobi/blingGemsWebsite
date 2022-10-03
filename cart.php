<?php

session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");


if(isset($_GET["action"])){


    if($_GET["action"] == "delete"){

        foreach($_SESSION["cart"] as $keys => $values){
            
            if($values["item_id"] == $_GET["id"]){
                unset($_SESSION["cart"] [$keys]);
                echo '<script>alert("Product Removed!")</script>';
               echo '<script>window.location="cart.php"</script>';

            }

        }

    }

}


?>


<!DOCTYPE html>
<html>
    <head>
        <!--the meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Kabwe Oluchi Akujiobi">
        <title>CART | Bling Gems</title>
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
                        <li><a href ="home.php">HOME</a></li>
                        <li><a href = "services.php">SERVICES</a></li>
                        <li><a href = "about.php">ABOUT</a></li>
                        <li><a href = "contact.php">CONTACT</a></li>
                    </ul>
                </nav>
                <div id = "icons">
                    <img src="images/icons/cart.png"><a href="#">CART

                    <?php
                    if(isset($_SESSION["cart"])){
                        $count = count($_SESSION["cart"]);
                        echo"<span>($count)</span>";

                    }
                    else{
                        echo"<span>0</span>";
                    }
                    ?>

                    </a></img>
   
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
                    <li><a href ="product/ring.php">RINGS</a></li>
                </ul>
            </div>
        </section>

        <h3>Order Details</h3>

        <div class="table-responsive">
        <table class=" table table-bordered">
        <tr>
        <th width="40%">Product Name</th>
        <th width="20%">Product Price</th>
        <th width="25%">Product Action</th>
        </tr>
        <?php

        if(!empty($_SESSION["cart"])){
            $total =0;
            foreach($_SESSION["cart"] as $keys  => $values){
                ?>
                <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_price"]; ?></td>
                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php  

                $total = $total + ($values["item_price"]);
              

            }

            ?>

            <tr>
            <td colspan = "2" text-align="right">Total</td>
            <td text-align="right">R <?php echo number_format($total, 2);?> </td>
            </tr>
            <?php

        }
        ?>

            
            
        </table>

        
        </div>
        <section id="c">
        <div class="check">
        <a href="checkout.php"><button type="submit" name="checkout"> Checkout</button></a>
        </div>

        </section>

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
       
</body>
</html>
