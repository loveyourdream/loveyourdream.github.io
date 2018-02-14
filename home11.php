<html>
<body>
<h1>Welcome 
 <?php 
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="Librarian.php"> Logout </a>

</html>
</body>