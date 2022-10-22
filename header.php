<?php
include("connection.php");

$result = mysqli_query($connection,"SELECT * FROM editor WHERE ID = 1")
      or die("Query failed");
 $row = mysqli_fetch_array($result);
 if ($row['ID'] ==1) {

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Summer Sun Enterprise Ltd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/SSE.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<meta name="facebook-domain-verification" content="ezx8dixoquks5ebv5qz51shx3pjlo4" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  * Template Name: Flattern - v4.7.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></span></a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
      <a href="index"><img src="assets/img/index 2.png"  width="130" height="60" alt="image" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="wholesale.php">Wholesale & Distribution</a></li>
              <li><a href="construction.php">Construction</a></li>
              <li><a href="business.php">Business Consultancy</a></li>
              <li><a href="entertainment.php">Entertainment</a></li>
              <li><a href="hospitality.php">Hospitality</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login/login.php"><b>Login</b></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
