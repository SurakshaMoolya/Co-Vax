
<?php
session_start();
include 'config.php';
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
            
            <div class="box">
            <h5>Account Details</h5>
            <p><b>Registered Email:<b>&emsp;<?php echo $_SESSION['email'];?></p>
            <div class="boxlike">
              <?php
              $email=$_SESSION['email'];
              $sqli="SELECT * FROM registration WHERE emailadd='$email'";
              $result=mysqli_query($conn,$sqli);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);
                $fname=$row['firstname'];
                $mname=$row['middlename'];
                $lname=$row['lastname'];
                $status=$row['status'];
                $dob=$row['dob'];
                $vaccinationtype=$row['vaccinationtype'];
              }
             
              ?>

            <h6><?php echo $status;?></h6>
            <hr>
            <h4><?php echo $fname." ".$mname." ".$lname;?></h4>
            <p>Date Of Birth :&emsp;<?php echo $dob;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Photo Id :&emsp;Aadhaar Card</p>
            <hr style="border-top: 2px dotted black">
            <?php
            if($vaccinationtype=="1st Dose"){
            ?>
              <p style="color:green">1st Dose Completed</p>
              <p style="color:red">2nd Dose&emsp;Appointment Not Scheduled&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="slots.php" class="btn btn-primary ms-lg-3">Schedule</a></p>
              
            <?php
            }else if($vaccinationtype=="2nd Dose"){
            ?>
            <p style="color:green">1st Dose Completed</p>
            <p style="color:green">2nd Dose Completed</p>
            <?php
            }else{
            ?>
            <p style="color:red">1st Dose&emsp;Appointment Not Scheduled&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="slots.php" class="btn btn-primary ms-lg-3">Schedule</a></p>
            <?php
            }
            ?>
            </div>
          
          
        </div>
    </div>
</div>
<!----//HERO---------->
</body>
</html>