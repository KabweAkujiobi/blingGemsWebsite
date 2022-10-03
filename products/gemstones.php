<?php

session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");


if(isset ($_POST["add"])){

    if(isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"], "item_id");
        if(!in_array($_GET["gem_id"], $item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'item_id'            => $_GET["gem_id"],
                'item_name'          => $_POST["hidden_name"],
                'item_price'         => $_POST["hidden_price"]
            );

            $_SESSION["cart"][$count] = $item_array;


        }
        else{
            echo '<script>alert("Product Already added")</script>';
            echo '<script>window.location="gemstones.php"</script>';

        }
   
    }
    else{

        $item_array = array(
            'item_id'            => $_GET["gem_id"],
            'item_name'          => $_POST["hidden_name"],
            'item_price'         => $_POST["hidden_price"]
        );

        $_SESSION["cart"] [0] = $item_array;

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
        <title>GEMSTONES | Bling Gems</title>
        <!--linking the external css-->
        <link rel ="stylesheet" href ="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class = "container">
                <div id = "branding">
                    <img src="../images/logo/blingGemsBlack.png"/>
                </div>
                <nav>
                    <ul>
                        <li><a href ="../home.php">HOME</a></li>
                        <li><a href = "../services.php">SERVICES</a></li>
                        <li><a href = "../about.php">ABOUT</a></li>
                        <li><a href = "../contact.php">CONTACT</a></li>
                    </ul>
                </nav>
                <div id = "icons">
                    <img src="../images/icons/cart.png"><a href="../cart.php">CART
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
                    <li><a href ="bracelets.php">BRACELETS</a></li>
                    <li><a href ="earrings.php">EARRINGS</a></li>
                    <li  class="current"><a href ="#">GEM STONES</a></li>
                    <li><a href ="necklaces.php">NECKLACES</a></li>
                    <li><a href ="ring.php">RINGS</a></li>
                </ul>
            </div>
        </section>

         <!--the section to display latest products-->
         <section id="latest">
         <h3>Gemstones</h3>
            <?php

            $query = "SELECT * FROM gemstones";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-4">
                        
                    <form method = "post" action="gemstones.php?action=add&gem_id=<?php echo $row["gem_id"]; ?>">
                    <img src="<?php echo $row["gem_image"];  ?>"/>
                    <h5> <?php echo $row["gem_name"] ?></h5>
                    <p>R <?php echo $row["gem_price"] ?></p>
                    <input type="hidden" name="hidden_name" value="<?php echo $row["gem_name"] ?>"/>
                    <input type="hidden" name="hidden_price" value="<?php echo $row["gem_price"] ?>"/>
                    <button type="submit" name="add">ADD TO CART</button>
                    </form>
                    </div>

                    <?php

                }

            }
            ?>
         </section>
    </body>
</html>