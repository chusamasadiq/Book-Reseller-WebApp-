<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "Libraries.php";?>
    <title>Forgotten Password</title>
</head>  

<body>
<!------------------------------------------- Header ------------------------------------------->
  
    <?php include "Header.php";?>
    
<!------------------------------------------- Forgot Password Section ------------------------------------------->
    <section id="forgotpassword">
        <form action="#">
            <div class="container">
                <div class="col">
                    <h3>Forgot your password?</h3>
                    <h3>We can help.</h3>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <br>
                            <label for="text">Enter the email address for your ShoppyZone account. We'll send a
                                verification code for you to enter before signing in.</label><br><br>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="E mail address (required)"
                                required><br>
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary" id="button">Submit</button>
                            </div><br>
                            <label for="rext">Remember your password? <a href="Login.php">SignIn</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

<!------------------------------------------- Footer ------------------------------------------->
    <?php include "Footer.php";?> 

    <!-- scroll top button  -->

<a href="#forgotpassword" class="top">
    <img src="images/Move Top Button.png">
</a>

</body>

</html>