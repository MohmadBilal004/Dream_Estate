<!-- <?php 
//session_start();
// if(!isset($_SESSION["userName"]))
// {
// 	 header('Location:login.php');
// }
?> -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List Of Houses</title>

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="CSS/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



    <link rel="stylesheet" href="../CSS/navigation.css" type="text/css">
    <link rel="stylesheet" href="../CSS/ListHouse.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../app.js"></script>
</head>

<body>
<header>
      <div class = "move-right">
        <div class="logo">PredictPricer</div>
      </div>  
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Portfolio</a>
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
          src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
          alt="profile_picture">
        <h3>PredictPricer</h3>
        <!-- <p>Designer</p> -->
      </div>
      <ul>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-home"></i></span>
            <span class="item">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-desktop"></i></span>
            <span class="item">Price Prediction</span>
          </a>
        </li>
        <li>
          <a href="#"  class="active">
            <span class="icon"><i class="fas fa-user-friends"></i></span>
            <span class="item">List Properties</span>
          </a>
        </li>
        <li>
          <a href="Selection.html">
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
          <a href="#">
            <span class="icon"><i class="fas fa-chart-line"></i></span>
            <span class="item">Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-user-shield"></i></span>
            <span class="item">Admin</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-cog"></i></span>
            <span class="item">Settings</span>
          </a>
        </li>
      </ul>
    </div>

<?php
	$con = mysqli_connect("localhost","root","","predictpricer");
	
	 if(!$con) 
	 {
		die("Cannot connect with DB server"); 
	 }
	 
	 $sql = "SELECT * FROM `housetbl`";
	 
	 $result = mysqli_query($con,$sql);	
	
	 if(mysqli_num_rows($result)>0)
	 {
		while($row = mysqli_fetch_assoc($result)) 
		{
			
      echo "
      <div class='wrap'>
      <div class='card'>
          <img src=".$row["Image1"].">
          <div class='container'>
          <h3>".$row['Title']."</h3> 
          <p>".$row["HouseType"]."</p>
          <p>Price:".$row["City"]."</p> 
          <p>Quantity:".$row["LocalArea"]."</p>
          <p>Quantity:".$row["Price"]."</p>
          <table>
          <tbody>
       
          </tbody>
          </table>
          </div>
      </div>
      </div>
      ";

		}
	 }		
	mysqli_close($con);		
?>
</body>
</html>