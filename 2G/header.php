
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #F4ECB8;">
        <a href="index.php" class="navbar-brand">
             
        </a>
        
        <a class="navbar-brand" href="#">
            <img src="image/LOGO_PROJECT.png" style="width: 100px;" alt="logo">
        </a>
        <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Main.php" style="padding-left:40%">Home</a>
    </li>

     <!-- Dropdown -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="padding-left:60%">
        Product
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="product.php">Camelback Sofa</a>
        <a class="dropdown-item" href="product2.php">Cabriolw Sofa</a>
      </div>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="padding-left:90%">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="index.php">Log out</a>
      </div>
    </li>
  </ul>
  
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                    
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    
                

        
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






