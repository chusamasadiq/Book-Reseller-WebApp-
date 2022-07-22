<?php
include "DataBaseConnection.php";

if(isset($_POST['submit'])){

    $bookName = $_POST['bookName'];
    $bookPrice = $_POST['bookPrice'];
    $bookAuthor = $_POST['bookAuthor'];
    $bookCategory = $_POST['bookCategory'];
    $sellerName = $_POST['sellerName'];
    $sellerLocation = $_POST['sellerLocation'];
    $sellerContactNumber = $_POST['sellerContactNumber'];
    $bookQuantity = $_POST['bookQuantity'];
    $imgContent = $_POST['image'];
    
    $insert = "INSERT into products (id,Book_Name,Author_Name,Book_Category,Book_Price,Book_Quantity,Seller_Location,Seller_ContactNumber,Book_Img,vendor) 
    values('','$bookName','$bookAuthor','$bookCategory','$bookPrice','$bookQuantity','$sellerLocation','$sellerContactNumber','$imgContent','$sellerName')";
    $insertsql=$conn->query($insert);
    
    if($insertsql->rowcount()>0){
        echo '<script>alert("Book added succesfully")</script>';
		}
		else{
		  echo 'Error: ';
		}
	}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "Libraries.php";?>
</head>  

<body>
<!------------------------------------------- Header ------------------------------------------->
<?php include "Header.php";?>

<!------------------------------------------- Login Section ------------------------------------------->

  
  
    <div class="container-fluid bg-light">
        <div class="col">
            <?php include "breadcrumb.php";?>
            <h3>Sell a Book</h3>
            <div class="col-lg-9">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">           
                <div class="form-group">
                    <label for="BookName">Book Name</label>
                    <input type="text" class="form-control"name="bookName" placeholder="Enter book name">
                </div>
                
                <div class="form-group">
                    <label for="BookPrice">Book Price</label>
                    <input type="text" class="form-control"name="bookPrice" placeholder="Enter price">
                </div>
                
                <div class="form-group">
                <label for="AuthorName">Book Author Name</label>
                    <input type="text" class="form-control"name="bookAuthor" placeholder="Enter author name">
                </div>
                
                <div class="form-group">
                <label for="BookCategory">Book Category</label>
                    <input type="text" class="form-control"name="bookCategory" placeholder="Enter book category">
                </div>

                <div class="form-group">
                <label for="Quantity">Quantity</label>
                    <input type="number" class="form-control col-sm-12" placeholder="Enter"value="1"  required
                    name="bookQuantity" min="1" max="1">
                </div>

                <div class="form-group">
                <label for="Seller Name">Seller Name</label>
                    <input type="text" class="form-control"name="sellerName" placeholder="Enter seller name" required>
                </div>
                

                <div class="form-group">
                <label for="SellerLocation">Seller Location</label>
                    <input type="text" class="form-control"name="sellerLocation" placeholder="Enter seller location" required>
                </div>
                
                <div class="form-group">
                <label for="Seller Contact Number">Seller Contact Number</label>
                    <input type="text" class="form-control"name="sellerContactNumber" placeholder="Enter seller contact number" required>
                </div>
            
                <div class="form-group">
                <label for="Upload">Upload Book Image</label>
                    <input type="file" class="form-control"name="image" id="image">
                </div>
               
                <div class="mt-5 mb-5 text-center">
                    <button type="submit" name="submit" class="btn btn-success" id="login-button">Add Book</button>
                </div>
            </form>        
            </div>
        </div>
    </div>

  

<!------------------------------------------- Footer ------------------------------------------->

<?php include "Footer.php";?>

<!-- scroll top button  -->

<a href="#Login_form" class="top">
    <img src="images/Move Top Button.png">
</a>
 

</body>

</html>