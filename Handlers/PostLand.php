<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Land for sale</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/PostLand.css">
  <link rel="stylesheet" href="../CSS/navigation.css">


  <script src="../JS/SideBar.js"></script>
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
        src="../Images/logo.png"  alt="profile_picture">
      <h3>PredictPricer</h3>
      <!-- <p>Designer</p> -->
    </div>
    <ul>
      <li>
        <a href="../Home.html" >
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
          <span class="icon"><i class="fas fa-user-friends"></i></span>
          <span class="item">List Properties</span>
        </a>
      </li>
      <li>
        <a href="Selection.html"  class="active">
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


  
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  
  
  <div class="form-container">
  <form method="post" enctype="multipart/form-data" action="PostLand.php">
    <h3>Post ad of property</h3>

    <label for="txtTitle">Title</label>
    <input type="text" placeholder="Title" id="txtTitle" name = "txtTitle">

    <label id = "lbllandType" for="txtlandType">Select Land Type:</label>
    <select id="txtlandType" name="txtlandType">
      <option value="agricultural">Agricultural Land</option>
      <option value="residential">Residential Land</option>
      <option value="commercial">Commercial Land</option>
      <option value="industrial">Industrial Land</option>
      <option value="recreational">Recreational Land</option>
    </select>

    <label for="txtAddress">Address</label>
    <textarea id = "txtAddress" name = "txtAddress" rows="4" cols="50" placeholder="Enter street, Land number and postal code"></textarea>


    <table>
      <tbody>
        <tr>
          <td> 
            <label id="lblCity" for="txtCity">Select the City</label>
            <select id="txtCity" name="txtCity">
              <option value="Colombo">Colombo</option>
              <option value="Negombo">Negombo</option>
            </select>
          </td>
          <td>
            <label id="lblLocalArea" for="txtLocalArea">Select the Local Area</label>
            <select id="txtLocalArea" name="txtLocalArea">
              <option value="Colombo 1 Fort">Colombo 1 Fort (Kotuwa)</option>
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
              <option value="Colombo 15">Colombo 15 (Mattakkuliya, Modara, Mutwal, Madampitiya)</option>
              <!-- Add more local areas as needed -->
            </select>
          </td>
        </tr>
      </tbody>
    </table>

    <table>
      <tbody>
       
        <tr>
          <td> <label  id = "lblLandSize" for="txtLandSize">Land Size</label>
            <input type="number" placeholder="Area of the Land" id="txtLandSize" name = "txtLandSize"></td>
        
        <td><label id = "lblUnit" for="txtUnit">Units</label>
          <input type="number" placeholder="Unit measured" id="txtUnit" name = "txtUnit"></td>
        </tr>
  
  
      </tbody>
    </table>
    
   

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
  

 
    <button id = "btnPost" name = "btnPost">Post Ad</button>
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


  <!-- <script src="app.js"></script> -->
</body>
<?php
             if(isset($_POST["btnPost"])){
                    $title = $_POST["txtTitle"];
                    $landtype = $_POST["txtlandType"];
                    $address = $_POST["txtAddress"];
                    $city = $_POST["txtCity"];
                    $localArea = $_POST["txtLocalArea"];
                   
                    $landSize = $_POST["txtLandSize"];
                    $unit = $_POST["txtUnit"];
                    $description = $_POST["txtDescription"];
                    $price = $_POST["txtprice"];
                    $negotiable = $_POST["chkNegotiable"];
                     
                    $image1 = "Land/".basename($_FILES["file1"]["name"]);
                    move_uploaded_file($_FILES["file1"]["tmp_name"],$image1);

                    $image2 = "Land/".basename($_FILES["file2"]["name"]);
                    move_uploaded_file($_FILES["file2"]["tmp_name"],$image2);
                  
                    $image3 = "Land/".basename($_FILES["file3"]["name"]);
                    move_uploaded_file($_FILES["file3"]["tmp_name"],$image3);

                    $image4 = "Land/".basename($_FILES["file4"]["name"]);
                    move_uploaded_file($_FILES["file4"]["tmp_name"],$image4);

                    $con = mysqli_connect("localhost","root","","predictpricer");
	 
	                if(!$con) {
	                	die("Sorry !!! we are facing technical issue"); 
	                }

                    $sql = "INSERT INTO `landtbl` (`houseID`, `title`, `address`, `city`, `localArea`, `landSize`, `unit`, `description`, `price`, `negotiable`, `image1`, `image2`, `image3`, `image4`) 
                    VALUES (NULL, '".$title."', '".$address."', '".$city."', '".$localArea."', '".$landSize."', '".$unit."', '".$description."', '".$price."', '".$negotiable."', '".$image1."', '".$image2."', '".$image3."', '".$image4."');";
                    
                    if(mysqli_query($con,$sql)){
                        echo "Land details Uploaded Successfully";
                    }else{
                        echo "Could not upload Please check the form again";
                    }
              }
?>
</html>