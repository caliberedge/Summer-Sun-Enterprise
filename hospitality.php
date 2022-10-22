<?php
include("header.php");

include("connection.php");

include("session_editor.php");

$result5 = mysqli_query($connection,"SELECT * FROM picture WHERE ID = 5")
     or die("Query failed");
 $row5 = mysqli_fetch_array($result5);
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: red;" href="index.php">Home</a></li>
          <li style="color: white;">Services</li>
        </ol>
        <h2>Hospitality</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/images/<?php echo $row5['pictures_name'];?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
          <?php echo $row['hospitality']; ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Testimonials Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include("footer.php");
?>