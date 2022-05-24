<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.navbar-nav{
    margin-right: 10px;
}
div.container
{
  background-color:#F4ECB8;
  /* width: 650px; */
  /* height: 350px;  */ 
  margin-left: 250px;
  border-radius: 0.80rem;
}
h1{
  font-family:  Georgia, serif;
  font-size: 70px;   
  margin-left: 70px;
  margin-top: 70px;
}
</style>
<body>
<?php
// include("config.php");
include('session.php');
include ('header.php');

$email = $_SESSION['login_user'];
$query = "SELECT * FROM user";
$result = mysqli_query($con,$query);
 if (mysqli_num_rows($result)> 0){ 
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $id = $row["userID"];
    $name = $row["name"];
    $email = $row["email"]; 
    $password = $row["password"]; 
    $phoneNum = $row["phoneNum"]; 
    $address = $row["address"];
?>
<?php
    }
} 
else {
     echo "0 results";
}
?> 
<div class="row" style="margin-top: 30px, margin-bottom: 10px;">
  <div class="col-md-3">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Upload profile image</a>
    <!-- to upload image  -->
    <?php
      $imgql = mysqli_query($con, "SELECT * FROM profileimg where email = '$email'");
      $rowi  = mysqli_fetch_array($imgql);
    ?>
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rowi['images']); ?>" height="200px" width="200px" class="rounded-circle" />
  </div>
  <div class="col md-9">
    <h1>User Profile</h1>
  </div>
</div>

<div class="row" style="margin-top: 30px;">
  <div class="col-md-6">
    <div class="container"> 
      <!-- <h1>User Profile</h1> -->
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           :<?php echo $name; ?><br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           :<?php echo $email; ?><br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       :<?php echo $password; ?> <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone number  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    : <?php echo $phoneNum; ?><br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        : <?php echo $address; ?><br>
      <br>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-body">
               <form name="frmImage" enctype="multipart/form-data" action="upload.php" method="post" class="frmImageUpload">
                  <label>Upload Image File: (only jpg, jpeg, gif and png is allowed)</label><br />
                  <input name="image" type="file" class="inputFile" />
                  <input type="submit" value="Upload profile image" class="btn btn-success" name="submit" />
               </form>
                 <!-- <p>Some text in the modal.</p> -->
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
    </div>
   </div>
</div>
</body>
</html>
