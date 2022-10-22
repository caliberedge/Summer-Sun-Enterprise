<?php
include("header.php");

include("connection.php");
?>
 <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a  style="color: red;" href="entertainment.php">Back</a></li>
      <li style="color: white;">Entertainment</li>
    </ol>
    <h2>Songs</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Listen to Our Songs On... </h2>
        </div>
        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://youtube.com/channel/UCP2pAE5ly5U9HE_yW1g3PPQ" target="_blank"> <img src="assets/img/clients/youtube.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://music.amazon.co.uk/artists/B001GEMM3M?ref=dm_sh_9e4R7sNlZIHUYqLMYx5JQRQNV" target="_blank"><img src="assets/img/clients/amazon.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://tidal.com/artist/6257852" target="_blank"><img src="assets/img/clients/Tidal.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://open.spotify.com/album/7DQc8FxL052kwa45TNdFI2?si=eQcYbvdIRymPaQylYha5fg&utm_source=copy-link" target="_blank"><img src="assets/img/clients/spotify.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://audiomack.com/summersun-entertainment" target="_blank"><img src="assets/img/clients/audiomack.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://www.boomplaymusic.com/share/artist/38001465?srModel=COPYLINK&srList=ANDROID" target="_blank"><img src="assets/img/clients/boomplay.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://music.apple.com/gb/artist/d-real/1602910224?ls&ls" target="_blank"><img src="assets/img/clients/apple.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="https://deezer.page.link/rYh7bqGT1nkb7ZuGA" target="_blank"><img src="assets/img/clients/deezer.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">
  <div class="section-title">
          <h2>Click and Listen to Our Individual Songs </h2>
        </div>
    <div class="row">

      <div class="col-lg-8 entries">
      <table >
<?php 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        $total_records_per_page = 6;
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
  <a style="color: green;" href="<?php echo $rows['songlink'];?>" target="_blank"><?php echo $rows["songtittle"]; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
  by&nbsp;&nbsp;&nbsp;
  </td>
  <td>
  <a style="color: blue;" href="<?php echo $rows['songlink'];?>" target="_blank" >(<?php echo $rows["artist"];?>)</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </td>
  <td>
  <td>
  &ndash; &nbsp;&nbsp;
  </td>
  </td>
  <td>
  <a href="<?php echo $rows['songlink'];?>" target="_blank"><?php echo $rows["songtype"]; ?>
  </td>
  </tr>
  <?php
$i++;
}
?>
</tbody>
</table>
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?> &nbsp;&nbsp; 
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li> &nbsp;&nbsp;
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>&nbsp;&nbsp;
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul> 
</tbody>

      </div><!-- End blog entries list -->

</section><!-- End Blog Section -->

 

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include("footer.php");
?>