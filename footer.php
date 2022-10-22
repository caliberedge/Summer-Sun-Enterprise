<?php
include("connection.php");

$result = mysqli_query($connection,"SELECT * FROM editor WHERE ID = 1")
      or die("Query failed");
 $row = mysqli_fetch_array($result);
 if ($row['ID'] ==1) {

}
?>

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="business.php">Business Consultacy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="construction.php">Construction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="entertainment.php">Entertainment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hospitality.php">Hospitality</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <?php echo $row['address']; ?>
             <br><br>
              <strong>Phone:</strong> <?php echo $row['phone']; ?><br>
              <strong>Email:</strong> <?php echo $row['email']; ?><br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
        <!--    <h3>About Summer Sun </h3> 
            <p> <?php echo $row['about_us']; ?></p><br>-->
            <a  class=" btn-sm btn-light" style="color: purple;" href="https://emailmg.ipage.com/roundcube/">Email: Staff Only </a>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright">
       <a style="color: white;" href="https://caliberedge.com/"><?php echo date("Y"); ?> &copy; Copyright <strong><span>Summer Sun Enterprise LTD.</span></strong>. All Rights Reserved, Designed by CALIBEREDGE.COM</a>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>