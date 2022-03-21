
<?php
include 'config.php';


session_start();

if(isset($_POST['submit'])){
   
    $fname=$_SESSION['firstname']=$_POST['firstname'];
    $mname=$_SESSION['middlename']=$_POST['middlename'];
    $lname=$_SESSION['lastname']=$_POST['lastname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $emailadd=$_SESSION['email']=$_POST['emailadd'];
    $address=$_POST['address'];
    $aadhaar=$_SESSION['aadhaar']=$_POST['aadhaar'];
    $vaccineused=$_SESSION['vaccineused']=$_POST['vaccineused'];
    $vaccinationtype=$_SESSION['vaccinationtype']=$_POST['vaccinationtype'];
    $dateofvaccination=$_SESSION['dateofvaccination']=$_POST['dateofvaccination'];
    $vaccinatedby=$_POST['vaccinatedby'];
    $status=$_SESSION['status']=$_POST['status'];
    $vaccinelocation=$_POST['vaccinelocation'];
    $remark=$_POST['remark'];

        $sqli="SELECT * FROM user WHERE email='$emailadd'";
        $result=mysqli_query($conn,$sqli);
        if(mysqli_num_rows($result)>0){

            //$date=$dateofvaccination;
            //date_add($date,date_interval_create_from_date_string("45 days"));
            //$newDate=date_format($date,"Y-m-d");
            $date=date_create("$dateofvaccination");
            date_add($date,date_interval_create_from_date_string("45 days"));
            $newDate=date_format($date,"Y-m-d");

            $sqli="INSERT INTO registration(firstname, middlename, lastname, gender, dob, contact, emailadd , address,aadhaar, vaccineused, vaccinationtype, dateofvaccination, dose2, vaccinatedby, status, vaccinelocation, remark)
            VALUES('$fname','$mname','$lname','$gender','$dob','$contact','$emailadd','$address','$aadhaar','$vaccineused','$vaccinationtype','$dateofvaccination','$newDate' ,'$vaccinatedby','$status','$vaccinelocation','$remark')";

            $result=mysqli_query($conn,$sqli);

                if($result){
                    
                    $fname="";
                    $mname="";
                    $lname="";
                    $gender="";
                    $dob="";
                    $contact="";
                    $emailadd="";
                    $address="";
                    $aadhaar="";
                    $vaccineused="";
                    $vaccinationtype="";
                    $newDate="";
                    $dateofvaccination="";
                    $vaccinatedby="";
                    $status="";
                    $vaccinelocation="";
                    $remark="";    
                    echo "<script>window.alert('User Successfully Registered.')</script>";
                    header("Location: main.php");
                }
                else{
                        echo "<script>window.alert('Woops! Something Wrong Went.')</script>";
                    }
        }else{
            echo "<script>window.alert('Sorry Registered Email Address is Wrong.')</script>";  
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
    <link rel="stylesheet" href="../css/styledash.css">
    

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
             <a href="main.php" class="btn btn-primary ms-lg-3">Logout</a>
          </div>
        </div>
  </nav>
<!-----//NAVBAR------>

 <!----HERO---------->
 <div class="vero vh-10 text-center py-3">
    <div class="container">
        <div class=" text-align-center">
        <h1>Registration Form</h1>
        <p>Fill in this form the required details.</p><br>
        </div>
    </div>
</div>
<!----//HERO---------->

<div class="container">
    <div class="row">
        <form class="form-inline" action="" method="POST">
        <div class="row">
            <div class="form-group">
            <label for="fname">First Name:<i class="star">*</i></label>
            <input type="text" class="form-control" id="fname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:<i class="star">*</i></label>   
                <input type="text" class="form-control" id="mname" name="middlename" required >
            </div>  
            <div class="form-group">
                <label for="lname">Last Name:<i class="star">*</i></label>    
                <input type="text" class="form-control" id="lname" name="lastname" required>
            </div>
        </div>
        
        <div class="row">
        <div class="form-group"> 
            <label for="gender">Gender:<i class="star">*</i></label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="Select">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group"> 
            <label for="number">Contact No:<i class="star">*</i></label>          
            <input class="form-control" type="text" id="number" name="contact" required>
        </div>
        <div class="form-group">     
            <label for="dob">Date of Birth:<i class="star">*</i></label>    
            <input class="form-control" type="date" id="dob" placeholder="dd-mm-yyyy" name="dob" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group"> 
            <label for="email">Registered Email Id:<i class="star">*</i></label>
            <input class="form-control" type="email" id="email" name="emailadd" required>
        </div>
        </div>
        <div class="row">
        <div class="form-group"> 
            <label for="textarea">Address:<i class="star">*</i></label>
            <textarea class="form-control" id="textarea" rows="8" name="address" required></textarea>
        </div>
        <div class="form-group"> 
            <label for="aadhaar">Aadhaar No(UINo):<i class="star">*</i></label>
            <input class="form-control" type="text" id="aadhaar" name="aadhaar" required>
        </div>
        </div>
                    
        <br><br>
        <div class="row">
        <div class="form-group"> 
            <label for="vaccineused">Vaccine Used:<i class="star">*</i></label>
            <select class="form-control" id="vaccineused" name="vaccineused" required>
                        <option value="select">Select</option>
                        <option value="Not Vaccinated">Not Vaccinated</option>
                        <option value="covishield">Covishield</option>
                        <option value="covaxin">Covaxin</option>
            </select>
        </div>
        <div class="form-group">  
            <label for="vaccinetype">Vaccination Type:<i class="star">*</i></label>        
            <select class="form-control" id="vaccinetype" name="vaccinationtype" required>
                        <option value="select">Select</option>
                        <option value="Not Vaccinated">Not Vaccinated</option>
                        <option value="1st Dose">1st Dose</option>
                        <option value="2nd Dose">2nd Dose</option>
            </select>
        </div> 
        </div>
        <div class="row">
        <div class="form-group">     
            <label for="date">Date of 1st Vaccination:<i class="star"></i></label>    
            <input class="form-control" type="date" id="date" placeholder="dd-mm-yyyy" name="dateofvaccination" >
        </div>
        </div>
        <div class="row">
        <div class="form-group">     
            <label for="status">Status:<i class="star">*</i></label>    
            <select class="form-control" id="status" name="status" required>
                        <option value="select">Select</option>
                        <option value="Not Vaccinated">Not Vaccinated</option>
                        <option value="Partially Vaccinated">Partially Vaccinated</option>
                        <option value="Fully Vaccinated">Fully Vaccinated</option>
                </select>
        </div>
        <div class="form-group"> 
            <label for="vaccinatedby">Vaccinated By:</label> 
            <input class="form-control" type="text" id="vaccinatedby" name="vaccinatedby" >
        </div>
        <div class="form-group"> 
            <label for="vaccinelocation">Vaccine Location:<i class="star"></i></label>        
                <textarea class="form-control" id="vaccinelocation" name="vaccinelocation" ></textarea>
        
        </div>
        </div>
        <div class="form-group"> 
            <label for="textarea">Remark:</label>
            <textarea class="form-control" id="textarea" rows="5" cols="2" name="remark"></textarea>
        </div>
        <br><br>
        <div class="row">
        <div class="button"> 
            
                    <button class="btn btn-primary ms-lg-3" type="submit" name="submit">Submit</button>
                    <button class="btn btn-primary ms-lg-3" type="reset">Cancel</button>
        </div>
        </div>
    </div>

    </form>
    </div>
</div>
</body>

</html>