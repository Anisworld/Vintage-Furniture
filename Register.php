<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'eae') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Email aready exists!</strong>
        </div>';
    } else if ($_GET['status'] == 'failed') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Registration failed ! Please try again</strong>
        </div>';
    } else if ($_GET['status'] == 'mismatch') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Password mismatch ! Please try again</strong>
        </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
</head>
<style>
  body{
    background-image: url('image/firstBG.jpg');
  }
  div.transbox {
    margin-left: 250px;
    background-color: #ffffff;
    border: 1px solid black;
    width: 460px;
    height: 550px;
    opacity: 0.6;
    border-radius: 10px;
  }
  
  div.transbox,p {
    margin: 10%;
    margin-left: 35%;
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
</style>
<body>    
    <!-- <h2>Log in</h2><br>     -->
    <div class ="transbox">  
    <div class="col-md-8 mx-auto">  
    <div class="signup-form"> 
        <form action="registerprocess.php" method="post" enctype="multipart/form-data">
            <h2>Register</h2>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="name"  size= "40" placeholder="name" >
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="form-control" name="email"  placeholder="example@mail.com" >
                 </div>
            </div>
                 <br>
            <div class="col-md-6">
                <div class="form-group">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="form-control" name="password" placeholder="Password" >
                </div>
            </div>
            </div>       
            <br>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone Number<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="phoneNum" size= "25" placeholder="Phone Number" >
            </div>
            <br>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address<br>
            <!-- <input type="text" class="form-control" name="address" placeholder="Address" required="required"> -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="address" class="form-control" cols="30" rows="4" placeholder="Address" ></textarea>
            </div>
            <br>
            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
            <div class="text-center">Already have an account? <a href="login.php">Log in</a></div>
        </form>
    </div> 
</div>
</div>  
</body>    
</html>