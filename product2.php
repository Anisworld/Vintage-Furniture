<?php

session_start();

require_once ('CreateDb.php');
require_once ('component.php');


// create instance of Createdb class
$database = new CreateDb("2g", "product2");

if (isset($_POST['add'])){
    /// print_r($_POST['product2_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product2_id");

        if(in_array($_POST['product2_id'], $item_array_id)){
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location = 'product2.php'</script>";
           
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product2_id' => $_POST['product2_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product2_id' => $_POST['product2_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

if (isset($_POST['view'])){
    /// print_r($_POST['product2_id']);
    if(isset($_SESSION['details'])){

        $item_array_id = array_column($_SESSION['details'], "product2_id");

        if(in_array($_POST['product2_id'], $item_array_id)){
            echo "<script>window.location = 'details.php'</script>";
        }else{

            $count = count($_SESSION['details']);
            $item_array = array(
                'product2_id' => $_POST['product2_id']
            );

            $_SESSION['details'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product2_id' => $_POST['product2_id']
        );

        // Create new session variable
        $_SESSION['details'][0] = $item_array;
        print_r($_SESSION['details']);
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
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css(webP_proj).css">
</head>

<style>
  h1,h5{
    font-family:  Georgia, serif;
    font-size: px;   
   }
   .p {
    font-family: "Times New Roman", Times, serif;
    text-align: center;
   }

</style>

<body style="background-color:white;"> 


<?php require_once ("header.php"); ?>
<br>
<h1 class="text-center"> Cabriole Sofa</h1>
<div class="container " >
        <div class="row text-center py-2" >
		
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component2($row['product2_name'], $row['product2_price'], $row['product2_image'], $row['product2ID'], $row['product2_description'] );
                }
            ?>
		
        </div>
		
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
