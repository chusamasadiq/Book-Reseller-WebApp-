<!DOCTYPE html>
<html lang="en">

<head>
    
</head>  

<!------------------------------------------- Subscribe Section ------------------------------------------->

<section class="bg-light">

<!------------------------------------------- Footer ------------------------------------------->
<footer class="page-footer font-small">

  <div style="background-color: #27ae60;">
    <div class="container-fluid">
      <!-- Grid row-->
      <div class="row py-4 mr-5 ml-3 d-flex align-items-center">

        <!-- Grid column -->
        
        <div class="col-md-6 col-lg-6 text-center text-md-left mb-4 mb-md-0">
        <form class="form-inline">
        
          <input type="email" class="form-control col-lg-9" id="email" placeholder="Enter e-mail to get Special Offers" required>
          
          <button type="button" class="btn btn-success subscription_btn ">Subscribe</button><br><br>
          <div class="alert alert-success alert-dismissible alert-sms col-lg-9" id="alert_box">
          <strong>Your subscription is successfully done</strong>
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          </div>
        </form>
          </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-6 text-center text-md-right">
        <h6 class="mb-3 text-white">Get connected with us on social networks!</h6>
          <!-- Facebook -->
          <a href="#" class="fb-ic">
            <i class="fab fa-facebook-f mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a href="#" class="tw-ic">
            <i class="fab fa-twitter mr-4"> </i>
          </a>
          <!-- Google +-->
          <a href="#" class="gplus-ic">
            <i class="fab fa-google-plus-g mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a href="#" class="li-ic">
            <i class="fab fa-linkedin  mr-4"> </i>
          </a>
          <!--Instagram-->
          <a href="#" class="ins-ic">
            <i class="fab fa-instagram mr-4"> </i>
          </a>

          <!--Snapchat-->
          <a href="#" class="snap-ic">
            <i class="fab fa-snapchat"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Book Reseller</h6>
        <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="text-justify" style="max-width: 235px;">
          <i class="text-justify">Our  mission is to provide a convenient platform for buying and selling second hand books in Pakistan for students looking for books and vendors looking for a business opportunity of all ages.</br>
          To become the leading online platform for buying and selling second hand books.
          </i>
        </p>
        
      </div>

      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Customer Care</h6>
        <hr class=" bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="HelpCenter.php" target="_blank">Help Center</a>
        </p>
        <p>
          <a href="#!">How to Buy</a>
        </p>
        <p>
          <a href="#!">Return & Refund</a>
        </p>
        <p>
          <a href="#!">Payment</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        
        <p>
          <a href="Login.php" target="_blank">My Account</a>
        </p>
        <p>
          <a href="#" >Products</a></p>
        <p>
          <a href="#" >Categories</a>
        </p>
        <p>
          <a href="About.php" target="_blank">About Us</a>
        </p>
        <p><a href="TermsandConditions.php" target="_blank">Term & Conditions</a></p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Contact Questions?</h6>
        <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <form action="mail.php"  method="POST">

          <div class="form-group">

            <input type="text" class="form-control" id="name" placeholder="Name" name="cName">
          </div>

          <div class="form-group">

            <input type="email" class="form-control" id="email" placeholder="example@email.com" required name="cMail">
          </div>

          <div class="form-group">

            <input type="text" class="form-control" id="subject" placeholder="Subject" name="cSubject">
          </div>

          <div class="form-group">

          <textarea class="form-control" id="Message" rows="3" placeholder="Write message here..." name="cMessage"></textarea>
          </div>
          <div class="button">
            <button type="submit" class="btn btn-success" id="footerbutton" name="footerbutton">Send</button>
          </div>

        </form>

      </div>

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  
</footer>
<!-- Footer -->

  <div class="Powerby">Powered by <a href="index.php">Book Reseller Store</a></div>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>