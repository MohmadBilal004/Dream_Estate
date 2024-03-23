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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/UserProfile.css">

    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <div class="container">
        <div class="user-details">
            <div class="detail">
                <p><strong>Name:</strong></p>
                <p><strong>Gender:</strong></p>
                <p><strong>Location:</strong></p>
            </div>
            <div class="value">
                <p><?php echo $user_data['firstName'] . ' ' . $user_data['lastName']; ?></p>
                <p><?php echo $user_data['gender']; ?></p>
                <p><?php echo $user_data['location']; ?></p>
            </div>
        </div>
        <div class="user-details">
            <p><strong>Email:</strong> <?php echo $user_data['email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $user_data['phone']; ?></p>
            <!-- Add more fields as needed -->
        </div>
    </div>
</body>
</html>

