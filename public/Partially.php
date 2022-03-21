
<?php

include 'config.php';
include 'notification.php';
include 'sharingbuttons.php';

date_default_timezone_set("Asia/Kolkata");

if(!empty($_SESSION['email'])){
  $email=$_SESSION['email'];
  $sqli="SELECT * FROM registration WHERE emailadd='$email'";
  $result=mysqli_query($conn,$sqli);
  if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);

    $dateofvaccination=$row['dateofvaccination'];

    $date=date_create("$dateofvaccination");
    date_add($date,date_interval_create_from_date_string("45 days"));
    $newDate=date_format($date,"d M Y");
    sendNotification($email,$newDate);

  }
   
  

  $d=date('Y-m-d');
  $sqli="SELECT * FROM registration WHERE DATE_FORMAT(dose2,'%y-%m-%d')=DATE_FORMAT('$d','%y-%m-%d')";
  $result=mysqli_query($conn,$sqli);
  if(mysqli_num_rows($result)>0){
    secondNotification($email);
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
    <link rel="stylesheet" href="../css/sharingbuttons.css">
    

    <title>Know Your Status</title>
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
            <a href="logout.php" class="btn btn-primary ms-lg-3">Logout</a>
          </div>
        </div>
      </nav>
<!-----//NAVBAR------>

 <!----HERO---------->
 <div class="vero vh-10 text-center py-3">
    <div class="container">
      <div class=" text-align-center">
        <div class="main-card">
          <div class="badge-panel">
            
            <div class="badgePV">
                <img class="text-center" src="../img/Partialvaccine.png" height="200px" width="250px">
                <h5>
                  
                   Partially Vaccinated!
                 
                </h5>
                <br>
            </div>
            <p>Our aim is to make India COVID-19 free.
                  Join us to win this battle at #CoVAX</p><br>
            <b>Get READY for your next DOSE.</b>
            <p id="demo"></p>
            
            <script>
              // Set the date we're counting down to
              <?php 
                $email=$_SESSION['email'];
                $sqli="SELECT * FROM registration WHERE emailadd='$email'";
                $result=mysqli_query($conn,$sqli);
                
                $row=mysqli_fetch_assoc($result);

                  $date=$row['dose2'];
                  $Date=date_format($date,"M d, Y"); 
                
                ?>
                var countDownDate = new Date("<?php echo $Date;?>").getTime();

              // Update the count down every 1 second
              var x = setInterval(function() {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Display the result in the element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";

              // If the count down is finished, write some text
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                
              }
              
            }, 1000);
            </script>
            </div>
           
            <?php
            showSharer("http://localhost/New_Project/Partially.php", "I got my Partially Vaccinated Batch!");
            ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>