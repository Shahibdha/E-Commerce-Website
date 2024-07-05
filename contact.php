<?php
session_start();

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact</title>
        <link rel="stylesheet"  href="cont.css">
        <link rel="stylesheet"  href="footer.css">
        <link rel="stylesheet"  href="header.css">
    </head>
    <body>
        <div class="contact">
        <?php
            include_once "./navBar.php";
        ?>
            <div class="text">
                 <h2>Contact Us</h2>
                 
            </div>
            <div class="container">
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="fullname" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="message" required="required"></textarea>
                            <span>Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Submit"><span></span>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col">
                    <img src="logo.jpg">
                    <!-- <h1 class="cont"> eles emes</h1> -->
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
                        <li><a href="web.html">Home</a></li>
                        <li><a href="product.html">Shop</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
            </div>
            </div>
            <hr>
            <p class="copyright">copyrightcopyright &copy;2023 - All Rights Reserved</p>
        </footer>
    </body>
    </html>