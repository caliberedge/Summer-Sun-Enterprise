<?php

include("../connection.php");

$number = rand(1000,999999999);

//This is the directory where files are saved.
$filedest = "../assets/images/";

$passport = $filedest . $number . basename($_FILES["pictures_name"]["name"]);

$passport2 = $number . basename($_FILES["pictures_name"]["name"]);

// Check if image file is a actual image or fake image

/*$filetype = strtolower(pathinfo($passport,PATHINFO_EXTENTION));
if($filetype!='jpg' && $filetype!='jpeg'){
    die("File is not correct format");
}*/

if(isset($_POST["update"])) {

    $ID=$_POST['ID'];


$sql="UPDATE picture SET pictures_name='$passport2' WHERE  ID='$ID'";

$query_run = mysqli_query($connection,$sql);

if( $query_run && move_uploaded_file($_FILES['pictures_name']['tmp_name'], $passport)) {

        echo '<script type="text/javascript"> alert("Picture Successfully Updated")
                        window.location.assign("update_picture.php")
                             </script>';
       exit();                      
    }
    else
    {
        
        echo '<script type="text/javascript"> alert("Data Not Updated!")
                        window.location.assign("update_code.php")
                             </script>';
    }
    }
?>