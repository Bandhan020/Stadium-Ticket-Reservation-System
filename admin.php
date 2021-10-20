<?php
	session_start();
	include('connect.php');
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Admin log in Page</title>
		<link rel="stylesheet" href="styles/login.css"/>
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
			<li><a href="signup.php">Sign Up</a></li>
			<li><a class="active" href="">Admin Panel</a></li>
			<li><a href="admin.php">Events</a></li>
			<li><a href="">Buy Tickets</a></li>
			<li><a href="login.php">Log in</a></li>
		</ul>
	</div>
		<div class="login">
		<div class="wrapper">
			<h1 align="center">Admin Log In</h1>
			<div class="formDiv">
			<form method="post" action="" enctype="multipart/form-data">
			
				<label>Admin Name</label><br/>
				<input type="text" name="name" placeholder="Name" required  /><br/><br/>
				<label>Password:</label><br/>
				<input type="password" name="password" placeholder="********" required /><br/><br/>
				<input type="submit" name="submit" />
				
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

<?php

if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$password = $_POST['password'];
		
		$check = "SELECT * FROM admin WHERE admin_name = '$name' AND password = '$password'";
		$result = mysqli_query($con, $check);
		$row=mysqli_fetch_assoc($result);
		
		if(mysqli_num_rows($result) == 1) {
			$_SESSION['admin_id'] = $row['admin_id'];
			echo "<script>alert('Successful!!!')</script>";
			echo "<script>window.open('adminoption.php','_self')</script>";
		}
		else {
			echo "<script>alert('Account Invalid........')</script>";
			}
	}
?>