<html>
<head>
<link rel="stylesheet" href="form.css" type="text/css">
<link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
<div >
<div class="welcome">
		<div class="alert alert-success">Great!! The your data has been updated to the DATABASE</div>
		<div>
<!-- <img src="getImage.php?id=1" width="175" height="200" /> -->
</div>
		 <span class= "user " >
		 	 <img src="minion.jpg" > 
		 </span> 
		 	<!-- <?=$_SESSION['avatar'] ?> -->
		 <br>---------------------------------------------------------------------------
		 <span  id="a" class="welcome">
		 
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
		}
		 ?> -------------------------------------------------------------------------
         </span>
		 </div>
<span class="wel">
		<button onclick="location.href = '9thRGBcolorgame.php';" id="myButton" class="btn btn-primary" >RGB COLOR GAME</button>
	</span>
	</div>
</div>
</body>
</html>