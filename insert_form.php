<?php
    session_start();
    echo '<br><br><br>';
    echo 'Welcome  '.$_SESSION['username'];
	echo '<br><br><a href="First_Page.html?action=logout">LOGOUT</a>';
	
?>
<html>
<head>
<title>Add Records Form</title>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button12 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    float: left;
}
    
body{
	background-image: url("signinimg (2).jpg");
	background-color:palegoldenrod;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
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

    
form {
    /* Just to center the form on the page */
    margin: 0 auto;
    width: 400px;
    background-color:cornsilk;
    /* To see the outline of the form */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}
    
input {
    /* To make sure that all labels have the same size and are properly aligned */
    display: inline-block;
    width: 200px;
    float: right;
}

    div.insert{
        float: left;
                padding-top: 55px;
    }
    
    div.delete{
        float: right;
        padding-right: 200px;

    }
   
</style>

</head>
<body>
<ul>
<li><a href="ContactUs.html" title="Contact Us">Contact Us</a> </li> 
<li><a href="Submit1.html" title="About_us">About_us</a></li>
<li><a href="Help.html" title="Help">Help</a></li> 
</ul>
<h3> TO VIEW THE DETAILS OF BOOKS:-</h3>
<a href="generateXML.php"><input class="button12" type="submit" name="VIEW RECORDS" value="VIEW RECORDS"></a>
<div align="center">
    <br/><br/>

<div class="insert">
    <h1> ENTER NEW BOOK!!! </h1>
  <form action="addrecord.php" method="post">
      <label>Accession Number: </label><input type="number" name="Accessionno"><br/>

      <br/><label>ISBN ::</label><input type="number" name="ISBN"><br/>
	
      <br/><label>Edition::</label><input type="text" name="Edition"><br/>

      <br/><label>Volume:: </label><input type="number" name="Volume"> <br/>
    
      <br/><label>Title: </label><input type="text" name="Title"> <br/>
      <br/><label>Number of Books:: </label><input type="number" name="Noofbooks"><br>
	<br/>
    <button class="button" onclick="myFunction()"> INSERT </button>
	<script> 
		function myFunction() {
			alert("Record Inserted!!!");
		}
	</script>

  </form>
    </div>
  <br><br><br>
  <div align=center>

      
    <div class="delete">
          <h1> DELETE BOOK! </h1>
    <form action="delete.php" method="post">
        <label>Accession Number: </label><input type="number" name="Accessionno" ><br/>
 
        <br/><label>Title: </label><input type="text" name="Title"> <br/><br/>
        
    <button class="button" name="DELETE" onclick="myFunctiondel()" > DELETE </button>
        
	<script> 
		function myFunction() {
			alert("Record Inserted!!!");
		}
		function myFunctiondel() {
			alert("Record Deleted!!!");
		}
	</script>

  </form>
      </div>
  </div>
    </div>
</body>
</html>

