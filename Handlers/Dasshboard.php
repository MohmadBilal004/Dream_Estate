<?php 
session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:../ValidationPage.html');
}
?>
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
    <link rel="stylesheet" href="../CSS/Dashboard.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../JS/Sidebar.js"></script>
  <script src="../JS/SearchBar.js"></script>
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
              <a href="#">
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
                <span class="icon"><i class="fas fa-user" class="active"></i></span>
                <span class="item">User Profile</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="container-SearchBar">
            <input placeholder='Search...' class='js-search' type="text">
            <i id="search" class="fa fa-search"></i>
        </div>

        <!-- Container for PHP generated cards -->
        <div id="cardContainer" class="card-container">
            <?php
            $con = mysqli_connect("localhost","root","","predictpricer");

            $user_id = $_SESSION["userName"];

            if(!$con) {
                die("Cannot connect with DB server"); 
            }

            $sqlHouse = "SELECT * FROM `housetbl` where email = '$user_id'";
            $resultHouse = mysqli_query($con, $sqlHouse);

            if(!$resultHouse) {
                die("Error in SQL query for housetbl: " . mysqli_error($con));
            }

            $sqlLand = "SELECT * FROM `landtbl`where email = '$user_id'";
            $resultLand = mysqli_query($con, $sqlLand);

            if(!$resultLand) {
                die("Error in SQL query for landtbl: " . mysqli_error($con));
            }

            $combinedResults = array();

            while($rowHouse = mysqli_fetch_assoc($resultHouse)) {
                $combinedResults[] = $rowHouse;
            }

            while($rowLand = mysqli_fetch_assoc($resultLand)) {
                $combinedResults[] = $rowLand;
            }

            foreach($combinedResults as $row) {
                echo "
                    <div class='wrap'>
                        <div class='card'>
                            <img src=".$row["Image1"].">
                            <div class='container'>
                                <h3>".$row['Title']."</h3> 
                                <p>".$row["PropertyType"]."</p>
                                <p>City: ".$row["City"]."</p> 
                                <p>Local Area: ".$row["LocalArea"]."</p>
                                <p>Price: ".$row["Price"]."</p>
                                <table>
                                <tbody>
                                <tr>
                                <td><a class='btn' href='UpdateHouse.php?id=".$row["PropertyID"]."&type=".$row["PropertyType"]."'><p>Edit</p></a></td>
                                <td><a class='btn' href='DeleteProperty.php?id=".$row["PropertyID"]."&type=".$row["PropertyType"]."'><p>Delete</p></a></td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                ";
            }

            mysqli_close($con);
            ?>
        </div>
    </div>

    <!-- JavaScript for Search Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.js-search');
            const cardContainer = document.getElementById('cardContainer');

            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();
                const cards = cardContainer.getElementsByClassName('wrap');

                for (let i = 0; i < cards.length; i++) {
                    const card = cards[i];
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const propertyType = card.querySelector('p:nth-child(2)').textContent.toLowerCase();
                    const city = card.querySelector('p:nth-child(3)').textContent.toLowerCase();
                    const localArea = card.querySelector('p:nth-child(4)').textContent.toLowerCase();
                    const price = card.querySelector('p:nth-child(5)').textContent.toLowerCase();

                    if (title.includes(searchTerm) || propertyType.includes(searchTerm) || city.includes(searchTerm) || localArea.includes(searchTerm) || price.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    </script>
</body>
</html>