<?php
session_start();
if(isset($_POST['bttLogin'])){
    require 'connect.php';
    $name = $_POST['name'];
    $password = $_POST['password'];
    $result = mysqli_query($con, 'select * from registration where name="'.$name.'"and password="'.$password.'"');
   if( mysqli_num_rows($result)==1){
        $_SESSION['name'] = $name;
        header('Location: Category.php');
    }
    else
        echo 'Account invalid';
}

if(isset($_GET['logout'])){
	session_unregister('name');
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Login.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
<style>
body{
	background-image: url("signinimg (2).jpg");
	background-color:palegoldenrod;
     background-image: url(1stpgimg.jpg);
	background-repeat:repeat ; 
	background-attachment:fixed;
	color:black;
}
     div.container{
       padding: 100px 450px 25px; 
    }
    

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 5000px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
    
    label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
}

</style>
</head>
<body>
<ul>
<li><a href="ContactUs.html" title="Contact Us">Contact Us</a> </li> 
<li><a href="Submit1.html" title="About_us">About_us</a></li>
<li><a href="Help.html" title="Help">Help</a></li> 
     <li><a href="First_Page.html" title="Home">Home</a></li>
</ul>

<div class="container" >
<div class="main">
<h2>Login Form</h2>
<form name = "form" method="post" action="Category.php">
<label>User Name:</label>
<input type = "text" name = "name" >
    <br>
<label>Password :</label>
<input type="Password" name="password" >
    <br>

<input type="submit" name="bttLogin" value="Login" id="register" onclick="Category.php">
</form>
    </div>
    </div>
   
</body>
</html>