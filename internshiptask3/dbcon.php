<?php 

  $host  = "localhost";
  $uname = "root";
  $pwd   = "";
  $db    = "internship_db";

  $con   = mysqli_connect("$host","$uname","$pwd","$db");

  if(!$con){
       echo "Connection failed. Please try later";
       die();
  }
?>