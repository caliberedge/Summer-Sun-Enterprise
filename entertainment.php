<?php
include("header.php");

include("connection.php");

include("session_editor.php");

$result4 = mysqli_query($connection,"SELECT * FROM picture WHERE ID = 4")
     or die("Query failed");
 $row4 = mysqli_fetch_array($result4);
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: red;" href="index.php">Home</a></li>
          <li style="color: white;">Services</li>
        </ol>
        <h2>Entertainment</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/images/<?php echo $row4['pictures_name'];?>" class="img-fluid" alt=""><br><br>
            <button type="button" class="btn-success" ><a href="songs.php" style="color:white">Click here to listen to our Songs</a></button>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
          <?php echo $row['entertainment']; ?>
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