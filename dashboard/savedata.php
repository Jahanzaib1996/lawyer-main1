<?php

$user_F_Name = $_POST["F_Name"];
$user_L_Name = $_POST["L_Name"];
$user_Email = $_POST["Email"];
$user_Phone  = $_POST["Phone"];
$user_City = $_POST["City"];
$user_Service = $_POST["Service"];
$user_Meeting_place = $_POST["Meeting_place"];
$user_Role = $_POST["Role"];
$user_Lawyer_Details = $_POST["Lawyer_Details"];
$user_Username = $_POST["Username"];
$user_Password = $_POST["Password"];

// echo $user_Phone;
// die();
$conn = mysqli_connect("localhost","root","","lawyers") or die("connection unsuccesfull");

$query = "INSERT INTO `user`(`F_Name`, `L_Name`, `Email`, `Phone`, `City`, `Service`, `Meeting place`, `Role`, `Lawyer Details`, `Username`, `Password`) VALUES ('{$user_F_Name}','{$user_L_Name}','{$user_Email}','{$user_Phone}','{$user_City}','{$user_Service}','{$user_Meeting_place}','{$user_Role}','{$user_Lawyer_Details}','{$user_Username}','{$user_Password}')";

mysqli_query($conn,$query);

// header("location:http://localhost:82/lawyers-main/dashboard/user.php");



?>