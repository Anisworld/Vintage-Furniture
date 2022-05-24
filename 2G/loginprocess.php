<?php
session_start();
include("config.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($_POST['email'])) {
        echo "<script>alert('Please enter your Email!!');window.location.href='login.php'</script>";
        // $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";
    }
    else if(strlen($_POST["password"]) < '6') {
        echo "<script>alert('password is required 6 character');window.location.href='login.php'</script>";
        // $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";

    }
    else{
    $query="SELECT * FROM `user` WHERE email = '$email' limit 1";
    $result=mysqli_query($con, $query);

    if($result)
    {
    if($result && mysqli_num_rows($result)>0)
     {
        $user_data=mysqli_fetch_assoc($result);
         if($user_data['password']===$password)
        {
            $_SESSION['email']=$user_data['email'];
            header("Location: menu.php");
            die;
        }
     }
    }
        header("Location: main.html");
        die;
    }
}
?>