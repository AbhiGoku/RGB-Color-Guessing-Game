<html>
<head>
<title>check</title>
<link rel="stylesheet" type="text/css" href="form.css">
<style type="text/css">
	body{
		text-align: center;
		padding: 20%;
		color:white;
	}
	a{
		color: #08f0f3;
		position:relative;
		padding-left: 0%;
	}
</style>
</head>
<body>
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);
ob_start();
session_start();
$host="localhost"; // Host name
$username="root"; // Database username
$password=""; // Database password
$db_name="projects"; // Database name
$tbl_name="users"; // Table name
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn,$myusername);
$mypassword = mysqli_real_escape_string($conn,$mypassword);

$sql="SELECT * FROM $tbl_name WHERE name='$myusername' and password='$encrypted_mypassword'" or die(mysql_error());
$result=mysqli_query($conn,$sql) or die(mysql_error());
$count=mysqli_num_rows($result);
if($count==1){
// If everything checks out, you will now be forwarded to student.php
$user = mysqli_fetch_assoc($result);
$_SESSION['id'] = $user['id'];
header("location:welcome.php");
}
else {
echo "<p>Wrong Username or Password Return to <a href=\"index.php\">login</a></p>";
}
ob_end_flush();
?>
</body>
</html>