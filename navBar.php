<?php
  if (empty($_SESSION['emailid'])) {
    $logBtn="Login";
    $logLink="login.php";
  }
  else {
    $logBtn="LOGOUT";
    $logLink="logout.php";
}
?>
<div class="header">
            <img src="logo.jpg" class="logo">
            <ul>
                <li><a href="web.php">HOME</a></li>
                <li><a href="product.php">SHOP</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="Cart.php">CART</a></li>
                <li><a href="<?php echo $logLink?>"><?php echo $logBtn?></a></li>
            </ul>
        </div>

