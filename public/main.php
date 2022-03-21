<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    

    <title>main</title>
  </head>
  <body>
    
<!----NAVBAR---------->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
          <div class="sidebar-brand">
            <h2 class="logo"><span class="lab la-envira"></span>Co-VAX</h2>
          </div></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="https://healthid.ndhm.gov.in/">ABHA (Health ID)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#getvaccinated">Get Vaccinated</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#certificate">Verify Certificate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nvc">Search NVC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#precautions">Precautions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#partners">Partners</a>
              </li>
              
            </ul>
            <a href="register.php" class="btn btn-primary ms-lg-3">Register/Sign In</a>
            
            <?php
            if(!empty($_SESSION['email'])){
            ?>
            <a href="logout.php" class="btn btn-primary ms-lg-3">Logout</a>
            <?php
            }else{
            ?>
            <a href="login.php" class="btn btn-primary ms-lg-3">Login</a>
            <?php }
            ?>
          </div>
        </div>
      </nav>
<!----//NAVBAR---------->

  <!----HERO---------->
      <div class="hero vh-100 d-flex align-items-center">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7">
                    <h1 class="display-5">"India is set to defeat Covid-19.
                      Every Indian is making it possible."</h1>
                        <p class="display-7 text-black">- PM Narendra Modi</p>
                  </div>
              </div>
          </div>
      </div>
      <!----//HERO---------->


<!----SECTION---------->
<section id="getvaccinated">
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto text-center">
              <h2 class="text">Get Vaccinated in 3 Easy Steps</h2>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
            <div class="iconbox card-effect">
                <i class="bx bxs-comment-detail"></i>
            </div>
          <h5 class="col-md-8 mx-auto text-center">Step 1</h5>
          <div class="steps">
            <div class="steps-block text-center">
              <a href="https://prod-cdn.preprod.co-vin.in/assets/pdf/User_Guide_Citizen_registration_15%2BandPrecaution.pdf">
                <img src="https://www.cowin.gov.in/assets/images/Step_1.svg"></img>
                <p class="text-white text-center">_____________________________________</p>
                <p class="text-white text-center">Book an Appointment on Co-VAX or Walk into any Vaccination Center</p>
                <p class="text-white text-center">_____________________________________</p>
                <p class="text-white text-center">How to Book Your Appointment on Co-VAX?</p>
                <p class="text-white text-center">_____________________________________</p>
              </a>
            </div>
          </div>
          
        </div>

        <div class="col-lg-4">
          <div class="iconbox card-effect">
              <i class="bx bxs-comment-detail"></i>
          </div>
          <h5 class="col-md-8 mx-auto text-center">Step 2</h5>
          <div class="steps">
            <div class="steps-block text-center">
              <a href="https://prod-cdn.preprod.co-vin.in/assets/pdf/Dos_and_Donts_for_Citizens.pdf">
                <img class="align-items-center" src="https://www.cowin.gov.in/assets/images/Step_2.svg"></img>
                <p class="text-white text-center">_____________________________________</p>
                <p align="center" class="text-white">Get your Vaccination safely at the Time of your Appointment.</p>
                <p class="text-white text-center">_____________________________________</p>
                <p class="text-white text-center">Dos And Don'ts for Getting Vaccinated.</p>
                <p class="text-white text-center">_____________________________________</p>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="iconbox card-effect">
              <i class="bx bxs-comment-detail"></i>
          </div>
          <h5 class="col-md-8 mx-auto text-center">Step 3</h5>
          <div class="steps">
            <div class="steps-block text-center">
            <a href="https://selfregistration.cowin.gov.in/">
                <img src="https://www.cowin.gov.in/assets/images/Step_3.svg"></img>
                <p class="text-white text-center">_____________________________________</p>
                <p align="center" class="text-white">Download Your Vaccination Certificate from Co-VAX and wait for Dose #2</p>
                <p class="text-white text-center">_____________________________________</p>
                <p class="text-white text-center">Download Your Vaccine Certificate</p>
                <p class="text-white text-center">_____________________________________</p>
            </a>
            </div>
          </div>
        </div>
      </div>
            
  </div>
