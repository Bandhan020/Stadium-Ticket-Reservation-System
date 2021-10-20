<html>
<head>
	<title>Terms & Conditions</title>
	
	<link rel="stylesheet" href="styles/styleterm.css" media="all"/>
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
			<!--<?php
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
			?>-->
			<li><a href="admin.php">Admin Panel</a></li>
			<li><a href="">Contact Us</a></li>
			<li><a href="">Others</a></li>
			<!--<?php
				if(!isset($_SESSION['user_id'])) {
					echo "<li><a href='login.php'>Log in</a></li>";
				}
				else{
					echo "<li><a href='logout.php'>Log out</a></li>";
				}
			?>-->
		</ul>
	</div>
	<div class="content">
		<!--<div class="sidebar">
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
		</div
		-->
		<div class="main_content">
			<img src="images/output_dIzjFF.gif"/>
			<div class="para">
			<p>Before booking tickets you have to read the following terms and conditions</p><br>
			<h1>Terms and Conditions:</h1>
			<ul>
				<li>Tickets of all matches can be purchased from our website, 5th October 2016 on-wards.</li>
				<li>Ticket selling for a match will stop on the website at 7 AM, the day before the match day.</li>
				<li>Tickets are available only from our website. Tickets are not available in app or call centre</li>
				<li>No discounts are applicable on these tickets. ALL tickets are non-cancellable, non-refundable, no modifications allowed.</li>
				<li>Users need to pay for the ticket online and pick up the ticket at the Kashem Food Corner on the date he/she had chosen on website at the time of ticket purchase</li>
			</ul>
			<br><h1>Ticket Purchase Process:</h1>
			<ul>
				<li>Users can purchase a maximum of 3 tickets per</li>
				<li>Select the match date, ticket category, number of tickets,enter the bkash no</li>
				<li>Pay for the ticket through bKash or DBBL</li>
			    <li>Users need to verify the bKash transaction STRICTLY within 1 hour of placing the ticket order or else the order will be cancelled.</li>
				<li>If payment is successful, a congratulation message will be sent </li>
				<li>You will be emailed your payment receipt, which you must bring for ticket pick-up. (Email may get delayed in times of rush, so wait for a few hours)</li>
				<li>The date of ticket pick-up will be on the receipt </li>
			</ul>
			<br><h1>Ticket Pick-up Process:</h1>
			<ul>
				<li>MOBILE phone with the phone number used for ticket purchase; user will be asked to give a call to a certain mobile number at the pick-up point.</li>
				<li>Payment proof is the email printout or SMS of the confirmation.</li>
				<li>Location of pick up:Kashem Food Corner,CUET</li>
				<li>Users must pick up the ticket ONLY on the date NO PICK-UP is available for the match on its match day.
Timing of pick up
Must be as mentioned on the ticket. If a ticket is booked at 7 PM or after and he wishes to pick it the next day, then it can be picked-up after 3 PM.
You are strongly advised to collect your ticket within the due time.We will not be responsible for the cancellation of your ticket if you fail to collect your ticket within the due time or from the chosen location.
This website is working as only a ticket selling agent – it does not take any responsibility for the operation of the matches.
We reserves the right to make changes in the ticket pick-up policy or alter the ticket pick-up location due to any unavoidable circumstances. However, we assures to communicate the same to customers on-time.</li>
			
			</ul>
			<br>
			<p>If you agree with these terms and conditions then you can proceed to <h3><a href="book.php">book</a></h3> your ticket</p>
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
<body>
</html>