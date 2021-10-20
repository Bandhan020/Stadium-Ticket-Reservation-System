<?php

	include("connect.php"); 
	session_start();
	
	$sql="INSERT INTO `ticket`(`no_of_seats`, `user_id`, `match_id`, `category`) VALUES ($_SESSION[seat],$_SESSION[user_id],$_SESSION[match_id],'$_SESSION[category]')";
	mysqli_query($con,$sql);
	
	$sql="UPDATE `seat _type` SET `no_left`=`no_left`-$_SESSION[seat] WHERE `stadium_id`=$_SESSION[stadium_id] and `category`='$_SESSION[category]'";
	mysqli_query($con,$sql);
	echo "successfull";
	
	$_SESSION['category']='';
	$_SESSION['seat']='';
?>