<?php
//connection
include("../connection.php");
ob_start();
session_start();

if(isset($_POST['post'])) {
$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

//$username = stripcslashes($username);
//$password = stripcslashes($password);



//Query
$sql = "select * from admin where username='".$username."' and password = '".$password."'";

$q = $connection->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['ID']=$res['ID'];

   header("Location:../admin/index.php"); 
   exit; 
 }else{

  echo '<script type="text/javascript"> alert("Incorrect Username or Password") 
               window.location.assign("login.php")
                              </script>';
 
 }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Summer Sun Enterprise | Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/SSE.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

         <script>
    function validateForm() {
  var x = document.forms["form"]["username"].value;
  if (x == "") {
    alert("Please enter your email or username");
    return false;
  }
  var y = document.forms["form"]["password"].value;
  if (y == "") {
    alert("Please enter  your password");
    return false;
  }
}
</script>


<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <p>Please use your credentials to login.
                                If you are not an Admin, please leave this plage. </p>
                        </div>
                        <div class="col-md-7 logn-part">
                          <div class="row">
                              <div class="col-lg-10 col-md-12 mx-auto">
                                  <div class="logo-cover">
                                       <img src="assets/images/index 2.png" alt="">
                                   </div>
                                   <form method="post" name="form" action="login.php">
                                    <div class="form-cover">
                                        <h6>Login Here</h6>
                                         <input placeholder="Enter Username" type="text" name="username" class="form-control">
                                         <input Placeholder="Enter PAssword" type="password" name="password" class="form-control">
                                         <div class="row form-footer">
                                             <div class="col-md-6 forget-paswd">
                                                 <a href="">Forget Password ?</a>    
                                             </div>
                                             <div class="col-md-6 button-div">
                                                 <button class="btn btn-primary" name="post">Login</button>
                                             </div>
                                         </div>
                                    </div>
                                </form>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>