<?php
include("../connection.php");
$del_id = $_GET['id'];  
if($connection === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM songs WHERE id='$del_id'"; 
if(mysqli_query($connection, $sql)){ 
    echo '<script type="text/javascript">window.location="songs.php?act=xyxz";</script>';
}
else{ 
    echo "ERROR: Could not able to execute $sql. ";                                  
} 
?> 