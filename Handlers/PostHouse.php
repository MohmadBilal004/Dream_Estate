
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userName"])) {
    header("Location: ../ValidationPage.html");
    exit();
}

$user_id = $_SESSION["userName"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update House Details</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/PostHouse.css">
  <link rel="stylesheet" href="../CSS/navigation.css">


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../JS/SideBar.js"></script>
</head>

<body>
<script>
  // Print user ID to the console
  console.log(<?php echo json_encode($_SESSION["userName"]); ?>);
</script>
 
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

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  
  
  <div class="form-container">
  <form method="post" enctype="multipart/form-data" action="PostHouse.php">
    <h3>Post advertisment of Your House</h3>

    <label for="txtTitle">Title</label>
    <input type="text" placeholder="Title" id="txtTitle" name = "txtTitle">


    <label id = "lblHouseType" for="txtHouseType">Select House Type:</label>
    <select id="txtHouseType" name="txtHouseType">
      <option value="Single-Family Home">Single-Family Home</option>
      <option value="Apartment">Apartment</option>
      <option value="Mansion">Mansion</option>
      <option value="Colonial Style Home">Colonial Style Home</option>
    </select>

    <label for="txtAddress">Address</label>
    <textarea id = "txtAddress" name = "txtAddress" rows="4" cols="50" placeholder="Enter street, house Number and postal code"></textarea> 
    <table>
      
    <table>
      <tbody>
        <tr>
          <td> 
            <label id="lblCity" for="txtCity">Select the City</label>
            <select id="txtCity" name="txtCity">
            <option value="District_Colombo">Colombo</option>
            <option value="District_Gampaha">Gampaha</option>
            </select>
          </td>
          <td>
            <label id="lblLocalArea" for="txtLocalArea">Select the Local Area</label>
            <select id="txtLocalArea" name="txtLocalArea">
              <!-- <option value="Colombo 1 Fort">Colombo 1 Fort (Kotuwa)</option>
              <option value="Colombo 2 Slave Island">Colombo 2 Slave Island</option>
              <option value="Colombo 3">Colombo 3 Colpetty (Kollupitiya)</option>
              <option value="Colombo 4">Colombo 4 (Bambalapitiya)</option>
              <option value="Colombo 5">Colombo 5 (Narahenpita)</option>
              <option value="Colombo 6">Colombo 6 (Wellawatta)</option>
              <option value="Colombo 7">Colombo 7 Cinnamon Garden (Kuruwita Uyana)</option>
              <option value="Colombo 8">Colombo 8 (Borella)</option>
              <option value="Colombo 9">Colombo 9 (Dematagoda)</option>
              <option value="Colombo 10">Colombo 10 (Maradana)</option>
              <option value="Colombo 11">Colombo 11 Pettah (Pitakotuwa)</option>
              <option value="Colombo 12">Colombo 12 Hulftsdorp (Aluthkade)</option>
              <option value="Colombo 13">Colombo 13: Bloemendhal (Kotahena & Kochchikade)</option>
              <option value="Colombo 14">Colombo 14 (Grandpass)</option>
              <option value="Colombo 15">Colombo 15 (Mattakkuliya, Modara, Mutwal, Madampitiya)</option> -->
              <!-- Add more local areas as needed -->
            </select>
          </td>
        </tr>
      </tbody>
    </table>


    <table>
      <tbody>
        <tr>
          <td> <label  id = "lblYearBuilt" for="DtYearBuilt">Year Built (Optional)</label>
                <input type="date" id="DtYearBuilt" name = "DtYearBuilt"></td>
  
                <td> <label  id = "lblYearRenovated" for="DtYearRenovated">Year Renovated (Optional)</label>
                  <input type="date"  id="DtYearRenovated" name = "DtYearRenovated"></td>
    
        </tr>

        <tr>
          <td> <label  id = "lblBedrooms" for="txtBedroom">Bedrooms</label>
                <input type="number" placeholder="No.Of Bedrooms" id="txtBedroom" name = "txtBedroom"></td>
  
        <td><label id = "lblBathrooms" for="txtBathroom">Bathrooms</label>
          <input type="number" placeholder="No.Of Bathrooms" id="txtBathroom" name = "txtBathroom"></td>
        </tr>
  
        <tr>
          <td> <label  id = "lblLandSize" for="txtLandSize">Land Size</label>
            <input type="number" placeholder="Area of the Land" id="txtLandSize" name = "txtLandSize"></td>
        
        <td>
        <label id = "lblUnit" for="txtUnit">Units</label>
          <select id="txtUnit" name="txtUnit">
              <option value="Perches">Perches</option>
              <option value="Acres">Acres</option>
          </select>
        </tr>
  
  
      </tbody>
    </table>
    
    <label for="txtHouseSize">Size of House</label>
    <input type="number" id = "txtHouseSize" name = "txtHouseSize" placeholder="Size of the house in sqft" ></textarea>
  
    <label for="txtFloor">Number of floors</label>
    <input type="number" id = "txtFloor" name = "txtFloor" placeholder="No.of floors" ></textarea>
  

    <label for="txtDescription">Description</label>
   <textarea id = "txtDescription" name = "txtDescription" rows="4" cols="50" placeholder="More details can make buyers interested" ></textarea>


    <label for="txtprice">Price (LKR)</label>
    <input type="number" id = "txtprice" name = "txtprice" placeholder="Price for the property" ></textarea>
  

    <table>
      <tbody>
        <tr>
          <td id="chkNegotiableCell"><label for="chkNegotiable">Negotiable</label></td>
        <td><input type="checkbox" id="chkNegotiable" name="chkNegotiable"></td>
        </tr>
      </tbody>
    </table>  

    <div id="file-container-1">
      <input type="file" id="file1" name="file1" multiple onchange="previewImages('file1', 'image-preview-container-1')">
      <input type="file" id="file2" name="file2" multiple onchange="previewImages('file2', 'image-preview-container-2')"> 
  </div>

  <div class="custom-div-between-containers" style="height: 35px;"></div>

  <div id="image-preview-container-wrapper-1">
    <div id="image-preview-container-1"></div>
    <div id="image-preview-container-2"></div>
  </div>

  <div  id="file-container-2">
      <input type="file" id="file3" name="file3" multiple onchange="previewImages('file3', 'image-preview-container-3')">
      <input type="file" id="file4" name="file4" multiple onchange="previewImages('file4', 'image-preview-container-4')">
  </div>

  <div class="custom-div-between-containers" style="height: 35px;"></div>

  <div id="image-preview-container-wrapper-2">
      <div id="image-preview-container-3"></div>
      <div id="image-preview-container-4"></div>
  </div>
  

 
    <button id="btnPost" name="btnPost">Post Ad</button>
    <?php
             if(isset($_POST["btnPost"])){
                    $title = $_POST["txtTitle"];
                    $houseType = $_POST["txtHouseType"];
                    $address = $_POST["txtAddress"];
                    $city = $_POST["txtCity"];
                    $localArea = $_POST["txtLocalArea"];
                    $yearBuilt = $_POST["DtYearBuilt"];
                    $yearRenovated = $_POST["DtYearRenovated"];
                 
                    $bedroomCount = $_POST["txtBedroom"];
                    $bathroomCount = $_POST["txtBathroom"];
                    $landSize = $_POST["txtLandSize"];
                    $unit = $_POST["txtUnit"];
                    $houseSize = $_POST["txtHouseSize"];
                    $floorCount = $_POST["txtFloor"];
                    $description = $_POST["txtDescription"];
                    $price = $_POST["txtprice"];
                    $negotiable = $_POST["chkNegotiable"];
                    $user_id = $_SESSION["userName"];
                    $image1 = "House/".basename($_FILES["file1"]["name"]);
                    move_uploaded_file($_FILES["file1"]["tmp_name"],$image1);

                    $image2 = "House/".basename($_FILES["file2"]["name"]);
                    move_uploaded_file($_FILES["file2"]["tmp_name"],$image2);
                  
                    $image3 = "House/".basename($_FILES["file3"]["name"]);
                    move_uploaded_file($_FILES["file3"]["tmp_name"],$image3);

                    $image4 = "House/".basename($_FILES["file4"]["name"]);
                    move_uploaded_file($_FILES["file4"]["tmp_name"],$image4);

                    $con = mysqli_connect("localhost","root","","predictpricer");
	 
	                if(!$con) {
	                	die("Sorry !!! we are facing technical issue"); 
	                }

                    $sql = "INSERT INTO `housetbl`(`PropertyID`, `Title`, `PropertyType`, `Address`, `City`, `LocalArea`, `YearBuilt`, `YearRenovated`, `BedroomCount`, `BathroomCount`, `LandSize`, `Unit`, `HouseSize`, `FloorCount`, `Description`, `Price`, `negotiable`, `email`, `Image1`, `Image2`, `Image3`, `Image4`) VALUES 
                    (NULL,'".$title."','".$houseType."','".$address."','".$city."','".$localArea."','".$yearBuilt."','".$yearRenovated."','".$bedroomCount."','".$bathroomCount."','".$landSize."','".$unit."','".$houseSize."','".$floorCount."','".$description."','".$price."','".$negotiable."','".$user_id."','".$image1."','".$image2."','".$image3."','".$image4."')";
                    
                    if(mysqli_query($con,$sql)){
                      echo "<p align='center' style='color: red; font-weight: bold;'>House details Uploaded Successfully.</p>";

                    }else{
                      echo "<p align='center' style='color: red; font-weight: bold;'>Could not upload. Please check the form again.</p>";

                    }
              }
?>
  </form>

  </div>
  <script>
   function previewImages(inputId, previewContainerId) {
    const input = document.getElementById(inputId);
    const previewContainer = document.getElementById(previewContainerId);
    const customDiv = document.querySelector('.custom-div-between-containers');

    // Remove custom-div-between-containers if it exists
    if (customDiv) {
        customDiv.remove();
    }

    while (previewContainer.firstChild) {
        previewContainer.removeChild(previewContainer.firstChild);
    }

    const files = input.files;

    if (files.length === 0) {
        // If no files are selected, recreate the custom-div-between-containers
        const customDiv = document.createElement('div');
        customDiv.classList.add('custom-div-between-containers');
        customDiv.style.height = '35px';
        document.body.appendChild(customDiv);
    }

    for (const file of files) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imgWrapper = document.createElement('div');
            imgWrapper.style.marginRight = '1px'; // Adjust the margin as needed

            const img = document.createElement('img');
            img.src = e.target.result;

            imgWrapper.appendChild(img);
            previewContainer.appendChild(imgWrapper);

            // Add click event listener to remove the div when clicked
            imgWrapper.addEventListener('click', function() {
                previewContainer.removeChild(imgWrapper);
            });
        };

        reader.readAsDataURL(file);
    }
}