</section>
<!----//Get Vaccinated---------->

<!----SECTION---------->
<section id="certificate">
  <div class="container">
    <div class="block text-center">
        <img src="https://verify.cowin.gov.in/static/media/verify-certificate.29230f43.png">
        <h3 class="text-center">Verify a Vaccination Certificate</h3>
    </div>
    <div class="mt-5 p-4 mb-5 container">
        <p>The Co-VAX vaccination certificate has a digitally signed secure QR code. This can be authenticated online using the verification utility in this portal or using third party verification app using the services outlined below.</p>
        <h6 style="color: rgba(100, 109, 130);">Option 1 – Online verification</h6>
        <p style="color: rgba(100, 109, 130);">Steps for online verification:</p>
        <ol class="verify-steps">
            <li>
                "Visit Governments Official Site "<a href="https://verify.cowin.gov.in/">https://verify.cowin.gov.in//</a>
            </li>
            <li>
                Click on <b>"Scan QR"</b> code
            </li>
            <li>
                A notification will prompt to activate your device’s camera
            </li>
            <li>
                Point the camera to the QR code on the bottom right of the certificate issued and scan
            </li>
            <li>
                Please keep the following points in mind while scanning the QR code
            <ul class="success-verify">
                <li>QR code should cover at-least 70%-80% of screen</li>
                <li>Complete QR code should be part of camera frame</li>
                <li>QR code should be parallel to the camera</li>
                <li>Camera should be hold steadily for at-least 5 sec</li>
            </ul></li>
           <li> If camera is unable to read the QR code within 45 seconds, a message - <b>"Camera is not able to read the QR code, please try again"</b> with a try again button will be displayed. Verifier will be required to scan the QR code again following the instructions mentioned in Step 2.
           <li>On successful verification, following attributes are displayed on the screen:</li>
              <ul class="success-verify">
                <li>Message <b>"Certificate Successfully Verified"</b></li>
                <li>Name</li>
                <li>Age</li>
                <li>Gender</li>
                <li>Certificate ID</li>
                <li>Beneficiary ID</li>
                <li>Vaccine Name</li>
                <li>Date of Dose</li>
                <li>Vaccination Status</li>
                <li>Vaccination at</li>
            </ul>
            </li>
            <li>In case of an unsuccessful verification if the certificate is not genuine, screen will show the message <b>“Certificate Invalid”</b></li>
        </ol>
        <hr style="margin-top: 3rem; margin-bottom:3rem">
        
        <h6 style="color: rgba(100, 109, 130);">Option 1 – Offline verification through third party verifier app</h6>
        <p style="color: rgba(100, 109, 130);">Steps for offline verification:</p>
        <ol class="verify-steps">
            <li>Access the Co-WIN verification service and code for set up <a href="https://github.com/egovernments/DIVOC/tree/india/verification">here.</a></li>
            <li>Get code snippet for reference and implement</li>
            <li>Replace the public key used in code snippet with Public key available</li>
            <li>Implement the verification service in your apps to scan, read and validate Co-WIN certificates</li>
        
        </div>
</div>
</section>
<!----//SECTION---------->

<!----NEAREST VACCINATION---------->
<section id="nvc">
<div class="container">
  <div class="block text-center">
    <h2>Search Your Nearest Vaccination Center</h2><br>
    <p>Get a preview list of the nearest centers and check availability of vaccination slots</p>
    <h6><a href="covaxapp.php">Login to book your slot</a></h6><br>
 
    <div class="form-group">
      <div class="block-center-nvc"><br><br>
        <div class="row">
          <br><br>
          <label for="pin">Search by PIN:</label>
          <input class="form-control" id="pin" type="number" maxlength="6" minlength="6" placeholder="Enter PIN" name="pin">
        </div><br>
        <button type="button" name="button" id="searchbtn" class="btn btn-primary ms-lg-3">Search</button>
        <br><br>
        <div class="table">
          <table class="realtable" id="sessions">
            <thead>
              
            </thead>
            <tbody>
  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>    
 

