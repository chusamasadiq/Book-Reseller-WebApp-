<div class="container pt-5">
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">

<?php 
if(basename($_SERVER['PHP_SELF']) == 'ProductDescription.php')
{?>
   <li class="breadcrumb-item"><a href="index.php">Home</a></li> 
   <?php
   include "DataBaseConnection.php"; 

   $Productid=$_GET['id'];
    
    $sql = $conn->query("Select * from products where id='$Productid'");
    $row = $sql->fetch();
        
    if($row['Book_Category']== 'Art & Design'){
            echo '<li class="breadcrumb-item"><a href="Art.php">Art and Design</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }

    if($row['Book_Category']== 'Business'){
            echo '<li class="breadcrumb-item"><a href="Business.php">Business and Finance</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }
        
    if($row['Book_Category']== 'ComputerScience'){
            echo '<li class="breadcrumb-item"><a href="ComputerScience.php">Computer Science</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }

        if($row['Book_Category']== 'Engineering'){
            echo '<li class="breadcrumb-item"><a href="Engineering.php">Engineering</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }

    if($row['Book_Category']== 'Law'){
            echo '<li class="breadcrumb-item"><a href="Law.php">Law</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }
        
    if($row['Book_Category']== 'MedicalSciences'){
            echo '<li class="breadcrumb-item"><a href="MedicalSciences.php">Medical Science</a></li>';
            echo '<li class="breadcrumb-item">' .ucwords($row['Book_Name']). '</li>';
        }    
    
    
    
    ?>



<?php } ?>
</ul>
</nav>
</div>

