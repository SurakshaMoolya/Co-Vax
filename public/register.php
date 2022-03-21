
<?php
include 'config.php';

session_start();
error_reporting(0);




if(isset($_POST['submit'])){
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $cpassword= md5($_POST['cpassword']);

    if($password == $cpassword){
               $sql="SELECT * FROM user WHERE email='$email'";
               $result=mysqli_query($conn,$sql);
               
        if(!mysqli_num_rows($result)>0){

               $sql= "INSERT INTO user(fullname, email, password)
               VALUES ('$fullname','$email','$password')";

               $result=mysqli_query($conn,$sql);

               if($result){
                            echo "<script>alert('Wow! User Registeration Completed.')</script>";
                            $fullname="";
                            $email="";
                            $_POST['password']="";
                            $_POST['cpassword']="";
                            header("Location: dashboard.php");
                            }
                            
               else{
                      echo "<script>alert('Woops! Something Wrong Went.')</script>";
                   }
    }else{
        echo "<script>alert('Email Already Exists.')</script>";
        }
        

}else{
    echo "<script>alert('Password Not Matched.')</script>";
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
            <a href="covaxapp.php" class="btn btn-primary ms-lg-3">Login</a>
            <a href="main.php" class="btn btn-primary ms-lg-3">Back</a>
          </div>
        </div>
      </nav>
<!-----//NAVBAR------>

 <!----HERO---------->
 <div class="vero vh-10 text-center py-3">
    <div class="container">
        <div class=" text-align-center">
        <form action="" method="post">
            <div class="block-center-nvc">
            <img class="text-center" height="170" width="200" src="https://selfregistration.cowin.gov.in/assets/images/login-screen.svg">
            <h2>Register Or Sign In for Vaccination</h2><br>
            <p><input class="form-control" type="text" placeholder="Full name" name="fullname" value="<?php echo $_POST['fullname']; ?>" required></p>
            <p><input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $_POST['email']; ?>" required></p>
            <p><input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required></p>
            <p><input class="form-control" type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required></p>
            <button type="submit" name="submit" id="searchbtn" class="btn btn-primary ms-lg-3">Submit</button>
            </div>
          </form>
        </div>
    </div>
</div>
<!----//HERO---------->
</body>

</html>