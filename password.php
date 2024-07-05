<?php
$con = mysqli_connect("localhost", "root", "", "useraccountshaba");
if (!$con) {
    die("Sorry, we are facing a technical issue");
}

  if (isset($_POST["Submit"])) {
    $password = $_POST["password"];
    $new = $_POST["new"];
    $confirm = $_POST["confirm"];

    if($new==$confirm){
        $sql = "SELECT * FROM `register` WHERE `password` = '".$password."'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        if($count>0){
            $sql = "UPDATE `register` SET `confirm` = '$new', `password` = '$new' WHERE `password` = '$password'";
            mysqli_query($con,$sql);
            echo "password is updated successfully";
        }
        else{
            echo "old password does not match";
        }
     }
    else{
        echo "passwords does not match";
    }  
}

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
    <form action="" method="post">
        <label for="current">Current Password:</label>
        <input type="password" id="password" name="password" >

        <label for="new">New Password:</label>
        <input type="password" id="new" name="new" >

        <label for="confirm">Confirm New Password:</label>
        <input type="password" id="confirm" name="confirm">

        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>


