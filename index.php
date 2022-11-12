<?php
include("header.php");

$result = mysqli_query($connection,"SELECT * FROM home WHERE ID = 1")
     or die("Query failed");
 $row = mysqli_fetch_array($result);
?>
   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>Welcome to <span>Summer Sun Enterprises</h2>
              <p><?php echo $row['slider1'];?></p>
            </div>
              <div class="text-center"><a href="about.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>


        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/whole.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>We Provide <span>Wholesale & Distribution Services</h2>
             <p><?php echo $row['slider'];?></p>
            </div>
              <div class="text-center"><a href="wholesale.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/const.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>Let Us Supply & Manage Your <span>Construction Projects</h2>
              <p><?php echo $row['slider2'];?></p> 
            </div>
              <div class="text-center"><a href="construction.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

         <!-- Slide 4 -->
         <div class="carousel-item " style="background-image: url(assets/img/slide/music.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>We Provide<span> Entertainment & Hospitality Services</h2>
              <p><?php echo $row['slider3'];?></p>
            </div>
              <div class="text-center"><a href="entertainment.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

         <!-- Slide 5 -->
         <div class="carousel-item " style="background-image: url(assets/img/slide/consult.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>Our <span>Business Consultancy </span> Services</h2>
              <p><?php echo $row['slider5'];?></p>
            </div>
              <div class="text-center"><a href="business.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

          <!-- Slide 6 -->
          <div class="carousel-item " style="background-image: url(assets/img/slide/hospitality.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="text-center">
              <h2>Our<span> Hospitality Management </span>Services</h2>
              <p><?php echo $row['slider6'];?></p>
            </div>
              <div class="text-center"><a href="hospitality.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>
        
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/logo.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <?php echo $row['sse'];?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

       <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">OUR MISSION</a></h3>
              <p><?php echo $row['mission'];?></p>
            </div>
          </div>
      <!--    <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">Dolor Sitema</a></h3>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>-->
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">OUR VISSION</a></h3>
              <p><?php echo $row['vission'];?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title" >
          <h2><b><strong>OUR ADVANTAGE</strong></b></h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" >

            <div class="progress">
              <span class="skill">Reliability <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Discount in Prices <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Customer Support <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6"  data-aos-delay="100">

            <div class="progress">
              <span class="skill">bargains<i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">excellent services <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Products Availability <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php
include('footer.php');
?>