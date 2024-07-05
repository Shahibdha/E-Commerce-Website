<?php
session_start();
if ($_SESSION["type"]==0){
    header('Location: login.php');
}

$con = mysqli_connect("localhost", "root", "", "useraccountshaba");
if (!$con) {
    die("Sorry, we are facing a technical issue");
}

if (isset($_GET["id"])) {
    if (isset($_POST["Submit"])) {
        $id = $_GET["id"];
        $title = $_POST["pname"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        if(!file_exists($_FILES["fileImage"]["tmp_name"])||!is_uploaded_file($_FILES["fileImage"]["tmp_name"])){
            $image=$_SESSION["image"];
        }
        else{
        $image = "uploads/" . basename($_FILES["fileImage"]["name"]);
        move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);}

        $sql = "UPDATE `product` SET `name`='$title', `price`='$price', `description`='$description', `image`='$image' WHERE `itemID`='$id'";

        if (mysqli_query($con, $sql)) {
            echo "File updated successfully";
        } else {
            echo "Something went wrong";
        }
        header('Location: userproduct.php');
        exit();
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM `product` WHERE `itemID` = '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product Form</title>
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
<h2>Edit Product Form</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="pname" value="<?php echo $row["name"]; ?>">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="<?php echo $row["price"]; ?>">

    <label for="description">Description:</label>
    <textarea id="description" name="description"><?php echo $row["description"]; ?></textarea>

    <label for="image">Image:</label>
    <input type="file" id="image" name="fileImage">
    <?php
    $_SESSION["image"]=$row["image"];
    ?>

    <button type="submit" name="Submit">Submit</button>
</form>
</body>
</html>