<script>
    let today, d, m, y;
    today = new Date();
    d = today.getDate();
    m = today.getMonth() + 1;
    y = today.getFullYear();
    today = `${d}-${m}-${y}`;
  $(document).ready(function(){
    $("button").click(function(){
      var pin=$('#pin').val();
      if (pin==''|| pin==undefined){
        alert("Please Enter Pincode.")
      }
      $.get("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode="+pin+"&date="+today+"", function(data, status){
       {
          var result=[];
          result=data.sessions;
          console.log(result);
          $('#sessions thead').append('<tr class="child"><th>No.</th><th>Name</th><th>Address</th><th>Vaccine</th><th>Fee Type</th><th>Minimum Age Limit</th><th>Maximum Age Limit</th><th>Available Capacity</th><th>Slots</th></tr>');
          if (result!==[]){
            
            for(var i=0; i<result.length; i++){
              var resultData={};
              resultData=result[i];
              console.log(resultData);
              $('#sessions tbody').append('<tr class="child"><td>'+[i+1]+'</td><td>'+result[i].name+'</td><td>'+result[i].address+'</td><td>'+result[i].vaccine+'</td><td>'+result[i].fee_type+'</td><td>'+result[i].min_age_limit+'</td><td>'+result[i].max_age_limit+'</td><td>'+result[i].available_capacity+'</td><td>'+result[i].slots+'</td></tr>');
            }
          } 
          if(result.length === 0){
          alert("Sorry! No Vaccinations Available in this Sector.")
        }
        result = [];
        }
      });
    });
  });
</script>

</section>
<!----//NEAREST VACCINATION---------->


<!----Precautions---------->
<section id="precautions">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-7">
        <h3>Precaution Dose and Children Vaccination</h3><br>
        <p>Protect our Senior Citizens and Children. Precaution Dose is available for fully vaccinated HCW/FLW and Senior Citizens (60+ yrs) after 39 weeks from the 2nd dose. Citizens aged 60 years or more and having co-morbidities, should take precaution dose, only after medical advice. Also, getting your Children(15-18 yrs) vaccinated is the best thing you can do to protect your child against COVID-19. Both online and walk-in are available.</p>
        <a href="slotverification.php" class="btn btn-primary ms-lg-3">Book Your Slot</a>
      </div>
      <div class="col-md-5 col-lg-5">
        <img src="https://www.cowin.gov.in/assets/images/Precaution_dose.svg" alt="image">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 col-lg-6">
        <img src="https://www.cowin.gov.in/assets/images/share_illustration.svg" alt="image">
      </div>
      <div class="col-md-7 col-lg-6">
        <h3>Share Your Vaccination Status</h3><br>
        <p>Be a Fighter! If you are fully or partially vaccinated, you can now share your vaccination status in your social circle. Let's encourage our friends and followers in joining India's battle against COVID-19.</p>
        <a href="status.php" class="btn btn-primary ms-lg-3">Share Your Status</a>
      </div>
    </div>
  </div>
</section>
<!-------//Precautions-->

<!----Partners-------------------->
<section id="partners">
  <div class="container">
    <div class="row text-center">
      <h2>Our Partners</h2>
      <div class="row">
        <div class="col-md-3 p-4">
          <img src="../img/partners_page1.svg" width="300px" height="300px" alt="Partner_Page">
        </div>
        <div class="col-md-9 d-flex align-items-center justify-content-center mb-3">
          <div class="partner-logo-holder">
            <div class="row">
              <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="partner-card">
                  <img src="../img/arogya_setu_logo1.svg"  alt="Arogya-setu" class="imga1">
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="partner-card">
                  <img src="../img/rakasa1.png" alt="Rakasa The Upcoming Brand" class="imga2">
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                <div class="partner-card">
                  <img src="../img/satyamevajayete.png" alt="Satyameva Jayate" class="imga3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<!----/Partners-------------------->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>