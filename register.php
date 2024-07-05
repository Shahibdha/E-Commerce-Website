<?php

session_start();

if(isset($_POST["Submit"])){
    $username   =$_POST["UserName"];
    $emailid    =$_POST["emailid"];
    $passid     =$_POST["passid"];
    $conpassid  =$_POST["conpassid"];
    $userType   = 0;

    $con = mysqli_connect("localhost", "root", "", "useraccountshaba");
	if(!$con)
	{
		die("Sorry ,We are facing a technical issue");
	}

    $sql="INSERT INTO `register`(`username`, `email`, `password`, `confirm`,`type`) VALUES ('".$username."','".$emailid."','".$passid."','".$conpassid."','".$userType."')";
    
    if (mysqli_query($con, $sql)) {
        header("Location: login.php");
        exit; // Make sure to exit after the redirect
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="register.css">
    <link rel="stylesheet"  href="footer.css">
    <link rel="stylesheet"  href="header.css">
    <script src="main.js"></script>

</head>
<body>
    <div class="box">
    <?php
include_once "./navBar.php";?>

    <div class="wrapper">
    <div class="form-box register">
        <h2>Registration</h2>
          <form action="register.php" method="post">
            <div class="input-box">
                <input type="text" id="text" name="UserName" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <input type="text" id="emailid" name="emailid" required>
                <label> Email </label>
            </div>
            <div class="input-box">
                <input type="password" id="passid" name="passid" required>
                <label> Password </label>
            </div>
            <div class="input-box">
                <input type="password" id="conpassid" name="conpassid" required>
                <label> Confirm Password </label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" id="chkboxid">
                I agree to the terms & conditions<label>
            </div>
            <button type="submit" id="Submit" name="Submit" class="btn" onclick="allToReg()">Register</button>
            <div class="login-link">
                <p>Already have an account?
                <a href="login.php" class="register-link">Login</a>
                </p>
            </div>
        </form>
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