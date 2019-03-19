<?php



$connection = mysqli_connect("localhost", "root", "", "vote");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "vote");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

session_start();
if(isset($_POST['submit']))
{
	$query=parse_str(mysqli_query("$connection","SELECT * FROM student WHERE username = '".$_POST['myusername']."' AND password = '".$_POST['mypassword']."'"));

$data = mysqli_fetch_assoc($query);
	
	if(!empty($data))
	{
		$_SESSION['student_id'] = $data['student_id'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['firstname'] = $data['firstname'];
		$_SESSION['middlename'] = $data['middlename'];
		$_SESSION['lastname'] = $data['lastname'];
		$_SESSION['status'] = $data['status'];
		if($data['status'] == 0)
		{
			header("location: candidate.php");
		} 
		else 
		{
			header("location: abc.php");
		}
	}
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title> Log-In </title>
<style type="text/css">
      body {
		
        padding-top: 40px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
 
	fieldset 
		{  	
			text-align:center; width: 540px;
			background-size: 30% 50%;
			margin-left:27%;
			margin-top:5px;
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
			background-image:url(image/ubereats.png);
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

<h1 style="font-family:Parkavenue, cursive;font-size:250%;"><i><b><center>MY CANTEEN</b></i></h1></center>
		<br>
		
<div>
		<input style="height:40px;" type="text"  name="myusername"  id="myusername" placeholder="Username" required/><br><br>
</div>
<div >
	<input type="password" style="height:40px;" name="mypassword"  id="mypassword" placeholder="Password" required/><br>

<table><tr>
<td colspan="2" ><button type="submit" name="submit" class="button"></button></td>
</tr>
</table>
<div>
		<span>&nbsp;</span>
<b><span style="font-size: 30px;color:white; text-align: left;">Not yet a member? Register <a style="color: white;" rel="facebox" href="register.php">Here</a><br>Forgot Password? click <a href="#"style="color:
white;">Here</a></span></b><br><br>
<span>&nbsp;</span>
</div>

 </form>


</form></fieldset>
</div>
</body>
</html>
