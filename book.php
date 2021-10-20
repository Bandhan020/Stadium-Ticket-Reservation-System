<?php
	session_start();
	include("connect.php");

	if(isset($_POST['Select_category'])){
		$_SESSION['category']=$_POST['category'];
	}
	
	if(isset($_POST['Select_seat'])){
		$_SESSION['seat']=$_POST['seat'];
	}
?>


<!doctype html>
<html>
<head>
<style>
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:#000000;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:#000000;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:#000000;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:#000000;
}


input {
	
	padding:10px 12px;
	margin:auto;
	display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	background-color:transparent;
	color:#000000;
	width:60%;
}

select{
	padding:10px 12px;
	background-color:transparent;
	color:#000000;
	width:60%;
}

select:invalid { color:#000000; }

option{
	color:#000000;
	background-color:#525252;
}
</style>
</head>
<meta charset="utf-8">
<title>sign up</title>

<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="width:50%" background="cover" margin:auto" method="post">
		<br>
		   <select name="category" required>
		   <option value="" disabled selected hidden>Choose Category</option>
					<?php
					if($_SESSION['category']==''){
						$sql="SELECT `category`,`stadium`.`stadium_id`, `price` FROM `seat _type`,`stadium`,`mat` WHERE `stadium`.`stadium_id`=`seat _type`.`stadium_id` and `mat`.match_id= $_SESSION[match_id]";
						$result=mysqli_query($con,$sql);
						
						while($row=mysqli_fetch_assoc($result)){
							$_SESSION['stadium_id']= $row['stadium_id'];
					?>
				<option value="<?php echo $row['category']; ?>" > <?php echo $row['category']; ?> </option>
					<?php }
					}
					
					else{ ?>
					<option value="" Selected hidden disabled> <?php echo $_SESSION['category']; ?> </option>
					<?php } ?>
			</select>
		<button type="submit" style="padding:5px" name="Select_category" >Select category</button>
	</form>
	
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="width:50%; background-image:url(Images/tvguide-glasspane.png); background-size:cover; margin:auto" method="post">
		<br>
		   <select name="seat" required>
		   <option value="" disabled selected hidden>Choose amount of seat</option>
					<?php
					if(($_SESSION['category']!='') and ($_SESSION['seat']=='') ){
						$st=$_SESSION['stadium_id'];
						$sql="SELECT `no_left`,`price` FROM `seat _type` WHERE stadium_id= $st and category='$_SESSION[category]'";
						$result=mysqli_query($con,$sql);
						$row=mysqli_fetch_assoc($result);
						if($row['no_left']>=3)
						{
							$n=3; echo $n;
						}
						else {$n=$row['no_left'];}
					
					for($i=1; $i<=$n; $i++){ ?>
					<option value="<?php echo $i; ?>" > <?php echo $i." BDT ".$i*$row['price']; ?>  </option>
					<?php } 
					}
					
					else{ 
						$st=$_SESSION['stadium_id'];
						$sql="SELECT `no_left`,`price` FROM `seat _type` WHERE stadium_id= $st and category='$_SESSION[category]'";
						$result=mysqli_query($con,$sql);
						$row=mysqli_fetch_assoc($result);
					?>
						<option value="" disabled selected hidden> <?php echo $_SESSION['seat']." BDT ".$_SESSION['seat']*$row['price']; ?>  </option>
			<?php   }
					?>
			</select>
				<button type="submit" style="padding:5px" name="Select_seat">Select seat no</button>

	</form>

		<form action="n.php" style="width:50%; background-image:url(Images/tvguide-glasspane.png); background-size:cover; margin:auto" method="post">
		<br>
		   <select name="paymen_method" required>
		   <option value="" disabled selected hidden>Choose payment method</option>
					<?php
					if(($_SESSION['category']!='') and ($_SESSION['seat']!='') ){ ?>
						
					<option value="" > bKash  </option>
					<option value="" > DBBL  </option>
					<option value="" > Debit Card  </option>
					<?php } ?> 
					
				<input type="tel"  placeholder=" 01XXXXXXXXX (who will pickup the tickets)" name="phone" required><br><br>

				<button type="submit" name="submit" style="padding:5px">submit</button>
	</form>
 </body>