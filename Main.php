<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/styleMain.css">
  
</head>
 <style>
  h1{
    font-family:  Georgia, serif;
    font-size: 55px;   
   }
   .p1 {
    font-family: "Times New Roman", Times, serif;
    text-align: center;
   }
</style>
<body>

<header class= "header">
<nav class="navbar navbar-expand-sm  navbar-light fixed-top ">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="image/LOGO_PROJECT.png" style="width: 100px;" alt="logo">
        </a>
        <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>

     <!-- Dropdown -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Product
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="product.php">Camelback Sofa</a>
        <a class="dropdown-item" href="product2.php">Cabriolw Sofa</a>
      </div>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="index.php">Log out</a>
      </div>
    </li>
  </ul>
</nav>
</header>  

<div class="row" style="margin-top: 100px;">
  <div class="col-md-6">
    <div class="Sentence">
      <h1 class="text-center" style="margin-top: 200px;">Make your interior more classical</h1>
      <p class="p1">The living mod make you want to spend more time in it.</p>
    </div>
  </div>
  <div class="col-md-6">
    <div class="container-sm carousel-fill">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner " style="margin-top: 50px;">
          <div class="carousel-item active">
            <img src="image/MainSample1.jpg" alt="Sample 1" width="1440" height="900">

          </div>

          <div class="carousel-item">
            <img src="image/MainSample2.jpg" alt="Sample 2" width="1440" height="900">
          </div>
          <div class="carousel-item">
            <img src="image/MainSample.jpg" alt="Sample 3" width="1440" height="900">
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</div>
</body>
</html>
