<?php


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nasc';

$con = mysqli_connect($host,$username,$password,$database);

if(!$con)
{
    header('Location: ../errors/dberrors.php');
    die();
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Saheed Shittu - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon2.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet"> 


<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css2?family=Pontano+Sans&display=swap" rel="stylesheet"> 





  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/mobile.css" rel="stylesheet">
  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 

  <!-- =======================================================
  * Template Name: Flattern - v4.8.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" style="background-color: green; color: #fff" class="d-flex align-items-center">
    <div  class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center" style="color: #fff"><a href="mailto:contact@example.com" style="color: #fff">saheedsh2@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4" style="color: #fff"><span style="color: #fff">+44 07979144123</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.twitter.com/Major_Shittu" class="twitter" style="color: #fff"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Shittu Mohammed Sayeid" class="facebook" style="color: #fff"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/shittusayeid" class="instagram" style="color: #fff"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/MohammedSaheedShittu" class="linkedin" style="color: #fff"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>