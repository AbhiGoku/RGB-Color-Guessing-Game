<!DOCTYPE html>
<html>
<head>
	<title>Color Game</title>
	<link rel="stylesheet" type="text/css" href="9thRGBcolorgame.css">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
</head>
<body>
	<h1>
		<span id="colordisplay">RGB</span> <span><button onclick="location.href = 'index.php';" id="utton" >logout</button></span>
		<br>COLOR GAME<!-- <span class="how"><input type="button" name="how to play" value="HOW TO PLAY"></span> -->
	</h1>
	<h2>		 
		<?php
// This will connect you to your database
$conn=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("projects") or die("Cannot connect to database");
session_start();
		 $temp=$_SESSION['id'];
		 $sql="SELECT name from users where id=$temp ";
		 $result=mysql_query($sql);
		 if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
		while( $row=mysql_fetch_array($result))
		{
		  printf("%s",$row["name"]);
		}session_destroy();
		 ?>'s Score : <span id="score">0</span> 
		 <div id="total_mains"><span id="total_main" > Total score:<span id="total">0 </span> </span></div></h2>

	<div id="stripe">
		<button id="reset">New Color</button>
		<span id="message"></span>
		<button class="mode" >Easy</button>
		<button  class="selected mode">Hard</button>
		 <span class="try_again1">no of tries allowed:<span class="try_again">5</span></span>
	</div>
<div id="container">
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>

	
</div>
<script type="text/javascript" src="9thRGBcolorgame.js"></script>
</body>
</html>