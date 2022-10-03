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
        <title>About | Bling Gems</title>
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
                        <li class = "current"><a href = "#">ABOUT</a></li>
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

        <!-- about section-->
        <section id="about">
            <div class="container">
            <img src="images/logo/jerry.jpg"/>
            <h3>About </h3>
            <p>Bling Gems came to be what it is because of Jerry Michaels. Who migrated from Madagascar to pursue a better life not only for himself alone but for his entire family. Jerry paved a way for his family in South Africa by selling off gemstones of the world to different buyers around the world. He has made a name for his brand. Jerry Michaels studied mineralogy and gemology which gave him a clear and well painted knowledge and skills needed to create such a well know business that he has today. He turned his passion of gemology into a profitable business. </p>
            <p>Bling Gems operates in a very efficient and effective way. It was never in that way as operations were slightly difficult at first but as the business progressed and grew it became easier for Jerry Michaels. He would order gemstones from his hometown of Madagascar and other countries in Africa, such as Namibia, Ethiopia, Mozambique, Tanzania, Nigeria, Kenya, Congo and South Africa. Only recently Bling Gems started ordering from other countries outside African. Jerry Michaels usually orders the rough gemstones from around the world instead of the cut and refined gemstones. Once the gemstones are delivered, they get cleaned, classified and cut according to their specifications. Bling Gems sales them either in their refined form or in made jewelry form to customers. </p>
            <div>
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
    </body>
</html>