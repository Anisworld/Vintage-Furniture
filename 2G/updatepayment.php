<?php

include ('session.php');

extract($_POST);
$email = $login_session;
$phoneNum = $_POST['phonenum'];
$address = $_POST['address'];
 
$query = "UPDATE user SET phoneNum = '$phoneNum', address = '$address' WHERE email = '$email'";

$result = mysqli_query($con,$query);
if($result){
	echo"<script type = 'text/javascript'> window.location='payment.php'</script>";
} else {
	echo "ERROR!";
}
	?>
