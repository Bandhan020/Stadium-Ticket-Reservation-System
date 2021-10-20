<!DOCTYPE>
<?php
	session_start();
	include("functions/functions.php");
?>
<html>
<head>
	<title>Stadium ticket reservation</title>
	
	<link rel="stylesheet" href="styles/style.css" media="all"/>
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
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="">About</a></li>
			<?php
				if(!isset($_SESSION['user_id'])) {
					echo "<li><a href='signup.php'>Sign Up</a></li>";
				}
				else{
					 $sql="SELECT `Email_id` FROM `user` WHERE `user_id`=$_SESSION[user_id]";
					 $result=mysqli_query($con,$sql);
					 $row=mysqli_fetch_assoc($result);
					 $name=$row['Email_id'];
					echo "<li><a href='#'>$name</a></li>";
				}
			?>
			<li><a href="admin.php">Admin Panel</a></li>
			<li><a href="">Events</a></li>
			<?php
				if(!isset($_SESSION['user_id'])) {
					echo "<li><a href='login.php'>Buy Tickets</a></li>";
				}
				else{
					echo "<li><a href='terms.php'>Buy Tickets</a></li>";
				}
			?>
			<?php
				if(!isset($_SESSION['user_id'])) {
					echo "<li><a href='login.php'>Log in</a></li>";
				}
				else{
					echo "<li><a href='logout.php'>Log out</a></li>";
				}
			?>
		</ul>
	</div>
	<div class="slider">
		<img src="images/output_WmQ5sG.gif"/>
	</div>
	<div class="content">
		<div class="sidebar">
			<div class="sidebar_title">Running Events</div>
			<ul>
				<?php
					$get_match = "SELECT * FROM mat";
					$run_match = mysqli_query($con, $get_match);
					
					while($row_match = mysqli_fetch_assoc($run_match)){
						$match_id=$row_match['match_id'];
						$match_title=$row_match['match_title']; ?>
						<li><form action="book.php" method="post"><button type="submit" value="<?php echo $match_id; ?>" name="mat"><?php echo $match_title; ?></button></form></li>;
						<?php } ?>
				</ul>
			<div class="sidebar_title">Stadium</div>
		</div>
		<div class="main_content">
			<div class="para">
			<h1 align="center">Welcome to our Page!!!</h1><br>
			<p>This ia a website for buying tickets of internationatal or domestic sports event
			at your nearest or adjacent stadium throughout the country.We provide 
			you the simplest way to book and buy tickets of any matches occuring in
			our country.So,you can take the chance and get the pleasure to enjoy the
			heat of many historical football and cricket matches and to be a witness
			of all of this.Besides you can be up-to-date with the information about
			upcoming and running sports events through our website. <p><br>
			<h2>Why you have to choose us,because</h2>
			<h2>We are offering you:</h2>
			<ol>
				<li>The simplest way to get tickets of any matches</li>
				<li>Fast point and click service to the customer</li>
				<li>A smooth way to book and buy ticket</li>
				<li>Quick response to your call</li>
				<li>The easiest and convenient payment system</li>
			</ol>
			<div class="img"><img src="images/output_dIzjFF.gif"/></div>
			<p>If you want to buy tickets you have to log in and if you don't have an account then 
			you have to sign up first.We have some terms and policies,before booking a ticket you must
			read them and if you agree with the terms and policies then you should book tickets otherwise not.
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
