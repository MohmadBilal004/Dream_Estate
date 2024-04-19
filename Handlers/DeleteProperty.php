<?php
session_start();
if (!isset($_SESSION["userName"])) {
    header('Location:../ValidationPage.html');
}

if(isset($_GET["id"]) && isset($_GET["type"])) {
    $propertyID = $_GET["id"];
    $propertyType = $_GET["type"];

    $con = mysqli_connect("localhost", "root", "", "predictpricer");

    if (!$con) {
        die("Sorry !!! we are facing technical issue");
    }

    $deleteSql = "";

    if (in_array($propertyType, ["Single-Family Homes", "Apartment", "Mansions", "Colonial Style Homes"])) {
        $deleteSql = "DELETE FROM housetbl WHERE PropertyID  = '".$propertyID."'";
    } elseif (in_array($propertyType, ["Agricultural Land", "Residential Land", "Commercial Land", "Industrial Land", "Recreational Land"])) {
        $deleteSql = "DELETE FROM landtbl WHERE PropertyID  = '".$propertyID."'";
    } else {
        echo "Invalid Property Type";
        exit(); // Exit the script if the PropertyType is not recognized
    }

    if (mysqli_query($con, $deleteSql)) {
        echo "File Deleted Successfully";
    } else {
        echo "Could not Delete";
    }

    header('Location:Dasshboard.php');
} else {
    echo "Invalid parameters";
}
?>
