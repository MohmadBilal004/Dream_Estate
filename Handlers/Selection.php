<?php session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:../ValidationPage.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Property</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="../CSS/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
  integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../CSS/selection.css" rel="stylesheet" />
    <link href="../CSS/navigation.css" rel="stylesheet">


    <!--Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="../JS/Sidebar.js"></script>

</head>
<body>
    


    <header>
        <div class = "move-right">
          <div class="logo">Dream Estate</div>
        </div>  
          <input type="checkbox" id="nav_check" hidden>
          <nav>
              <ul>
                  <li>
                      <a href="">Home</a>
                  </li>
                  <li>
                      <a href="">Blog</a>
                  </li>
                  <li>
                      <a href="">Services</a>
                  </li>
                  <li>
                      <a href="">About</a>
                  </li>
                  <li>
                    <a href="">Log Out</a>
                </li>
              </ul>
          </nav>
          <label for="nav_check" class="hamburger">
              <div></div>
              <div></div>
              <div></div>
          </label>
      </header>
  
  
      <div class="wrapper">
        <div class="section">
          <div class="top_navbar">
            <div class="hamburger2">
              <a href="#">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
        
        </div>
        <div class="sidebar">
          <div class="profile">
            <img
              src="../Images/logo.png"
              alt="profile_picture">
            <h3>Dream Estate</h3>
            <!-- <p>Designer</p> -->
          </div>
          <ul>
            <li>
              <a href="Home.php" >
                <span class="icon"><i class="fas fa-home"></i></span>
                <span class="item">Home</span>
              </a>
            </li>
            <li>
              <a href="http://127.0.0.1:5000">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span class="item">Price Prediction</span>
              </a>
            </li>
            <li>
              <a href="ListHouse.php">
                <span class="icon"><i class="fas fa-list"></i></span>
                <span class="item">List Properties</span>
              </a>
            </li>
            <li>
              <a href="Selection.php" class="active">
                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                <span class="item">Sell Property</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fas fa-database"></i></span>
                <span class="item">About Us</span>
              </a>
            </li>
    
            <li>
              <a href="UserProfile.php">
                <span class="icon"><i class="fas fa-user"></i></span>
                <span class="item">User Profile</span>
              </a>
            </li>
          </ul>
        </div>


      <!-- service section -->
<div class="text">
  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Advertise Your <span>Property</span>
          </h2>
          <p align="center" >
            To draw in the public and convince them to buy your property, you may create an advertising showcasing it. 
            Choose the relevant property type and provide the required information.
          </p>
        </div>
        <div class="row">
            <a href="PostLand.php">
          <div class="col-md-6 ">
            
            <div class="box ">
              <div class="img-box">
                <img src="../Images/map.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sell your Land
                </h5>
                
                <a href="PostLand.php">
                    <p>
                        You may publish an advertisement about your land here.
                    </p>
                </a>
              </div>
            </div>
          </div>
        </a>
          <div class="col-md-6 ">
            <a href="PostHouse.php">
            <div class="box ">
              <div class="img-box">
                <img src="../Images/house.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sell your House
                </h5>            
                <a href="PostHouse.php">
                    <p>
                      You may publish an advertisement about your House or Apartment here.
                    </p>
                </a>
              </div>
            </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->
</div>
  <!-- info section -->

<section class="info_section layout_padding2">
<div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-3 info_col">
      <div class="info_contact">
        <h4>
          Address
        </h4>
        <div class="contact_link_box">
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
              SLIIT Academy, BOC Merchant Tower, No #28, St Michael's Road,Colombo 03.
            </span>
          </a>
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Call 0762704454
            </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              mohmadbilal004@gmail.com
            </span>
          </a>
        </div>
      </div>
      <div class="info_social">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 info_col">
      <div class="info_detail">
        <h4>
          Info
        </h4>
        <p>
          necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-2 mx-auto info_col">
      <div class="info_link_box">
        <h4>
          Links
        </h4>
        <div class="info_links">
          <a class="active" href="index.html">
            <img src="images/nav-bullet.png" alt="">
            Home
          </a>
          <a class="" href="about.html">
            <img src="images/nav-bullet.png" alt="">
            About
          </a>
          <a class="" href="service.html">
            <img src="images/nav-bullet.png" alt="">
            Services
          </a>
          <a class="" href="contact.html">
            <img src="images/nav-bullet.png" alt="">
            Contact Us
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 info_col ">
      <h4>
        Subscribe
      </h4>
      <form action="#">
        <input type="text" placeholder="Enter email" />
        <button type="submit">
          Subscribe
        </button>
      </form>
    </div>
  </div>
</div>
</section>

<!-- end info section -->


 
  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://github.com/MohmadBilal004">TaatanBro</a>
      </p>
    </div>
  </section>
  <!-- footer section -->
      

</body>
</html>