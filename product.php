<?php
session_start();
if ( $_SESSION["type"]==0) {
    
    header('Location: login.php');
}
$con = mysqli_connect("localhost", "root", "", "useraccountshaba");
if (!$con) {
    die("Sorry, we are facing a technical issue");
}

$sql = "SELECT * FROM `product`";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet"  href="userproduct.css">
    <link rel="stylesheet"  href="footer.css">
    <link rel="stylesheet"  href="header.css">
    <script src="main.js"></script>
    <style>
        footer{
    top: 120vh;
}
.cartMain{
    width: 100%;
    position: absolute;
    left: -20vw;
    top: 10vh;
    z-index: 222;
    position: fixed;
    display: none;
}
.cart{
    
    display: flex;
    background-color: white;
    justify-content: space-between;
    align-items: center;
    padding: 7px 10px;
    border-radius: 3px;
    width: 80px;
}

.btnCartOpen{
    position: absolute;
    position: fixed;
    height: 45px;
    width: 70px;
    top:15vh;
    left: 90vw;
    display: block;
    background: #000000;
    border-radius: 10px;
    color: white;
}

.btnCartClose{
    height: 40px;
    width: 80px;
    background: #000000;
    border-radius: 10px;
    color: white;
}
#root{
    width: 60%;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 20px
}
.sidebar{
    margin-top: 70px;
    width: 30%;
    border-radius: 5px;
    background-color: transparent;
    border: 2px solid rgba(255,255,255,.5);
    backdrop-filter: blur(20px);
    margin-left: 90%;
    padding: 15px;
    text-align: center;
    align-self: right;
    border: 1px solid black;
    border-radius: 3px;
}
.sidebar .but{
    padding: 5px ;
    height: 35px;
    width: 100px;
    border-radius: 13px;
    border: none;
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    font-size: 15px;
}
.head{
    background-color: black;
    border-radius: 3px;
    height: 40px;
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    display: flex;
    align-items: center;
}
.foot{
    display: flex;
    justify-content: space-between;
    margin: 20px 0px;
    padding: 10px 0px;
    border-top: 1px solid #333;
} 
 
    </style>
</head>
<body>
    <div class="container">
    <?php
        include_once "./navBar.php";?>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="heading">
            <h1>PRODUCTS</h1>
        </div>
        <div class='container'>
        <div class="products">
            <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "                
                        <div class='product'>
                            <div class='image' name='fileImage' id='fileImage'>
                                <img src='" . $row["image"] . "'>
                            </div>

                            <div class='namePrice'>
                            <div> <h1>". $row["name"]."</h1></div>
                            <div> <h3>" . $row["price"] . "</h3></div>
                            <div> <p>" . $row["description"] . "</p></div>
                            </div>

                            <div class='bay'>
                                <a href='addToCart.php?id=" . $row['itemID'] . "'><button class='b1' name='Submit'>Add to Cart</a></button>
                                <a href=''><button class='b2' name='Submit'>Buy Now</button></a>
                            </div>
                </div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
        </div>
        </div>
    </div> 
    </form>
   
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
                    <li><a href="web.html">Home</a></li>
                    <li><a href="product.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyrightcopyright &copy;2023 - All Rights Reserved</p>
    </footer>
</body>
</html>

