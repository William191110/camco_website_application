<?php 
require 'DB_CONNECTION.php';
@session_start();
if (isset($_SESSION['user_session'])) {
$sql = "SELECT * FROM users WHERE user_email= '".$_SESSION['user_session']."'";
$result = $con->query($sql);
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
    $userid="".$row["user_id"]."";
    $username="".$row["user_name"]."";
    $user_email="".$row["user_email"]."";
    $user_location="".$row["user_location"]."";
    $user_phone="".$row["user_phone"]."";
    }
}
}
else{
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Camco Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../products/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/vendor/jquery/jquery.min.js"></script>
</head>
<body>
<button type="button" class="mobile-nav-toggle d-xl-none btn-info"><i class="icofont-navigation-menu"></i></button>