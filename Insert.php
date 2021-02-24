<?php
require_once('Configmain.php');


$firstname=$_GET['UName'];
$phone=$_GET['Phoneno'];
$email=$_GET['Email'];
$subject=$_GET['Subject'];
$sql="INSERT INTO `enquire`(`user name`, `phone.no`, `email`, `subject`) VALUES ('$firstname','$phone','$email','$subject')";

$query=mysqli_query($con,$sql);


echo "Thanks for contacting us ";
exit();

?>