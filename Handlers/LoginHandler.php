<?php
session_start();

if (isset($_POST["loginbtn"])) {
    $userName = $_POST["email"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost", "root", "", "predictpricer");

    if (!$con) {
        die("Sorry !!! we are facing technical issue");
    }

    $sql = "SELECT * FROM `users` WHERE `email`= '" . $userName . "' AND `password`='" . $password . "'";

    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Create session
        // $_SESSION["userName"] = $userName;
        // if ($userName == "mohmadbilal004@gmail.com") {
        //     header('Location:Home.php');
        // } else {
        //     header('Location:Home2.php');
        // }
        header('Location:Home.html');
    } else {
        header('Location:login.php');
        echo "Please enter correct username and password";
    }
}
?>