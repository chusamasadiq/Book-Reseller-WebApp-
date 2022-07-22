<?php
include "DataBaseConnection.php";
if(isset($_POST['submit'])){
  $User_id=$_POST['user_id'];
  $User_fName=$_POST['fname'];
  $User_lName=$_POST['lname'];
  $User_email=$_POST['email'];
  $User_password=$_POST['password'];
  
  
	$sql = "INSERT into customers (id, firstname, lastname, email, password) 
  values('','$User_fName','$User_lName','$User_email','$User_password')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header("Location: Login.php" );
  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "Libraries.php";?>
    <title>SignUp</title>
    <style>
        .error_form
        {
            color: red;
        }
    </style>
</head>  

<body>
<!------------------------------------------- Header ------------------------------------------->

  <?php include "Header.php";?>
  
<!------------------------------------------- SignUp Section ------------------------------------------->
<form id="registration_form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="container-fluid bg-light">
      <div class="col">
      <?php include "breadcrumb.php";?>
        <h3>Create an Account</h3>
        <div class="col-lg-3">
          <div class="form-group">
           
            <input type="text" class="form-control" id="form_fname" placeholder="First name" name="fname">
            <span class="error_form" id="fname_error_message"></span>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            
            <input type="text" class="form-control" id="form_lname" placeholder="Last name" name="lname">
            <span class="error_form" id="lname_error_message"></span>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            
            <input type="email" class="form-control" id="form_email" placeholder="Email" name="email">
            <span class="error_form" id="email_error_message"></span>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            
            <input type="password" class="form-control" id="form_password" placeholder="Password" name="password">
            <span class="error_form" id="password_error_message"></span>
          </div>
        </div>

        <input type="hidden" name="user_id">
        

      <div class="p-4">
      <button type="submit" name="submit" class="btn btn-success" id="account-button">Create an Account</button>
      </div>
        
      </div>
    </div>
  </form>



<!------------------------------------------- Footer Section ------------------------------------------->
  <?php include "Footer.php"; ?> 

<!-- scroll top button  -->

<a href="#registration_form" class="top">
    <img src="images/Move Top Button.png">
</a>


</body>

</html>