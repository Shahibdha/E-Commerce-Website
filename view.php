<?php session_start();
    if(!isset($_SESSION["emailid"]))
    {
        header('Location:login.php');
    }
    $con=mysqli_connect("localhost","root","","useraccountshaba");
    
 if(!$con){
    die("Sorry, we are facing a technical issue");
 }

 $sql="SELECT * FROM `product`";

 $result = mysqli_query($con,$sql);

 if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "  <div class='image' name='fileImage' id='fileImage'>
                    <img src='".$row["image"]."' >
                 </div>

                <div><h3'".$row["name"]."'</h3></div>
                
                <div><h3>'".$row["price"]."'</h3></div>
    
                <div>
                     <p>'".$row["description"]."'</p>
                </div>

                 <div class='bay'>
                     <button class='b1' name='Submit'>
                        <a href='edit.php'>Update</a>
                     </button>
                    <button class='b2' name='Submit'>
                        <a href='delete.php'>Delete</a>
                    </button>
                </div> ";
    }
 }
?>
<div class="container">
        <div class="products">
            <div class="product">
                <div class="image" name="fileImage" id="fileImage">
                    <img src="paint1 (1).jpeg" alt="">
                </div>

                <div class="namePrice" name=productname><h3>Acrylic paint</h3></div>
                <div class="price" name=productprice><h3>rs.1500</h3></div>
                
                <div class=description name=description>
                <p> High-quality acrylic paint for vibrant, long-lasting colors. Perfect for artists and crafters, offering excellent coverage and versatility.</p>
                </div>

                <div class="bay">
                    <button class="b1" name="Submit">
                        <a href="edit.php">Update</a>
                    </button>
                    <button class="b2" name="Submit">
                        <a href="delete.php">Delete</a>
                    </button>
                </div>
            </div>
        </div>