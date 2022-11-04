<?php

$cust_F_Name = $_POST["F_Name"];
$cust_L_Name = $_POST["L_Name"];
$cust_Phone = $_POST["Phone"];
$cust_Email = $_POST["Email"];
$cust_City = $_POST["City"];
$cust_Username = $_POST["Username"];
$cust_Password = $_POST["Password"];

// echo $user_Phone;
// die();
$conn = mysqli_connect("localhost","root","","lawyers") or die("connection unsuccesfull");

$query = "INSERT INTO `customers`(`F_Name`, `L_Name`, `Phone`, `Email`, `City`, `Username`, `Password`) VALUES ('{$cust_F_Name}','{$cust_L_Name}','{$cust_Phone}','{$cust_Email}','{$cust_City}','{$cust_Username}','{$cust_Password}')";

mysqli_query($conn,$query);

header("location:http://localhost:82/lawyers-main/dashboard/customer.php");



?>