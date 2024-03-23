<?php session_start();
if(isset($_POST["Submitbtn"])){
    $Fname = $_POST["txtfname"];
    $Lname = $_POST["txtlname"];
    $Email = $_POST["txtemail"];
    $Number = $_POST["txtphone"];
    $Location = $_POST["txtLocation"];
    $Gender = $_POST["txtGender"];
    $password = $_POST["txtpassword1"];
    $confirm = $_POST["txtconfirmpassword"];
}
if($password ==$confirm ){
    $con = mysqli_connect("localhost", "root", "", "predictpricer");

    if(!$con){
        die("Cannot connect to Database Server"); 
    }

    $sql = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `phone`, `location`, `gender`, `password`) VALUES ('".$Fname."','".$Lname."','".$Email."','".$Number."','".$Location."','".$Gender."','".$password."')"; 
    mysqli_query($con, $sql);

    $_SESSION["userName"] = $Email; // Assuming email is unique and suitable for session
    header('Location: Home.php');
}else{
    echo "Passwords do not match.";
}
?>