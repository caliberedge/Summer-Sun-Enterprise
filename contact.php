<?php

include("connection.php");

include("header.php");

include("session_editor.php");
?>

  <?php

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];

$message = stripcslashes($message);




$sql =mysqli_query($connection, "insert into contact(name,email,phone,address,message) values('$name','$email','$phone','$address','$message')");
if($sql) {
    echo '<script type="text/javascript"> alert("Thank You; We Have Recieved Your Message, We Will Get Back to You Shortly") 
                    window.location.assign("contact.php")
                                </script>';
    exit();
}
else{
    echo "Submition Failed";
}
  }
  
?>


<script>
    function validateForm() {
 var z = document.forms["form"]["name"].value;
  if (z == "") {
    alert("Please Enter your Name");
    return false;
 }
  var x = document.forms["form"]["email"].value;
  if (x == "") {
    alert("Please Enter your Email Address");
    return false;
  }
  var f = document.forms["form"]["phone"].value;
  if (f == "") {
    alert("Please Enter your Phone Number");
    return false;
  }
  var t = document.forms["form"]["address"].value;
  if (t == "") {
    alert("Please Enter your Address");
    return false;
  }
  var y = document.forms["form"]["message"].value;
  if (y == "") {
    alert("Please Enter your Intended Message or Complaint");
    return false;
  }
}
</script>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a style="color: red;" href="index.php">Home</a></li>
          <li style="color: white;">Contact</li>
        </ol>
        <h2>Contact</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $row['address']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo $row['email']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo $row['phone']; ?></p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="<?php echo $row['map']; ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="post" name="form" role="form" onsubmit="return validateForm()">
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" >
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone"  placeholder="Enter Mobile Number">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="address"  placeholder="Enter Address" >
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Enter Your Message" ></textarea>
              </div>
              <div class="my-3">
              </div>
              <div class="text-center"><button style="background-color: #730099;" class="btn btn-primary" name="submit" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
include("footer.php");
?>