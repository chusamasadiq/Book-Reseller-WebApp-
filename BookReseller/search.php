<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "Libraries.php"; ?>
    <title>Search Result</title>  
</head>

<body>
<!--------------------------- Header ------------------------>
  <?php include "Header.php";?>
<!----------------------------------------------------------->
  
<!----------------- Search Items Result Section ----------------------->
  <section class="bg-light" id="searchsection">
        <div class=" text-center SearchProduct">
            <h1 class="Product">RESULTS FOR PRODUCT</h1>
        </div>

    <div class="container">
    <div class="row">
    <?php
    $Book_Name = $_GET['search'];
    include "DataBaseConnection.php";
    $sql = $conn->query("Select * from products where Book_Name like '%$Book_Name%'");
   
    if($sql->rowCount() > 0) {
    while($row = $sql->fetch()) 
    {
    ?>
    <div class="col-sm-4">
    <div class="card">
        
        <a href="ProductDescription.php?id=<?php echo $row['id'];?>">
            <img src="images/<?php echo $row['Book_Img']; ?>" class="card-img-top" alt="... img-responsive">
        </a>        
            
        <div class="card-body text-center">
        
            <a href="ProductDescription.php?id=<?php echo $row['id'];?>">
                <p><?php echo $row['Book_Name']; ?></p>
            </a>     
                
            <h5 class="text-danger">&#8360;. <?php echo $row['Book_Price']; ?></h5>

            <button class="btn btn-success m-2"><i class="fa fa-map-marker p-2"></i>Add to Cart</button>
            
        </div> 
    </div>
    
    </form>
    </div>

    <?php }
    }
    else
    {
        echo "<h2> Product is not Available <h2>";
    } 
    ?>
        </div>
    </section>

  <?php include "Footer.php"?>

 <!-- scroll top button  -->

<a href="#searchsection" class="top">
    <img src="images/Move Top Button.png">
</a>



</body>
</html>