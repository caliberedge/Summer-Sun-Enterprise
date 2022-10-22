<?php
include("header.php");

include("connection.php");

include("session_editor.php");

$result6 = mysqli_query($connection,"SELECT * FROM picture WHERE ID = 6")
     or die("Query failed");
 $row6 = mysqli_fetch_array($result6);
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: red;" href="index.php">Home</a></li>
          <li style="color: white;">Services</li>
        </ol>
        <h2>Wholesale & Distribution</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/images/<?php echo $row6['pictures_name'];?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
          <?php echo $row['about_us']; ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    
    <!-- ======= Testimonials Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include("footer.php");
?>