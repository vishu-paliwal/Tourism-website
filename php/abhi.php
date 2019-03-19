<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title> Log-In </title>
<style type="text/css">
      body {
		
        padding-top: 30px;
        padding-bottom: 40px;
      }
      
 
	fieldset 
		{  	
			text-align:center; width: 850px; height : 450px;
			background-size: 80% 60%;
			margin-left:17.5%;
			margin-top:0px;
			margin-bottom:20px;
			border-radius: 10px;
			box-shadow: 2px 4px 10px rgba(0,0,0,.6) 
		} 
	form INPUT 
		{
			padding: 10px;
		}
	body
		{                background-size: 100% 140%;
			background-repeat: no-repeat;
			background-image:url("Lake.jpg");
		}
	.button
		{
			width:140px; 
			height:80px;
			background: url("image/login.png");
			background-size: 130px 70px;
			background-repeat: no-repeat;
			border:none;
			cursor:pointer;
		}
</style>
</head>
<body>
<header></header>
<fieldset>
<form method="post" action="">

<br>
<div id="page">
<div id="header">
<div id="container" align="center">
<form action="login.php" method="post">

<h1 style="font-family:Parkavenue, cursive;font-size:250%;"><i><b><center></b></i></h1></center>
		<br>
		
<div>
<br><br><br><br><br><br><br><br>
		<input style="height:40px;" type="text"  name="UserId"  id="UserId" placeholder="Username" required/><br><br>
</div>
<div >
	<input type="Password" style="height:40px;" name="Password"  id="Password" placeholder="Password" required/><br>

<table>

<br><br>
<a href ="index.html"><font color="white" size="5px">Submit</font></a>

<br>
<font color="white">
If not Registered.....
<a href ="register.html"><font color="white" size="5px">Register</a>
</font>

</table>





 </form>


</form></fieldset>
</div>
</body>
</html>



<?php
	$con = mysqli_connect('localhost','root','');
	if(! $con)
	{
		echo ("Not connected");
	}
	if(!mysqli_select_db($con,"hack"))
	{
		echo ("Database not selected");
	}
	if(isset($_POST["UserId"]) && isset($_POST["Password"]))
	{
		$_POST["UserId"];
		$_POST["Password"];
	if(!mysqli_query($con,"Insert into table1(UserId,Password) values('".$_POST["UserId"]."','".$_POST["Password"]."')"))
	{
		echo ("Not Inserted");
	}
	
	}
mysqli_close($con);
?>

