<?php
// extract($_POST);
// echo $_POST;
include("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneNum = $_POST['phoneNum'];
$address= $_POST['address'];

    $sql = mysqli_query($con, "SELECT * FROM user where email='$email'");
    if (mysqli_num_rows($sql) > 0) {
        // echo "Email Already Exists";
        header("Location: Register.php?");
    } else {
        $_SESSION['save'] = ($_POST['save']);
        $sql = mysqli_query($con, "INSERT INTO `user` (`userID`, `email`, `password`, `address`, `phoneNum`, `name`) VALUES (NULL, '$email', '$password', '$address', '$phoneNum', '$name')");
        if ($sql) {
            // echo "Registration Successful";
            header("Location: login.php?status=success");
        } else {
            // echo "Registration Failed";
            header("Location: Register.php?status=failed");
        }
    }
mysqli_close($con);
