<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userName"])) {
    header("Location: ../ValidationPage.html");
    exit();
}

$user_id = $_SESSION["userName"];

$con = mysqli_connect("localhost", "root", "", "predictpricer");

if (!$con) {
    die("Cannot connect to Database Server");
}

$sql = "SELECT * FROM `users` WHERE `email` = '".$user_id."';";

$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "User not found.";
    exit;
}

$user_data = mysqli_fetch_assoc($result);

// Check if the Save button is clicked
if (isset($_POST['save'])) {
    // Get updated values from the form
    $firstName = $_POST['txtfirstName'];
    $lastName = $_POST['txtlastName'];
    $phone = $_POST['txtphone'];
    $location = $_POST['txtlocation'];
    $gender = $_POST['txtgender'];

    // Update the user's profile in the database
    $update_sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `phone` = '$phone', `location` = '$location', `gender` = '$gender' WHERE `email` = '$user_id';";

    $update_result = mysqli_query($con, $update_sql);

    // if ($update_result) {
    //     echo "Profile updated successfully.";
    // } else {
    //     echo "Error updating profile: " . mysqli_error($con);
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="CSS/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

   
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../CSS/navigation.css" type="text/css">
  <link rel="stylesheet" href="../CSS/UserProfile.css" type="text/css">

  <script src="../JS/Sidebar.js"></script>
  
    <title>User Profile</title>
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
              <a href="ListHouse.php" >
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
              <a href="UserProfile.php"class="active">
                <span class="icon"><i class="fas fa-user"></i></span>
                <span class="item">User Profile</span>
              </a>
            </li>
          </ul>
        </div>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $user_data['firstName']?></span><span class="text-black-50"><?php echo $user_data['email']; ?></span><span> </span></div>
            <div class="text-center">
              <a href="Dasshboard.php" class="btn btn-primary">My Posts</a>
            </div>
          </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="post" action="UserProfile.php">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input id="txtfirstName"  name="txtfirstName"type="text" class="form-control"  value="<?php echo $user_data['firstName']?>" readonly></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input id="txtlastName" name="txtlastName"type="text" class="form-control" value="<?php echo $user_data['lastName']?>"  readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label>
                        <input id="txtphone"  name="txtphone"type="text" class="form-control"  value="<?php echo $user_data['phone']; ?>" readonly>
                    </div>
                    <div class="col-md-12"><label class="labels">Location</label>
                        <input id="txtlocation" name="txtlocation"type="text" class="form-control"  value="<?php echo $user_data['location']; ?>" readonly>
                    </div>
                    <div class="col-md-12"><label class="labels">Email</label>
                        <input id="txtemail" name="txtemail"type="text" class="form-control"  value="<?php echo $user_data['email']; ?>" readonly>
                    </div>
                    <div class="col-md-12"><label class="labels">Gender</label><input id="txtgender" name="txtgender" type="text" class="form-control" value="<?php echo $user_data['gender']; ?>" readonly></div>
                </div>
                <div class="mt-5 text-center">
                <button id="editButton" class="btn btn-primary profile-button" type="button">Edit Profile</button>
                <button id="saveButton" name="save" class="btn btn-success profile-button" type="submit" style="display: none;">Update</button>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>

<script>

document.getElementById('editButton').addEventListener('click', function() {
    // Toggle editing by toggling the readonly attribute on input fields
    var inputs = document.querySelectorAll('input[type="text"]');
    for (var i = 0; i < inputs.length; i++) {
        // Check if the current input is not the email field
        if (inputs[i].id !== 'txtemail') {
            inputs[i].readOnly = !inputs[i].readOnly;
        }
    }
    
    // Toggle the visibility of the Save button
    var saveButton = document.getElementById('saveButton');
    saveButton.style.display = saveButton.style.display === 'none' ? 'inline-block' : 'none';

    // Change the button text from "Edit Profile" to "Save"
    var button = document.getElementById('editButton');
    if (button.innerHTML === 'Edit Profile') {
        button.innerHTML = 'Cancel';
    } else {
        button.innerHTML = 'Edit Profile';
        
        // Reset all input fields to their original values
        document.getElementById('txtfirstName').value = '<?php echo $user_data['firstName']?>';
        document.getElementById('txtlastName').value = '<?php echo $user_data['lastName']?>';
        document.getElementById('txtphone').value = '<?php echo $user_data['phone']?>';
        document.getElementById('txtlocation').value = '<?php echo $user_data['location']?>';
        // You don't need to reset the email field
        document.getElementById('txtgender').value = '<?php echo $user_data['gender']?>';
    }
});

    // Add event listener to the "Save" button
document.getElementById('saveButton').addEventListener('click', function() {
    document.querySelector('form').submit();
});

</script>

</body>
</html>
