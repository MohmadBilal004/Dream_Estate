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
    <title>Home Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 
   
  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="CSS/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
  integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../CSS/style.css"/>
  
  <link rel="stylesheet" href="../CSS/Home.css">
  <link rel="stylesheet" href="../CSS/navigation.css">
  <!-- responsive style -->



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../JS/scrollIt.min.js"></script>
  <script src="../JS/wow.min.js"></script>
  <script src="../JS/scripts.js"></script>
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
                    <a href="" class="active">Home</a>
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
                  <a href="">Log In</a>
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
          <a href="Home.php" class="active">
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
          <a href="Selection.php">
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

    <section class="home">
      <div class="banner-overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12">
                <div class="banner-text">
                  <h2 class="white">Turn your dreams into reality.</h2>
                  <p class="banner-text white">A canvas for your vision, this sprawling parcel boasts panoramic views, strategic location, and endless possibilities. Seize your opportunity for unmatched potential today!</p>

                </div>
              </div>
              
          </div>
        </div>
  </section>

  <section class="about section-padding prelative" data-scroll-index='1'>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sectioner-header text-center">
              <h3 class = "h3">About</h3>
              <span class="line"></span>
              <p>Dream Estates is aware that many people have an intense desire to possess an exceptional piece of real estate. 
                  At Dream Estates, it is our passionate goal to help you realize this dream. Dream estates is here to provide you with a carefully selected selection of premium land 
                  alternatives around the country, whether your dream is to invest in a plot of land or build a house for you and your loved ones. We provide more than simply plots; 
                  in order to guarantee a smooth transition toward achieving your real estate objectives, we provide a wide range of all-inclusive support services.</p>
            </div>
            <div class="section-content text-center">
              <div class="row">
                <div class="col-md-4">
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring"
                      aria-hidden="true"></i>
                    <h5>How we Select</h5>
                    <p>At Dream Estates Realty, our approach commences with a meticulous analysis of prospective properties, 
                      ensuring that we handpick only the most promising options for our clients. Our primary goal is to guarantee the highest return on 
                      investment, and to achieve this, we consider factors such as the property's location, its proximity to key amenities, 
                      and its overall appeal to potential buyers.
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile"
                      aria-hidden="true"></i>
                    <h5>Community-Focused</h5>
                    <p>Our main goals at Dream Estates Realty are to provide our people with an engaging lifestyle and to build a feeling of community. 
                      Our specialty is selling exceptional community land in Sri Lanka, giving people a one-of-a-kind chance to live luxuriously and actively engage in causes that support diversity and social connections. 
                      Our thoughtfully chosen common areas are intended to foster a lively sense of community where people live luxuriously while simultaneously participating in activities that forge enduring bonds.
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                    <h5>How we Facilitate Investment</h5>
                    <p>We use advanced analytics and market data in addition to our rigorous selection process to forecast future pricing patterns.
                       We strive to provide our clients with excellent homes as well as wise investments that may appreciate in value over time by keeping up with market developments.
                       Dream Estates consistent aim is to deliver premium homes that complement our clients' objectives and are supported by an innovative strategy to foresee and take advantage of market developments.
                    </p>
                  </div>
                </div>
              </div>
              <!-- <a href="#" class="about-btn">Learn More</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>



<!-------Video Start------->
<section class="video-section prelative text-center white">
  <div class="section-padding video-overlay">
    <div class="container">
      <h3>Watch Now</h3>
      <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
      <div class="video-popup">
        <div class="video-src">
          <div class="iframe-src">
            <iframe src="https://www.youtube.com/embed/qZxM7TkdNUA" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Video End------->






<!-- service section -->

<section class="service_section layout_padding">
<div class="service_container">
  <div class="container ">
    <div class="heading_container">
      <div class="sectioner-header text-center">
       <h3 class = "h3"> Services</h3>
       <span class="line"></span>
      </div>
      <p align = "center">
        A website that focuses in selling houses, land, and predicting prices usually provides a number of services to help 
        buyers and sellers make educated choices. Here are a few typical services that this website might offer:
      </p>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="box ">
          <div class="img-box">
            <img src="../Images/listProperty.gif" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Property Listings
            </h5>
            <p>
              Showcasing a diverse range of properties, including land and houses, with detailed information, high-quality images, and virtual tours.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="box ">
          <div class="img-box">
            <img src="../Images/Property Valuation.gif" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Property Valuation
            </h5>
            <p>
              Offering tools or services for property valuation to help sellers determine an appropriate listing price and buyers assess the fairness of a property's value.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="box ">
          <div class="img-box">
            <img src="../Images/PricePrediction.gif" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Property Price Predictions
            </h5>
            <p>
              Unlock the future of real estate decisions with our cutting-edge price prediction tools,
               providing insightful forecasts for land and house values.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="box ">
          <div class="img-box">
            <img src="../Images/Community.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Community Information
            </h5>
            <p>
              Providing information about local communities, amenities, schools, and other factors influencing property values.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- end service section -->


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


    <!-- <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script> -->
      <script>
        wow = new WOW();
        wow.init();
        $(document).ready(function (e) {
    
          $('#video-icon').on('click', function (e) {
            e.preventDefault();
            $('.video-popup').css('display', 'flex');
            $('.iframe-src').slideDown();
          });
          $('.video-popup').on('click', function (e) {
            var $target = e.target.nodeName;
            var video_src = $(this).find('iframe').attr('src');
            if ($target != 'IFRAME') {
              $('.video-popup').fadeOut();
              $('.iframe-src').slideUp();
              $('.video-popup iframe').attr('src', " ");
              $('.video-popup iframe').attr('src', video_src);
            }
          });
    
          $('.slider').bxSlider({
            pager: false
          });
        });
    
        // $(window).on("scroll", function () {
    
        //   var bodyScroll = $(window).scrollTop(),
        //     navbar = $(".navbar");
    
        //   if (bodyScroll > 50) {
        //     $('.navbar-logo img').attr('src', 'images/logo-black.png');
        //     navbar.addClass("nav-scroll");
    
        //   } else {
        //     $('.navbar-logo img').attr('src', 'images/logo.png');
        //     navbar.removeClass("nav-scroll");
        //   }
    
        // });
        // $(window).on("load", function () {
        //   var bodyScroll = $(window).scrollTop(),
        //     navbar = $(".navbar");
    
        //   if (bodyScroll > 50) {
        //     $('.navbar-logo img').attr('src', 'images/logo-black.png');
        //     navbar.addClass("nav-scroll");
        //   } else {
        //     $('.navbar-logo img').attr('src', 'images/logo-white.png');
        //     navbar.removeClass("nav-scroll");
        //   }
    
        //   $.scrollIt({
    
        //     easing: 'swing',      // the easing function for animation
        //     scrollTime: 900,       // how long (in ms) the animation takes
        //     activeClass: 'active', // class given to the active nav element
        //     onPageChange: null,    // function(pageIndex) that is called when page is changed
        //     topOffset: -63
        //   });
        // });
    
      </script> 
   
    <!-- <script src="Home.js"></script> -->
</body>

</html>