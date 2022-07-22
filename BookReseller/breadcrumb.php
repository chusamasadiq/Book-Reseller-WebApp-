<div class="container pt-5">
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <?php 

// include "DataBaseConnection.php"; 
// if(isset($_GET['pid'])){
// $sql = $conn->query("Select * from products where id='$pid'");
// $row = $sql->fetch();
// }

            
            switch(basename($_SERVER["PHP_SELF"])){
                case 'Art.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="Art.php">Art and Design</a></li>';
                    break;

                case 'Business.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="Business.php">Business and Finance</a></li>';
                    break;
                
                case 'ComputerScience.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="ComputerScience.php">Computer Science</a></li>';
                    break;
    
                case 'Engineering.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="Engineering.php">Engineering</a></li>';
                    break;
            
                case 'Law.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="Law.php">Law</a></li>';
                    break;
        
                case 'MedicalSciences.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="MedicalSciences.php">Medical Science</a></li>';
                    break;

                case 'About.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="About.php">About</a></li>';
                    break;
                    
                case 'Login.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="Login.php">Become a Vendor</a></li>
                              <li class="breadcrumb-item"><a href="Login.php">Login</a></li>';
                    break;
                
                case 'signup.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="Login.php">Become a Vendor</a></li>
                        <li class="breadcrumb-item"><a href="signup.php">Sign Up</a></li>';
                    break;
                
                    case 'TermsandConditions.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="TermsandConditions.php">Terms and Conditons</a></li>';
                        
                    break;
                    
                case 'HelpCenter.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="HelpCenter.php">Help Center</a></li>';
                        
                    break;
                
                case 'sellbook.php':
                        echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="sellbook.php">Sell a Book</a></li>';
                        
                    break;
                                
    
                    default:
                    echo '<li><a href="index.php">Home</a></li>';
                    break;
            }

            
        ?>
        </ul>
    </nav>
    </div>

    <!-- <div class="container pt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    </div> -->
