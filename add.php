<?php session_start();
    if ( $_SESSION["type"]==0) {
        header('Location: login.php');
    }

    if(isset($_POST["Submit"])){
        $title       = $_POST["pname"];
        $price       = $_POST["price"];
        $description = $_POST["description"];

        $image       = "uploads/".basename($_FILES["fileImage"]["name"]);
        move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);
    
    $con=mysqli_connect("localhost","root","","useraccountshaba");
    if(!$con){
         die("Sorry, we are facing a technical issue");
    }
    $sql="INSERT INTO `product` (`itemID`, `name`, `price`, `description`, `image`) VALUES (NULL, '". $title ."', '".$price."', '".$description."', '".$image."');";

    if(mysqli_query($con,$sql)){
        header ("Location: userproduct.php");
    }
    else{
        echo "something went wrong";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>New Product Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    form {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="file"] {
      margin-bottom: 16px;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>New Product Form</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="pname" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="image">Image:</label>
    <input type="file" id="image" name="fileImage" accept="image/*" >

    <button type="submit" name="Submit">Submit</button>
  </form>
</body>
</html>
