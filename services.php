<?php


session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");

?>

<!DOCTYPE html>
<html>
    <head>
        <!--the meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Kabwe Oluchi Akujiobi">
        <title>Services | Bling Gems</title>
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
                        <li class = "current"><a href = "#">SERVICES</a></li>
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

        <section id="clean">
            <div class="c"><img src="images/logo/clean.jpg" /> </div>
            <div class="info">
            <h3>Don't be afraid to sparkle brighter</h3>
            <p>Get your jewelry clean so that you can be ready to accessorize and shine bright.<br/>Contact us for a CLEANING.</p>
            <a href="contact.php"><button>Contact</button></a>
            </div>
        </section>

        <section id="repair">
        <div class="r"><img src="images/logo/repair.jpg" /> </div>
            <div class="info">
            <h3>Sometimes it's okay to repair rocks</h3>
            <p>Repair your beautiful jewelry, so that you can rock it again.<br/>Contact us for a REPAIR.</p>
            <a href="contact.php"><button>Contact</button></a>
            </div>
        </section>

        <section id="design">
        <div class="d"><img src="images/logo/design.jpg" /> </div>
            <div class="info">
            <h3>Be unique to self with a signature</h3>
            <p>Customize your own personal jewelry, why rock someone else's design<br/> when you can rock your own.<br/>Contact us for a PERSONAL DESIGN.</p>
            <a href="contact.php"><button>Contact</button></a>
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