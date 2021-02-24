<?php
$con = mysqli_connect("208.91.198.197:3306","Phasor","admin@12345!","Phasor");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>