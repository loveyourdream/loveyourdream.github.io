<?php
session_start();
if(isset($_POST['bttLogin'])){
    require 'connect.php';
    $username = $_POST['name'];
    $password = $_POST['password'];
    $result = mysqli_query($con, 'select * from registration where name="'.$username.'"and password="'.$password.'"');
   if( mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
       // header('Location: Category.php');
    }
    else
        echo 'Account invalid';
}

if(isset($_GET['logout'])){
	session_unregister('	name');
}
?>
<html>
<head>
<style>
div.container{
width: 300px;
padding: 10px 50px 25px;
border: 5px solid gray;
border-radius: 10px;
font-family: raleway;
float:left;
margin-top:50px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);  
}
</style>
</head>
<body>
<div style="align:center">
<div class="container" align=center>
<form method="post">
    <table>
        <tr>
        <td><h3>Username name</h3></td>
        <td><input type="text" name="name"></td>
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