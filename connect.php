<?php
	$con = mysqli_connect("localhost","root","","stadium_reservation");
	
	if(mysqli_connect_errno()){
		echo"Error occcured while connecting with database".mysqli_connect_errno();
	}
	
?>