</script>

<script>
    document.getElementById('txtCity').addEventListener('change', function () {
      var townSelect = document.getElementById('txtLocalArea');

      // Code to update the options for txtTown will go here
      if (this.value === 'District_Gampaha') {
        townSelect.options.length = 0; // Clear existing options
        townSelect.options.add(new Option('Delgoda', 'Town_ Delgoda'));
        townSelect.options.add(new Option('Divulapitiya', 'Town_ Divulapitiya'));
        townSelect.options.add(new Option('Gampaha', 'Town_ Gampaha City'));
        townSelect.options.add(new Option('Ganemulla', 'Town_ Ganemulla'));
        townSelect.options.add(new Option('Ja-Ela', 'Town_ Ja-Ela'));
        townSelect.options.add(new Option('Kadawatha', 'Town_ Kadawatha'));
        townSelect.options.add(new Option('Katunayake', 'Town_ Katunayake'));
        townSelect.options.add(new Option('Kelaniya', 'Town_ Kelaniya'));
        townSelect.options.add(new Option('Kesbewa', 'Town_ Kesbewa'));
        townSelect.options.add(new Option('Kiribathgoda', 'Town_ Kiribathgoda'));
        townSelect.options.add(new Option('Minuwangoda', 'Town_ Minuwangoda'));
        townSelect.options.add(new Option('Mirigama', 'Town_ Mirigama'));
        townSelect.options.add(new Option('Negombo', 'Town_ Negombo'));
        townSelect.options.add(new Option('Ragama', 'Town_ Ragama'));
        townSelect.options.add(new Option('Nittambuwa', 'Town_ Nittambuwa'));
        townSelect.options.add(new Option('Seeduwa', 'Town_ Seeduwa'));
        townSelect.options.add(new Option('Veyangoda', 'Town_ Veyangoda'));
        townSelect.options.add(new Option('Wattala', 'Town_ Wattala'));
        // Add more options as needed
      } else if (this.value === 'District_Colombo') {
        townSelect.options.length = 0; // Clear existing options
        townSelect.options.add(new Option('Colombo 1 Fort (Kotuwa)', 'Town_ Colombo 1'));
        townSelect.options.add(new Option('Colombo 2 Slave Island', 'Town_ Colombo 2'));
        townSelect.options.add(new Option('Colombo 3 Colpetty (Kollupitiya)', 'Town_ Colombo 3'));
        townSelect.options.add(new Option('Colombo 4 (Bambalapitiya)', 'Town_ Colombo 4'));
        townSelect.options.add(new Option('Colombo 5 (Narahenpita)', 'Town_ Colombo 5'));
        townSelect.options.add(new Option('Colombo 6 (Wellawatta)', 'Town_ Colombo 6'));
        townSelect.options.add(new Option('Colombo 7 Cinnamon Garden (Kuruwita Uyana)', 'Town_ Colombo 7'));
        townSelect.options.add(new Option('Colombo 8 (Borella)', 'Town_ Colombo 8'));
        townSelect.options.add(new Option('Colombo 9 (Dematagoda)', 'Town_ Colombo 9'));
        townSelect.options.add(new Option('Colombo 10 (Maradana)', 'Town_ Colombo 10'));
        townSelect.options.add(new Option('Colombo 11 Pettah (Pitakotuwa)', 'Town_ Colombo 11'));
        townSelect.options.add(new Option('Colombo 12 Hulftsdorp (Aluthkade)', 'Town_ Colombo 12'));
        townSelect.options.add(new Option('Colombo 13: Bloemendhal (Kotahena & Kochchikade)', 'Town_ Colombo 13'));
        townSelect.options.add(new Option('Colombo 14 (Grandpass)', 'Town_ Colombo 14'));
        townSelect.options.add(new Option('Colombo 15 (Mattakkuliya)', 'Town_ Colombo 15'));
        townSelect.options.add(new Option('Godagama', 'Town_ Godagama'));
        townSelect.options.add(new Option('Hanwella', 'Town_ Hanwella'));
        townSelect.options.add(new Option('Homagama', 'Town_ Homagama'));
        townSelect.options.add(new Option('Kaduwela', 'Town_ Kaduwela'));
        townSelect.options.add(new Option('Homagama', 'Town_ Homagama'));
        townSelect.options.add(new Option('Kohuwala', 'Town_ Kohuwala'));
        townSelect.options.add(new Option('Kolonnawa', 'Town_ Kolonnawa'));
        townSelect.options.add(new Option('Kottawa', 'Town_ Kottawa'));
        townSelect.options.add(new Option('Kotte', 'Town_ Kotte'));
        townSelect.options.add(new Option('Maharagama', 'Town_ Maharagama'));
        townSelect.options.add(new Option('Malabe', 'Town_ Malabe'));
        townSelect.options.add(new Option('Meegoda', 'Town_ Meegoda'));
        townSelect.options.add(new Option('Moratuwa', 'Town_ Moratuwa'));
        townSelect.options.add(new Option('Mount Lavinia', 'Town_ Mount Lavinia'));
        townSelect.options.add(new Option('Nawala', 'Town_ Nawala'));
        townSelect.options.add(new Option('Nugegoda', 'Town_ Nugegoda'));
        townSelect.options.add(new Option('Padukka', 'Town_ Padukka'));
        townSelect.options.add(new Option('Pannipitiya', 'Town_ Pannipitiya'));
        townSelect.options.add(new Option('Rajagiriya', 'Town_ Rajagiriya'));
        townSelect.options.add(new Option('Ratmalana', 'Town_ Ratmalana'));
        townSelect.options.add(new Option('Piliyandala', 'Town_ Piliyandala'));
        townSelect.options.add(new Option('Talawatugoda', 'Town_ Talawatugoda'));
        townSelect.options.add(new Option('Wellampitiya', 'Town_ Wellampitiya'));
      }
      // Add more conditions for other districts as needed
    });
  </script>
</body>




</html>