<?php
include('session.php');

$query = "SELECT * FROM user";
$result = mysqli_query($con,$query);

if (mysqli_num_rows ($result) >0){
	while ($row = mysqli_fetch_assoc($result)){
		$id = $row['userID'];
		$phoneNum = $row['phoneNum'];
		$address = $row['address'];
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet"  href="CSS/stylepayment.css">   
 
</head>
<script>
$(document).ready(function  () {
    var currentStep, nextStep, previousStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
  
    setProgressBar(current);
  
    $(".next-step").click(function () {
  
        currentStep = $(this).parent();
        nextStep = $(this).parent().next();
  
        $("#progressbar li").eq($("fieldset")
            .index(nextStep)).addClass("active");
  
        nextStep.show();
        currentStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentStep.css({
                    'display': 'none',
                   'position': 'relative'
                });
                nextStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
  
    $(".previous-step").click(function () {
  
        currentStep = $(this).parent();
        previousStep = $(this).parent().prev();
  
        $("#progressbar li").eq($("fieldset")
            .index(currentStep)).removeClass("active");
  
        previousStep.show();
  
        currentStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
  
    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
  
    $(".submit").click(function () {
        return false;
    })
});

$(document).ready(function () {
    $("#address-icon").click(function  () {
        $("#address-popup").show();
    });
    //address Form validation on click event
    $("#address-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var phonenum = $("#phonenum").val();
        var address = $("#address").val();

        if (phonenum == "") {
            $("#phonenum-info").html("required.");
            $("#phonenum").addClass("input-error");
        }
        if (address == "") {
            $("#address-info").html("required.");
            $("#address").addClass("input-error");
            valid = false;
        }
        return valid;

    });
});
</script>
<body>

 <!-- header -->
   <div class="banner">
		<div class="navbar">
            <img src="image/LOGO_PROJECT.png" style="width: 100px;" alt="logo">
			<ul style="margin-right:5px";>
				<li><a href ="Main.php">Home</a></li>
				<li><a href ="#">Product</a>
					<div class="dropdown-menu">
						<a href="product.php">Camelback Sofa</a>
						<a href="product2.php">Cabriole Sofa</a>				
				<li><a href ="#">Account</a>
					<div class="dropdown-menu">
						<a href="profile.php">Profile</a>
						<a href="index.php">Log out</a>
					
					</div></li>
				<li style="padding-left:215%"><a href ="cart.php"><img src="image/cart.png" style="width: 25px;" alt="logo"></a></li>
			</ul>
		</div>
	</div>
	</div>

    <div class="container">
        <div class="row justify-content-center">
                <form id="form">
                    <ul id="progressbar">
                        <li class="active" id="step1" style="color: black">Shipping Method</li>
                        <li id="step2" style="color: black">Payment Method</li>
                        <li id="step3" style="color: black">Order Complete</li>
                    </ul>
					<!--Shipping method-->
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div> <br>
                    <fieldset>
                        <h2>Shipping Method</h2>
						<center><small>Below is the shipping address where the items will be shipped to</center></small>
							<br>
							<table>
								<tr>
								<td></td>
								<td></td>
								<td> 
<!--Edit-->		
						
	    <div id="address-icon">
        <a href="editpayment.php"> <img src="image/edit.png" alt="address" height="25" width="25">
    </div>
	<div id="address-popup" style="background:#F4ECB8" style="width:50px" >
        <form class="address-form" style="width:50" action="payment.php" id="address-form"
            method="post" enctype="multipart/form-data">
		</form>
    </div>

       
</td>
							
	
								
								<tr>
								<div class="address">
									<td><img src="image/location.png" alt="edit" width="20px" height="20px"></td>
									<td><?php echo $address; ?></td>
								</tr>
								<tr>
									<td><img src="image/phone.png" alt="edit" width="15px" height="15px"></td>
									<td>+60<?php echo $phoneNum; ?></td>
								</tr>
								</div>
							</table>

                            <input type="button" name="next-step" 
                                class="next-step" value="Next Step" />
                        </fieldset>
						<!--payment method-->
                        <fieldset>
                            <h2>Payment Method</h2>
							<center><small>Select below available payment methods. All payment methods are secure and encrypted.</small></center>
							<br>
						<div class="grid-container">
							<div class="item2" style="width:50%">
							<div class="dropdown">
								<center><strong>Online Banking</strong>
								<p>Pay with your Online Banking</p>
								<br>
								<p>You will be redirected to selected bank website or wallet to complete the payment.</p>
									</center><br>
									
										<button>Choose Here</button>
											<div class="dropdown-content">
												<a href="https://www.maybank2u.com.my/home/m2u/common/login.do">Maybank2u</a>
												<a href="https://www.bankislam.biz/">Bank Islam</a>
												<a href="https://www.cimbclicks.com.my/clicks/#/">Cimb Clicks</a>
												<a href="https://ambank.amonline.com.my/web/">Ambank</a>
											</div>
							</div>
							</div>
									<div class="item3"><center><strong>Bank Transfer/Bank In</strong></center>
										<p>Bank Name: Maybank<br>
											Account Name: Living Mood<br>
											Account Number: 5623 9351 2522</p>
											<br>
												<form >
													<label for="myfile">Upload payment slip here</label>
														<input type="file" id="myfile" name="myfile">
														</input>
												</form>
									</div> 
						</div>
                            <input type="button" name="next-step" class="next-step" value="Next Step" />
                            <input type="button" name="previous-step" class="previous-step" value="Previous Step" />
                        </fieldset>
						
						<!--done-->
						
                        <fieldset>
                            <div class="finish">
                                <h2 class="text text-center">
                                    <strong>Confirm Order</strong>
                                </h2>
								<br>
									<img src="image/right.png" alt="edit" width="100px" height="100px">
								<h2>THANK YOU FOR SHOPPING WITH US</h2>
								<div class="button-home">
								<input type="button" onclick='window.location = "Main.php"' name="next-step" class="next-step" value="Continue Shopping">
                            </div>
                            
                        </fieldset>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>