<?php
session_start();
if(isset($_POST['bttLogin'])){
    require 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($con, 'select * from librararian where L_username="'.$username.'"and L_password="'.$password.'"');
   if( mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header('Location: insert_form.php');
    }
    else
        echo 'Account invalid';
}

if(isset($_GET['logout'])){
	session_unregister('username');
}
?>
<html>
<head>
<style>
div.container{
    background-color: aliceblue;    
width: 300px;
padding: 10px 50px 25px;
border: 5px solid gray;
border-radius: 10px;
font-family: raleway;
float:left;
margin-top:50px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);  
    align-content: center;
}
    
    div.center{
       padding: 200px 500px 25px; 
    }
    
body{
	background-image: url("signinimg (2).jpg");
}
</style>
</head>
<body>
<div class="center">
<div class="container">
<form method="post">
    <table>
        <tr>
        <td><h3>Librarian name</h3></td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td><h3>Passowrd</h3></td>
        <td><input type="password" name="password"></td>    
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="bttLogin" value="Login"></td>    
        </tr>
    </table>
</form>
</div>
</div>
<html>
<body>