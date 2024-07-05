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
    <link rel="stylesheet" href="userproduct.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">

    <script src="main.js"></script>
<style>
    .heading{
        left:-13vw;
    }
</style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="logo.jpg" class="logo">
            <ul>
                <li><a href="userproduct.php">SHOP</a></li>
                <li><a href="login.php">Log out</a></li>
            </ul>
        </div>

        <div class="heading">
            <h1>MANAGE PRODUCTS</h1>
            
        </div>
        
        <div class='container'>
            <div class="add">
            <a href="add.php"><button class="b3" name="Submit">ADD PRODUCT</button></a>

</div>
        <div class='products'>
        
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "     
                        <div class='product'>
                            <div class='image' name='fileImage' id='fileImage'>
                                <img src='" . $row["image"] . "'>
                            </div>

                            <div class='namePrice'>
                            <div> <h1>" . $row["name"] . "</h1></div>
                            <div> <h3>" . $row["price"] . "</h3></div>
                            <div> <p>" . $row["description"] . "</p></div>
                            </div>

                            <div class='bay'>
                                    <a href='edit.php?id=" . $row['itemID'] . "'><button class='b1' name='Submit'>Update</button></a>
                                    <a href='deletetest.php?id=" . $row['itemID'] . "'><button class='b2' name='Submit'>Delete</button></a>
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
    
    

</body>

</html>
