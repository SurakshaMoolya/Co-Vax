
<?php
include 'sharingbuttons.php';
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
          </div></a>
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
            
              <div class="badgeFV">
                <img class="text-center" src="../img/Fullvaccine.png" height="200px" width="250px">
                <h6>
                    Fully Vaccinated!
                </h6>
                <br>
              </div>
              <p>Our aim is to make India COVID-19 free.
                  Join us to win this battle at #CoVAX</p><br>
          </div>
          <?php
            showSharer("http://localhost/New_Project/Fully.php", "I got my Fully Vaccinated Batch!");
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>