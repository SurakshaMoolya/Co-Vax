
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="new_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}

?>