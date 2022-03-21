
<?php

include 'config.php';
session_start();
$count="";

  if (!empty($_SESSION['email'])){
    $email=$_SESSION['email'];
    //$sql="SELECT * FROM `registration` WHERE emailadd=".$_SESSION['email']." AND `status`='Partially Vaccinated'";
    $query="SELECT * FROM registration WHERE emailadd='$email' AND status='Partially Vaccinated'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)){
      header("Location: Partially.php");
    }
    else{
      header("Location: Fully.php");
    }
  }else{

?> 
<script>
    alert("Oops! You need to Login");
</script> 

<?php
  }

?>