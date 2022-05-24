<?php

include ('session.php');

$email = $_SESSION['login_user'];
$query = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query ($con,$query);
$row = mysqli_fetch_array($result);

$phoneNum = $row['phoneNum'];
$address = $row['address'];
		
?>	
<html>
<head>
<title>Edit Payment</title>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 
</head>	
<style>
.body
{
	background:#F4ECB8;
}
.banner{
	width: 100%;		
}
.navbar{
	background: #F4ECB8;
	width: 100%;
	padding:20px 0px;
	position:relative;
	display:flex;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 50px;
	margin-top:10px;
	position: relative;
}
.navbar ul li a{
	text-decoration: none;
	color: black;
}
.dropdown-menu{
	margin: 0 auto;
}
 ul ul{
	position: absolute;
}
.dropdown-menu {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	padding: 12px 16px;
	z-index: 1;
}
.navbar ul li:hover .dropdown-menu {
	display: block;
}
.dropdown-menu a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}
#form .previous-step, .next-step{
    width: 200px;
    font-weight: bold;
    color: white;
    border: 0 none;
	border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
} 
.form, .previous-step {
    background: black;
} 
.form, .next-step {
    background: black;
} 
#form .previous-step:hover,
#form .previous-step:focus {
    background-color: #000000
} 
#form .next-step:hover,
#form .next-step:focus {
    background-color: grey;
} 
</style>

<body>	
   <div class="banner">
		<div class="navbar">
            <img src="image/LOGO_PROJECT.png" style="width: 100px;" alt="logo">
			<ul style="margin-right:5px";>
				<li><a href ="#">Home</a></li>
				<li><a href ="#">Product</a>
					<div class="dropdown-menu">
						<a href="#">Camelback Sofa</a>
						<a href="#">Cabriole Sofa</a>				
				<li><a href ="#">Account</a>
					<div class="dropdown-menu">
						<a href="profile.php">Profile</a>
						<a href="#">Log out</a>
					
					</div></li>
				<li style="padding-left:215%"><a href ="cartpage.html"><img src="image/cart.png" style="width: 25px;" alt="logo"></a></li>
			</ul>
		</div>
	</div>
	</div>
	
<br><br><br><br>

	<center>
        <form class="address-form" action="updatepayment.php" id="address-form"
            method="post" enctype="multipart/form-data">
            <h1>Confirm Address</h1>
			<small>You can now update your account details below.</small>
			<br>
			<br>
			<center>
            <div>
                <div>
                    <label>Phone Number: </label><span id="phonenum"
                        class="info"></span>
                </div>
                <div>
                    <input type="int" id="phonenum" name="phonenum" value="<?php echo $phoneNum ?>" class="inputBox" />
                </div>
            </div>
			<br>
            <div>
                <div>
                    <label>Address: </label><span id="" class="info"></span>
                </div>
                <div>
                    <textarea id="address" name="address" cols="30" rows="4" class="inputBox"><?php echo $address ?></textarea>
                </div>
            </div>
			<br>
            <div>
                <input type="submit" id="save" name="save" value="SAVE" />

				
			</div>
        </form>
		</center>
		</center>
    </div>
	</body>
</html>