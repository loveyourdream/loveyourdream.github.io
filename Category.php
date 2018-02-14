<?php
    session_start();
    echo 'Welcome  ';
	echo '<br><a href="First_Page.html?action=logout">LOGOUT</a>';
	
?>
<html>
<head>
<title>Category</title>
<style>
input[type=submit] {
    width: 50%;
    background-color: pink;
    color: black;
    padding: 30px 20px;
    margin: 8px 0;
    font-size:30px;
    cursor: pointer;
}
body{
background-image:url("1stpgimg.jpg");
}

</style>
</head>
<body>
<h1 style="color:red;">Category</h1>
<hr>
<form>
<center>
<input type="submit" value="Computer" formaction="Computer.html"><br>
<input type="submit" value="Information Technology" formaction="IT.html"><br>
<input type="submit" value="Electronics" formaction="Etrx.html"><br>
<input type="submit"  value="Electronics and Telecommunication" formaction="Extc.html"><br>
<input type="submit" value="Mechanical" formaction="Mech.html"><br>
</center>
</body>
</html>