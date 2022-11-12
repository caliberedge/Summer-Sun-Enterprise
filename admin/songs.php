<?php 
include("top.php");

include("sidebar.php");

if(isset($_POST['save'])){
    
  $songlink=mysqli_real_escape_string($connection,$_POST['songlink']);
  $songtittle=mysqli_real_escape_string($connection,$_POST['songtittle']);
  $artist=mysqli_real_escape_string($connection,$_POST['artist']);
  $songtype=mysqli_real_escape_string($connection,$_POST['songtype']);



  $sql =mysqli_query($connection, "INSERT into songs(songlink,songtittle,artist,songtype) values('$songlink','$songtittle','$artist','$songtype')");
  if($sql) {
    echo '<script type="text/javascript">window.location="songs.php?act=1";</script>';
      exit();
  }
  else{
      echo "Submition Failed";
  }
    }
   

    if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
    {
    $errormsg = "<div class=\"alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
     <strong>Success!</strong> Song Successfully Embeded.
  </div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="xyxz")
{
$errormsg = "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
 <strong>Success!</strong> Embeded Song Deleted Successfully .
</div>";
}
?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Music List (AUDIOMACK)</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Music List</li>
            </ol>
          </div>
        </div>
        <?php
          if (isset($errormsg)) {
            echo $errormsg;
             }
         ?>
        <!-- Form validations -->
        <button type="button" class=" btn-primary" data-toggle="modal" data-target="#myModal">+ Add Songs</button>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                List of Embeded URL link of AUDIOMACK
              </header>
              <div class="table-responsive">
<table class="table table-striped table-advance table-hover" >
  <tr>
    <th><i class="icon_profile"></i>Artist Name</th>
    <th>Songs Tittle</th>
    <th><i class="icon_mobile"></i> Song Type</th>
    <th><i class="icon_pin_alt"></i>Embeded Song link</th>
    <th colspan="2" align="center" width="13%"><i class="icon_cogs"></i> Action</th>
  </tr>
<?php 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        $total_records_per_page = 10;
        $offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
$result_count = mysqli_query(
$connection,
"SELECT COUNT(*) As total_records FROM songs"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
$result = mysqli_query(
    $connection,
    "SELECT * FROM songs ORDER BY ID DESC LIMIT $offset, $total_records_per_page"
    );
$i=1;
while($rows= mysqli_fetch_array($result)){
?>
<tbody>
  <tr>
  <td>
  <?php echo $rows["artist"];?>
  </td>
  <td>
  <a href="#"><?php echo $rows["songtittle"]; ?>
  </td>
  <td>
  <a href="#"><?php echo $rows["songtype"]; ?>
  </td>
  <td>
  <?php echo $rows["songlink"]; ?>
  </td>
  <th>
  <div class="btn-group">
  <a class="btn btn-success" href="<?php echo $rows['songlink'];?>" target="_blank">Play</a>
  <a class="btn btn-danger" href="delete_song.php?id=<?php echo $rows['id'];?>"  onclick="return confirm('Are You Sure, You Want to Remove this Song Record?');"><i class="icon_close_alt2"></i></a>
</div>  
</th>
  </tr>
  <?php
$i++;
}
?>
</tbody>
</table>
</div>
</section>
          </div>
        </div>
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>  
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>  
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul> 
</body>



<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add Songs URL</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Embed Song Link:</label>
                            <input type="text" class="form-control" name="songlink" id="exampleInputEmail3" placeholder="Enter Audio mack link">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Song Tittle:</label>
                            <input type="text" class="form-control" name="songtittle" id="exampleInputPassword3" placeholder="Song Tittle">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Artist Name:</label>
                            <input type="text" class="form-control" name="artist" id="exampleInputPassword3" placeholder="Artist Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Song Type:</label>
                            <select class="form-control" name="songtype" id="exampleInputEmail3" required>
                            <option selected disabled value="">--Select--</option>
                            <option>Gospel</option>
                            <option>Reggae</option>
                            <option>Hip-hop</option>
                            <option>Afrobeats</option>
                            </select>
                          </div>
                          <button type="submit" name="save" class="btn btn-primary">Add</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
<!-- End of Modal-->
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