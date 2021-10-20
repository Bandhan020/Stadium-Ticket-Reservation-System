<?php>
	session_start();
	echo 'Welcome'.$_SESSION['email'];
	echo '<br><a href="index.php?action=logout">Logout</a>
?>