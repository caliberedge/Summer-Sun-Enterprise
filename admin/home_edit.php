<?php 
include("top.php");

include("sidebar.php");

?>

<?php 

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM home WHERE ID= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){

$slider1 = $_POST['slider1'];
$slider = $_POST['slider'];
$slider2 = $_POST['slider2'];
$slider3 = $_POST['slider3'];
$slider5 = $_POST['slider5'];
$slider6 = $_POST['slider6'];
$mission = $_POST['mission'];
$vission = $_POST['vission'];
$index = $_POST['info'];



  $query = "UPDATE home SET slider1='$slider1',slider='$slider',slider2='$slider2',slider3='$slider3',slider5='$slider5',slider6='$slider6',mission='$mission',vission='$vission',sse='$index' WHERE ID = '$ID'";
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
              <li><i class="icon_document_alt"></i>Home Page</li>
              <li><i class="fa fa-files-o"></i>Update Pages</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Content Validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 1</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider1" required><?= $row['slider1']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 2</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider" required><?= $row['slider']; ?></textarea>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 3</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider2" required><?= $row['slider2']; ?></textarea>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 4</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider3" required><?= $row['slider3']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 5</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider5" required><?= $row['slider5']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider 6</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="slider6" required><?= $row['slider6']; ?></textarea>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Our Mission</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="mission" required><?= $row['mission']; ?></textarea>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Our Vission</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="vission" required><?= $row['vission']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b> SSE</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="info" required><?= $row['sse']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="update" type="submit">Update</button>
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


  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR_BASEPATH = 'ckeditor';
 /*
 Embed the CKEditor to component named 'content'
 */
 var editor = CKEDITOR.replace('info', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>


</body>

</html>
