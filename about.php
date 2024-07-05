<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="about.css">
    <link rel="stylesheet"  href="header.css">
    <link rel="stylesheet"  href="footer.css">
</head>
<body>
    <div class="box">
    <div class="about">
    <?php
include_once "./navBar.php";?>

        <div class="main">
          
            <div class="about-text">
                <h1>About Us</h1>
                <p>In an industry where innovation must infuse with a clear focus on customer needs and technology, Macron has emerged an industry leader, bringing it all together, paving the way for a proudly Sri Lankan made product that meets the stringent quality standards of the global market place.
                    For the last couple of decades, Macron has been at the forefront of the paints and surface coatings industry in Sri Lanka. Proudly Sri Lankan, yet renowned for international quality products, Macron has carved a role for its commitment to customer needs, research and development and world class quality.</p></p>
                    <br>
                    <div class="new"></div>
                <button class="btn">
                    <a href="product.php">SHOP</a>
                </button>
            </div>
        </div>
    </div>
</div>
    <footer>
        <div class="row">
            <div class="col">
                <img src="logo.jpg">
                </div>
            <div class="col">
                <h3>office <div class="underline"></h3>
                <p>No.75, <br>IDH kolonnawa road,<br>Kolonnawa<br> Sri Lanka</p>
                <p class="email-id">shahibdhahilmy@gmail.com</p>
                <h4>+94 778327237</h5>
            </div>
            <div class="col">
                <h3>links <div class="underline"></div></h3>
                <ul>
                    <li><a href="web.php">Home</a></li>
                    <li><a href="product.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
        </div>
        <hr>
        <p class="copyright">copyrightcopyright &copy;2023 - All Rights Reserved</p>
    </footer>
</body>
</html>