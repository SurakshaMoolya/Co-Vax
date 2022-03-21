
<?php
include "config.php";
include "mail_function.php";

date_default_timezone_set("Asia/Kolkata");
session_start();
$success= "";
$error_message="";

if (isset($_POST["submit_email"])){
  $email=$_POST["email"];
  $sqli="SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn,$sqli);
  if(mysqli_num_rows($result)>0){

    $row=mysqli_fetch_assoc($result);
    $_SESSION['email']=$row['email'];

    //generate OTP
    $otp= rand(1000,9999);

    //Send OTP
    $mail_status=sendOTP($_POST["email"],$otp);

      if ($mail_status == 1){
          $sqli="INSERT INTO otp_expiry(otp, is_expired , create_at) VALUES ('".$otp."', 0 ,'".date("Y-m-d H:i:s")."')";
          $result = mysqli_query($conn,$sqli);

          $current_id = mysqli_insert_id($conn);

              if(!empty($current_id)){
                $success=1;
              }
      }
  }else{
    $error_messaage="Email Not Exists!";
  }

}
if (isset($_POST["submit_otp"])){
  $sqli="SELECT * FROM otp_expiry WHERE otp='".$_POST["otp"]."' AND is_expired!=1 AND NOW()<= DATE_ADD(create_at, INTERVAL 15 MINUTE)"; 
  $result = mysqli_query($conn,$sqli);
  $count=mysqli_num_rows($result);
  if(!empty($count)){
    $sqli="UPDATE otp_expiry SET is_expired = 1 WHERE otp='".$_POST["otp"]."'";
    $result=mysqli_query($conn, $sqli);
    $success = 2;
  }else{
    $success=1;
    $error_messaage = "Invalid OTP!";
  }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    

    <title>Co-VAX App</title>
  </head>
  <body>
    
<!----NAVBAR---------->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
        <div class="sidebar-brand">
            <h2 class="logo"><span class="lab la-envira"></span>Co-VAX</h2>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            </ul>
            <a href="register.php" class="btn btn-primary ms-lg-3">Register/Sign In</a>
            <a href="main.php" class="btn btn-primary ms-lg-3">Home</a>
            <?php
            if(!empty($_SESSION['email'])){
            ?>
            <a href="logout.php" class="btn btn-primary ms-lg-3">Logout</a>
            <?php
            }
            ?>
            <a href="status.php" class="btn btn-primary ms-lg-3">Back</a>
          </div>
        </div>
      </nav>
<!-----//NAVBAR------>

 <!----HERO---------->
 <div class="vero vh-10 text-center py-3">
    <div class="container">
        <div class=" text-align-center">
        <form name="fromusr" action="" method="post">
            <div class="block-center-nvc">
            <img class="text-center" height="170" width="200" src="https://selfregistration.cowin.gov.in/assets/images/login-screen.svg">
            <h2>Log In for Vaccination</h2>
            <p>If already registered</p><br>
            
                <?php 
                if (!empty($success==1)){

                ?>
            <h4>Enter OTP</h4>
            <p>Check your E-mail for OTP</p>
            <p><input class="form-control" type="number" maxlength="4" minlength="4" placeholder="One Time Password" name="otp"></p>
            <button type="submit" name="submit_otp" id="searchbtn" class="btn btn-primary ms-lg-3">Submit</button>
                <?php  
                    }else if($success==2) {
    
                      header("Location: knowyourstatus.php");
                    }
                    else{
                ?>

            <p>An OTP will be sent to your Email Address for verification</p><br>
            <p><input class="form-control" type="email" id="email" placeholder="Enter your Email-Id" name="email" required></p>
            <button type="submit" name="submit_email" id="searchbtn" class="btn btn-primary ms-lg-3">Get OTP</button>
            <?php
                 }
            ?>
            </div>
          </form>
        </div>
    </div>
</div>
<!----//HERO---------->
</body>
</html>