<?php

	include("connect.php");
	global $con;
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$phn_num = $_POST['phone_number'];
		$password = $_POST['password'];
		
		$insert = "INSERT INTO user(password, Email_id, phone_number) VALUES('$password','$email','$phn_num')";
		$r_insert = mysqli_query($con,$insert);
		
		if($r_insert){
			echo "<script>alert('Information has been inserted.')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<link rel="stylesheet" href="styles/signup.css"/>
	</head>
	
	<body>
		<div class="main">
			<div class="heading">
				<h1>ONLINE STADIUM TICKET RESERVATION</h1>
				</div>
		<div class="header">
			<img src="images/5568312407_9c4bd301a6_b.jpg"/>
			</div>
	<div class="main_menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="signup.php" class="active">Sign Up</a></li>
			<li><a href="admin.php">Admin Panel</a></li>
			<li><a href="admin.php">Events</a></li>
			<li><a href="">Buy Tickets</a></li>
			<li><a href="login.php">Log in</a></li>
		</ul>
	</div>
			<div class="login">
		<div class="wrapper">
			<h1 align="center">Sign Up</h1>
			<div class="formDiv">
			<form method="POST" action="signup.php" enctype="multipart/form-data">
			
			<label>Email id:</label><br/>
			<input type="text" name="email" placeholder="Email" required /><br/><br/>
			<label>Phone Number:</label><br/>
			<input type="text" name="phone_number" placeholder="01*********" required/><br/><br/>
			<label>Password:</label><br/>
			<input type="password" name="password" placeholder="********" required/><br/><br/>
			<input type="submit" name="submit"/>
			
			</form>
			</div>
			</div>
		</div>
		<div class="footer">
		<div class="right"><p align="center">&copy;STR corporation 2017    all rights reserved</p></div>
		<div class="email">
		<h2>Contact us in Email:</h2>
			<p>raihansultan05@gmail.com</p>
			<p>bandhan4020@gmail.com</p>
		</div>
		<div class=""phn">
			<h2>Contact us in Mobile:</h2>
			<p>01760021993</p>
			<p>01777444110</p>
		</div>
		<div class="logo">
		<a href="https://twitter.com"><img src="images/twitter-logo-vector-download.jpg"/></a>
		<a href="https://www.facebook.com"><img src="images/RiAy7yarT.jpeg"/></a>
		</div>
	</div>
		</div>
	</body>
</html>