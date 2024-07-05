<?php session_start();
if(isset($_POST["submit"]))
{
	$userName=$_POST["emailid"];
	$password=$_POST["password"];
	
	    $con=mysqli_connect("localhost","root","","useraccountshaba");
        if(!$con){
          die("Sorry, we are facing a technical issue");
        }
	
	    $sql = "SELECT * FROM `register` where `email`='".$userName."' and `password`='".$password."' ";
	
    	$results=mysqli_query($con,$sql);
	    if(mysqli_num_rows($results) > 0)
	    {
            $row=mysqli_fetch_assoc($results);
	    	$_SESSION["emailid"]=$userName;
            if($row["type"]==1)
            {
                $_SESSION["type"] = $row["type"];
                header('location: userproduct.php');
            }else{ header('location:web.php');}
		    
	    }
	    else{
		    header('location:login.php');
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
    <link rel="stylesheet"  href="login.css">
    <link rel="stylesheet"  href="header.css">
    <link rel="stylesheet"  href="footer.css">
    <script src="main.js"></script>

</head>
<body>
    
    <div class="box">
    <?php
include_once "./navBar.php";?>
    <div class="wrapper">
        <div class="form-box login">
        <form method="POST" action="">
            <h2>login</h2>
                <div class="input-box">
                    <input type="email" id="emailid" name="emailid" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" required>
                    <label> Password </label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" id="chkboxid">
                    Remember me<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="password.php">Reset Password</a>
                </div>
                <button type="submit" id="submit" name="submit" class="btn" onclick="allToLog()">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                    <a href="register.php" class="login-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <br>
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