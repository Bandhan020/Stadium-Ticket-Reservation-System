<!DOCTYPE html>
<?php
	include("../functions/dbconnect.php");
?>
<html>
	<head>
		<title>Insert new post here</title>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
	</head>
	<body bgcolor="skyblue" >
		<form action="insert.php" method="POST" enctype="multipart/form-data">
		<table align="center" width="700" border="2" bgcolor="orange">
			<tr align="center">
				<td colspan="7"><h2 >Insert new post here</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Match Title:</b></td>
				<td><input type="text" name="match_title" required</td>
			</tr>
			<tr>
				<td align="right"><b>Match Date:</b></td>
				<td><input type="text" name="match_date" reqired</td>
			</tr>
			<tr>
				<td align="right"><b>Event Type:</b></td>
				<td><input type="text" name="event_type" required</td>
			</tr>
			<tr>
				<td align="right"><b>Stadium Id:</b></td>
				<td><input type="text" name="stadium_id" required</td>
			</tr>
			<tr>
				<td align="right"><b>Match Description:</b></td>
				<td><textarea name="match_desc" cols="20" rows="10"></textarea></td>
			</tr>
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert information now"</td>
			</tr>
		</table>
	</body>
</html>
<?php

	if(isset($_POST['insert_post'])){
		global $con;
		$match_title = $_POST['match_title'];
		$match_date = $_POST['match_date'];
		$match_type = $_POST['event_type'];
		$match_std = $_POST['stadium_id'];
		$match_desc = $_POST['match_desc'];
		
		$insert_match="insert into mat(match_title,match_date,event_type,stadium_id,match_desc)
								values('$match_title','$match_date','$match_type','$match_std','$match_desc')";
		$run_match = mysqli_query($con, $insert_match);
		
		if($run_match){
			echo "<script>alert('Info submission successful!.')</script>";
			echo "<script>window.open('insert.php','_self')</script>";
		}
	}
?>