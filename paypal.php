<?php


session_start();

$connect = mysqli_connect("127.0.0.1:3325", "root", "", "bling_gems");

$paypal_url = 'https://www.sandbox.paypal.com/';
$pay = $_SESSION["pay"];

?>


<!DOCTYPE html>
<html>
    <head>
        <!--the meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Kabwe Oluchi Akujiobi">
        <title>Paypal | Bling Gems</title>
        <!--linking the external css-->
        <link rel ="stylesheet" href ="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action ="<?php echo $paypal_url;?>">
        </form>
      
    </body>
</html>