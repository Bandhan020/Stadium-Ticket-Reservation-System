<?php
	$con = mysqli_connect("localhost","root","","stadium_reservation");
	if(mysqli_connect_errno()){
		echo "Failed!".mysqli_connect_error();
	}
	//getting matches
	function getMatch(){
		global $con;
		$get_match = "SELECT * FROM mat";
		$run_match = mysqli_query($con, $get_match);
		
		while($row_match = mysqli_fetch_assoc($run_match)){
			$match_id=$row_match['match_id'];
			$match_title=$row_match['match_title']; ?>
			<li><form action="book.php" method="post"><button type="submit" value="<?php echo $match_id; ?>" name="mat"><?php echo $match_title; ?></button></form></li>;
	<?php	}
	}
	
?>