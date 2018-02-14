<?php
    session_start();
    echo 'Welcome  '.$_SESSION['name'];
	echo '<br><a href="Login.php?action=logout">LOGOUT</a>';
	
?>