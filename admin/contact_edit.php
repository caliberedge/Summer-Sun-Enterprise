<?php 
include("top.php");

include("sidebar.php");

?>

<?php 

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM editor WHERE ID= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){

$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$map = $_POST['map'];
$map = stripcslashes($map);
$map = mysql_real_escape_string($map);

  $query = "UPDATE editor SET address='$address',email='$email',phone='$phone',map='$map' where ID = '$ID'";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Content Successfully Updated")
              window.location.assign("index.php")
                     </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
  }

?>


    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Update Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Contacts</li>
              <li><i class="fa fa-files-o"></i>Update Pages</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Change/Update Contact Informations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="POST">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"><b>Address</b><span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="address" type="text" value="<?= $row['address']; ?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"><b>E-Mail</b><span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="email" name="email" value="<?= $row['email']; ?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2"><b>Phone</b><span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" name="phone" value="<?= $row['phone']; ?>" required="" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"><b>Map Location</b><span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="map" type="text" value="<?= $row['map']; ?>" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="update">Update</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
