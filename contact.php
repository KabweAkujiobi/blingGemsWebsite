<?php


session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");


if(isset($_POST["send"])){

   

    $query = "INSERT INTO  contact values( '',' $_POST[username]','$_POST[emailaddress]','$_POST[country]','$_POST[message]')";
    mysqli_query($connect, $query);

   echo'<script>alert("Message sent!")</script>';
   echo '<script>window.location="contact.php"</script>';

}

?>


<!DOCTYPE html>
<html>
    <head>
        <!--the meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Kabwe Oluchi Akujiobi">
        <title>Contact | Bling Gems</title>
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
                        <li class = "current"><a href = "#">CONTACT</a></li>
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

      <section id ="contact">
      <form name="contactform" action=" " method="post">

                <h2>Contact Us</h2>
                <label>Name</label><br/>
                <input type="text" name="username" placeholder="Your name..." required><br><br/>
                <label>Email</label><br/>
                <input type="email" name="emailaddress" placeholder="Your Email..." required><br><br>
                <label for="country"> Country</label><br/>
	            <input id = "country" type="text" list ="countries" name="country" placeholder="Your Country..." required>
                <datalist id="countries">
               <option value ="Algeria">
               <option value="Angola">
               <option value="Benin">
               <option value="Botswana">
               <option value="Burkina Faso">
               <option value="Burundi">
               <option value="Cabo Verde">
               <option value="Cameroon">
               <option value="Chad">
               <option value="Comoros">
               <option value="Congo">
               <option value="Djibouti">
               <option value="Egypt">
               <option value="Equatorial Guinea">
               <option value="Eritrea">
               <option value="Eswatini">
               <option value="Ethiopia">
               <option value="Gabon">
               <option value="Gambia">
               <option value="Ghana">
               <option value="Guinea">
               <option value="Guinea-Bissau">
               <option value="Kenya">
               <option value="Lesotho">
               <option value="Liberia">
               <option value="Libya">
               <option value="Madagascar">
               <option value="Malawi">
               <option value="Mali">
               <option value="Mauritania">
               <option value="Mauritius">
               <option value="Morocco">
               <option value="Mozambique">
               <option value="Namibia">
               <option value="Niger">
               <option value="Nigeria">
               <option value="Rwanda">
               <option value="Sao Tome and Principe">
               <option value="Senegal">
               <option value="Seychelles">
               <option value="Sierra Leone">
               <option value="Somalia">
               <option value="South Africa">
               <option value="South Sudan">
               <option value="Sudan">
               <option value="Tanzania">
               <option value="Togo">
               <option value="Tunisia">
               <option value="Uganda">
               <option value="Zambia">
               <option value="Zimbabwe">
            </datalist><br><br/>
            <label for="message"> Message</label> 
            <div id="mess">
	       <input class="m" type="text-area"  name="message" placeholder="Your message" required ><br>
            <br/>
		   <button type="submit" name="send" >Send</button>

        </form>
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