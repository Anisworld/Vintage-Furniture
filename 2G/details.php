<?php

session_start();

require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("2g", "product");
$db = new CreateDb("2g", "product2");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['details'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['details'][$key]);
              echo "<script>window.location = 'product.php'</script>";
          }
      }
  }
}

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['details'] as $key => $value){
          if($value["product2_id"] == $_GET['id']){
              unset($_SESSION['details'][$key]);
              echo "<script>window.location = 'product2.php'</script>";
          }
      }
  }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<style>
  h2,h5{
    font-family:  Georgia, serif;
    font-size: px;   
   }
   .p1 {
    font-family: "Times New Roman", Times, serif;
    text-align: center;
   }

</style>


<?php require_once ("header.php");?>
<br>

	<body class="bg-light">
       <hr>

		<div class="container-fluid">
			<div class="row px-5">
				<div class="col-md-12">
					<div class="shopping-cart">
						<h5>Product Details</h5>
						<hr>
						

<?php
				
				
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = new CreateDb("2g", "product"); // Selecting Database
//MySQL Query to read data




			
					$total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['details'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $productID){
                                if ($row['productID'] == $productID){
                                    detailsElement($row['product_image'], $row['product_name'],$row['product_price'], $row['productID'], $row['product_description']);
                                    
                                }
                            }
                        }
}else{
}

                ?>
				
				
<?php
				
				
// Establishing Connection with Server
$db = new CreateDb("2g", "product2"); // Selecting Database
//MySQL Query to read data




			
					$total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['details'], 'product2_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $product2ID){
                                if ($row['product2ID'] == $product2ID){
                                    detailsElement2($row['product2_image'], $row['product2_name'],$row['product2_price'], $row['product2ID'], $row['product2_description']);
                                    
                                }
                            }
                        }
}else{
}

                ?>

            </div>
        </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

