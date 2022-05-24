<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login </title>
    <link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<style>
  body{
    background-image: url('image/firstBG.jpg');
  }
  p .error{
    margin:0;
  }
  div.transbox {
    margin-left: 250px;
    background-color: #ffffff;
    border: 1px solid black;
    width: 400px;
    height: 400px;
    opacity: 0.6;
    border-radius: 10px;
  }
  
  div.transbox {
    margin: 10%;
    margin-left: 40%;
    font-weight: bold;
    color: #000000;
  }
  h2{
      text-align: center;
      font-size: 45px;
  }
  button{
      margin-left: 40%;
  }
  a:link {
    text-decoration: none;
    color:#000000;
  }
  
  a:visited {
    text-decoration: none;
    color:#000000;
  }
  
  a:hover {
    text-decoration: underline;
    color:#cc9900;
  }
  
  a:active {
    text-decoration: underline;
  }
  button:hover{
    background-color: grey;
    border-radius: 10px;
    height: 30px;
  }
  p{
    color:#ffffff;
  }
</style>
<body>    
    <div class ="transbox">    
    <form id="login" method="post" >  
     <h2>Log in</h2><br>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Email<br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="form-control" name="email" size= "25" placeholder="Email">
           </div>
            <br>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password<br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="form-control" name="password"  size= "25" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
            <center>
            <input type="submit" name="submit"  size= "15" value="login" ></td>
            </div></center>
            <div class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account? <a href="register.php">Register Here</a></div>   
    </form> 
    <br>
    <?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($_POST['email'])) {
        // echo "<script>alert('Please enter your Email!!');window.location.href='login.php'</script>";
         echo "<span style='color:#ed4337; font-size:17px; display:block'>Email is requried</span>";
    }
    else if(empty($_POST["password"])) {
        // echo "<script>alert('password is required 6 character');window.location.href='login.php'</script>";
         echo  "<span style='color:#ed4337; font-size:17px; display:block'>Password is required</span>";

    }
    else{
    $query="SELECT * FROM `user` WHERE email = '$email' limit 1";
    $result=mysqli_query($con, $query);

    if($result)
    {
    if($result && mysqli_num_rows($result)>0)
     {
        $user_data=mysqli_fetch_assoc($result);
        if($user_data['password']==$password && $user_data['email']=='admin@gmail.com'){
          header("Location: admin.php");
            die;
        }
         if($user_data['password']==$password) 
        {
            $_SESSION['login_user'] = $user_data['email'];
            header("Location: Main.php");
            die;
        }
        else {
          echo "<span style='color:#ed4337; font-size:17px; display:block'>Password is invalid</span>";
        }

     }
    }
    echo "<span style='color:#ed4337; font-size:17px; display:block'>Email is invalid</span>";
    }
}
?>   
    </div>   
</body>    
</html>