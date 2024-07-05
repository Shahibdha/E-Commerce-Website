<?php
session_start();

if(!isset($_SESSION['emailid']))
{
	header('Location:login.php');
}

include_once "./navBar.php";?>

  <!--- Cart --->
  <div class="cart">
    <div class="cart-header">
      <h2>Shopping Cart</h2>
    </div>
    <?php 

include_once "./conection.php";

$sql="SELECT * FROM `cart` WHERE `user`='".$_SESSION['emailid']."'";

$result=mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {
?>
    <div class="cart-products">
      <div class="cart-content">
        <div class="single-item">
          <img src="<?php echo $row["image"]?>" alt="Cart1">
          <div class="single-item-details">
            <h3><?php echo $row["name"]?></h3>
            <p>Price: Rs.<?php echo $row["price"]?></p>
            <button class="deleteBtn" onclick="window.location.href = 'deleteCart.php?id=<?php echo $row["itemID"]?>'">
                <div>Delete</div>
            </button>
          </div>
        </div>
      </div>
      <?php
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>
  
  <link rel="stylesheet" href="Cart1.css">
  <link rel="stylesheet" href="header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
  .cart{
    position: relative;
    top:13vh;
  }
  .nav-container{
    background: linear-gradient(35deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
  }
  .deleteBtn {
    padding: 10px 20px;
  border-radius: 7px;
  bottom: 2%;
  position: relative;
  border: none;
  width: 100px;
  background-color: rgba(0, 0, 0, .5);
  color: whitesmoke;
  font-size: 14px;
  text-transform: capitalize;
  cursor: pointer;
  transition: .5s;
    }
    .deleteBtn:hover {
        background-color: #ff4545;
    }
</style>
</head>

<body>
<?php
  $sql="SELECT sum(price) AS 'tot' FROM `cart` WHERE `user`='".$_SESSION['emailid']."'";
  $results=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($results);
  $tot=$row['tot'];
  ?>
    </div>
  </div>
  <div class="subtotal">
    <p class="subtotal-text">Subtotal:</p>

    <data class="subtotal-value" value="1465.00">Rs.<?php echo $tot?></data>
  </div>