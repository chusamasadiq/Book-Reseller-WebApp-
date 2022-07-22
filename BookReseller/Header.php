<!DOCTYPE html>
<html lang="en">

<head>
  <script src="images/Shoppyzone.png" crossorigin="anonymous"></script>
</head>

  
<body>
  <!------------------------------------------- Header ------------------------------------------->

  <header>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Book Reseller</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsenavbar">
      <ul class="navbar-nav">
            <li class="nav-item">
              <a href="sellbook.php" class="nav-link">Sell&nbsp;a&nbsp;Book</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Books
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Art.php">Art & Design</a></li>
                <a class="dropdown-item" href="Business.php">Business & Finance</a></li>
                <li><a class="dropdown-item" href="ComputerScience.php">Computer Science</a></li>
                <li><a class="dropdown-item" href="Engineering.php">Engineering</a></li>
                <li><a class="dropdown-item" href="Law.php">Law</a></li>
                <li><a class="dropdown-item" href="MedicalSciences.php">Medical Sciences</a></li>
                <li><a class="dropdown-item" href="College.php">College</a></li>
              </ul>
            </li>

            <li class="nav-item Search col-lg-8">
            <form action="search.php" method="get">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                    All
                  </button>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="Art.php">Art & Design</a>
                  <a class="dropdown-item" href="Business.php">Business & Finance</a>
                  <a class="dropdown-item" href="ComputerScience.php">Computer Science</a>
                  <a class="dropdown-item" href="Engineering.php">Engineering</a>
                  <a class="dropdown-item" href="Law.php">Law</a>
                  <a class="dropdown-item" href="MedicalSciences.php">Medical Sciences</a>
                  <a class="dropdown-item" href="College.php">College</a>
                  </div>
                </div>
               
                <input type="text" class="form-control" name="search" placeholder="Search in Book Reseller Store" required>
                <div class="input-group-append">
                  <button  class="btn btn-light" type="submit"><i class="fa fa-search fa-1x "
                      aria-hidden="true"></i></button>
                </div>
              </div>
              </form>
            </li>

            <li class="nav-item">
              <a href="http://vendorpanel.dev.me/" class="nav-link mr-2">Become&nbsp;Vendor</a>
            </li>
            <li class="nav-item">
              <a href="Login.php"><i class="fas fa-user fa-2x mr-3" id="Accounts"></i></a>
            </li>

            <li class="nav-item">
              <a href="About.php" class="nav-link">About&nbsp;Us</a>
            </li>

            
          </ul>
      </div> 
      
      
    </nav>
  </div>
  </header>
</body>
</html>
