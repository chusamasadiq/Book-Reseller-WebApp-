<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "Libraries.php"; ?>  
</head>

<body>
<!------------------------------------------- Header ------------------------------------------->
  <?php include "Header.php";?>
<!-------------------------------------------------------------------------------------->

<?php 
    $Productid=$_GET['id'];
    include "DataBaseConnection.php";
    $sql = $conn->query("Select * from products where id='$Productid'");
    while($row = $sql->fetch()) {
    ?>
  <!------------------------------------------- Title ------------------------------------------->
   <title><?php echo $row['Book_Name']; ?></title>
  <!------------------------------------------- Description Section ------------------------------------------->

  <section class="bg-light">
    <div class="container" id="Product_Discription">
      <?php include "breadcrumb2.php";?>
      <div class="row">
            <div class="col-md-6">
              <img src="images/<?php echo $row['Book_Img']; ?>" class="card-img-des"alt="... img-responsive">
            </div>
                <div class="col-md-6">
                <h3><?php echo $row['Book_Name']; ?></h3>
                <hr>
                <h4>&#8360;. <?php echo $row['Book_Price']; ?></h4>
                <hr>
                <p><b>Author Name:</b> <?php echo $row['Author_Name']; ?></p>
                <hr>
                <p><b>In Stock:</b> <?php echo $row['Book_Quantity']; ?></p>
                <hr>
                <p class="text-success"><b>Seller Name:</b> <?php echo $row['vendor']; ?></p>
                <hr>
                <p class="text-success"><b>Seller Contact Number:</b> <?php echo $row['Seller_ContactNumber']; ?></p>
                <hr>
                <p class="text-success"><b>Seller Location:</b> <?php echo $row['Seller_Location']; ?></p>
                <hr>
               </div>       
        </div>
    </div>         
  </section>

  <?php include "Footer.php"?>

<?php } ?>
</body>
</html>