<?php session_start();
    if(!isset($_SESSION["emailid"]))
    {
        header('Location:login.php');
    }
$con = mysqli_connect("localhost", "root", "", "useraccountshaba");
if (!$con) {
     die("Sorry, we are facing a technical issue");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `product` WHERE `itemID` = $id";
    $delete = mysqli_query($con, $sql);

}

$sql = "SELECT * FROM `product`";
$query = mysqli_query($con, $sql);

	header('Location:userproduct.php');

?>

