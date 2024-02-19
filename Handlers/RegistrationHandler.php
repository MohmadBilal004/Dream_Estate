<?php session_start();
if(isset($_POST["Submitbtn"])){
    $Fname = $_POST["txtfname"];
    $Lname = $_POST["txtlname"];
    $Email = $_POST["txtemail"];
    $Number = $_POST["txtphone"];
    $password = $_POST["txtpassword1"];
    $confirm = $_POST["txtconfirmpassword"];
}
if($password ==$confirm ){
    $con = mysqli_connect("localhost", "root", "", "predictpricer");

    if(!$con){
        die("Cannot connect to Database Server"); 
    }

    $sql = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `phone`, `password`) VALUES ('".$Fname."','".$Lname."','".$Email."','".$Number."','".$password."');"; 
    mysqli_query($con, $sql);

    header('Location:Home.html');
}
?>