<?php
session_start();

include_once "./conection.php";

$sql="SELECT * FROM `product` WHERE `itemID`='".$_GET["id"]."' ";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$user=$_SESSION['emailid'];
$price=$row["price"];
$imgpath=$row["image"];
$pName=$row["name"];

$sql="INSERT INTO `cart`(`itemID`, `name`, `price`, `image`,`user`) VALUES (NULL,'".$pName."','".$price."','".$imgpath."','".$user."')";

if(mysqli_query($con,$sql));
	{
		header('Location:Cart.php');
    }
?>