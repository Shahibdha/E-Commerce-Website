<?php session_start();
if(isset($_POST["submit"]))
{
 $email=$_POST["email"];
 $password=$_POST["password"];
 
     $con=mysqli_connect("localhost","root","","photographylogindb");
        if(!$con){
          die("Sorry, we are facing a technical issue");
        }
 
     $sql = "SELECT * FROM `register` where `email`='$email' and `password`='$password' ";
 
     $results=mysqli_query($con,$sql);
     if(mysqli_num_rows($results) > 0)
     {
            $row=mysqli_fetch_assoc($results);
            $_SESSION["email"]=$userName;
            header('location: my web.php');
     }
     else{
      header('location:user.php');
     }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!--custom css file link-->
        <link rel="stylesheet" href="userc.css">
        <form  method="POST" action="">
            <!-- form fields here -->
        </form>
        
        
        </head>
        <body>

        <header>
            
            <a href="#" class="logo"><img src="logo.png" width="50"></a>

            <nav class="navbar" >
                <a href="my web.php">HOME</a>
                <a href="about.php">ABOUT</a>
                <a href="user.php">LOGIN</a>
                <a href="photo.php">PHOTOS</a>
                <a href="condition.php">TERMS & CONDITIONS</a>
                <a href="booking.php">BOOKING</a>
            </nav>


        </header>

<!-- HTML code for user login section -->
<section class="User" id="User">

    <div class="login-container">
        <br><br><br><br><br><br><br><br>
        <h1>Login</h1>
        <form action="user.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" >Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register now</a></p>
    </div>

 

</section>



</body>
</html>