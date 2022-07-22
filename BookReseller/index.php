<!DOCTYPE html>
<html lang="en">

<?php
include "DataBaseConnection.php";

?>

<head>
    <?php include "Libraries.php"; ?>
    <title>Books Reseller Store</title>
</head>

<body>

<!------------------------------------------- Header------------------------------------------->

    <?php include "Header.php";?>

<!------------------------------------------- Slider ------------------------------------------->

<section class="home pt-5" id="home">
    <div class="row pt-3">

        <div class="content col-sm-6 ml-5">
            <h3>Welcome to BooK Reseller Store</h3>
            <p>There is no Friend as Loyal as a BooK!</p>
            <a href="ShopNow.php">
            <button name="Shop" class="btn btn-success mr-3">Shop Now</button></a>
            <a href="sellbook.php">
            <button name="Shop" class="btn btn-warning">Sell a Book</button></a>
        </div>

        <div class="swiper books-slider col-sm-5">
            <div class="swiper-wrapper">
                <a href="ShopNow.php" class="swiper-slide"><img  src="image/Book-1.png" alt="" height= "15rem" width="32%"><a>
                <a href="ShopNow.php" class="swiper-slide"><img src="image/Book-2.png" alt="" height= "15rem" width="32%"></a>
                <a href="ShopNow.php" class="swiper-slide"><img src="image/Book-3.png" alt="" height= "15rem" width="32%"></a>
                <a href="ShopNow.php" class="swiper-slide"><img src="image/Book-4.png" alt="" height= "15rem" width="30%"></a>
                <a href="ShopNow.php" class="swiper-slide"><img src="image/Book-5.png" alt="" height= "15rem" width="33%"></a>
                <a href="ShopNow.php" class="swiper-slide"><img src="image/Book-6.png" alt="" height= "15rem" width="30%"></a>
                
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>
</section>

    <!------------------------------------------- Categories Section ------------------------------------------->

    <section class="Categories bg-light">
        <div class="container text-center">
            <h1 class="Category">SHOP BY CATEGORY</h1>
        </div>

        <div class="container">
            <div class="row">

            <?php
            $sql = $conn->query("Select * from categories;");
            while($row = $sql->fetch()) {
            ?>
                <div class="col-sm-4">
                <?php
                    $categoryname=$row['Category_Name'];
                    if($categoryname=='Art & Design') {
                        ?>
                        <a href="Art.php">
                    <?php 
                    }
                    elseif($categoryname=='Business'){
                        ?>
                         <a href="Business.php">
                         <?php 
                    }
                    elseif($categoryname=='Computer Science'){
                        ?>
                         <a href="ComputerScience.php">
                         <?php 
                    }
                    elseif($categoryname=='Engineering'){
                        ?>
                         <a href="Engineering.php">
                         <?php 
                    }
                    elseif($categoryname=='Law'){
                        ?>
                         <a href="Law.php">
                         <?php 
                    }
                    elseif($categoryname=='Medical Science'){
                        ?>
                         <a href="MedicalSciences.php">
                         <?php 
                    }
                    elseif($categoryname=='College'){
                        ?>
                         <a href="College.php">
                         <?php 
                    }
                    else{
                        ?>
                         <a href="Home.php">
                    <?php
                    }
                    ?>
                    <div class="card">
                        <img src="images/<?php echo $row['Category_Image']; ?>" class="card-img" alt="... img-responsive">
                        <div class="card-body">
                            <p style="text-align: center;"><?php echo $row['Category_Name']; ?></p>
                        </div>
                    </div>
                </a>
                </div>
                <?php } ?>

        </div>
    </section>

    <!------------------------------------------- Books Section ------------------------------------------->

    <section class="Product bg-light">
        <div class="text-center">
            <h1 class="Product">FEATURE BOOKS</h1>
        </div>

    <div class="container">
    <div class="row">

    <?php
    include "DataBaseConnection.php";
    $sql = $conn->query("Select * from products GROUP BY Book_Category;");
    while($row = $sql->fetch()) {
    ?>
    <div class="col-sm-4">
    <div class="card products-card">    
    <a href="ProductDescription.php?id=<?php echo $row['id'];?>" >
            <img src="images/<?php echo $row['Book_Img']; ?>" class="card-img-top" alt="... img-responsive">
        </a>        
        <div class="card-body text-center">
        
            <a href="ProductDescription.php?id=<?php echo $row['id'];?>">
                <p><?php echo $row['Book_Name']; ?></p>
            </a>     
                
            <h5 class="text-danger">&#8360;. <?php echo $row['Book_Price']; ?></h5>
            <button name="AddToCart" class="btn btn-success m-2"><i class="fa fa-map-marker p-2"></i><?php echo $row['Seller_Location'];?></button>
            
        </div> 
    </div>
    
    </div>

    <?php } ?>
    
        </div>
    </section>


    <?php include "Footer.php"?>

    <!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/Move Top Button.png">
</a>


    </body>
</html>