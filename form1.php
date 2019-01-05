<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("projects") or die("Cannot connect to database");


		$Name=addslashes( $_POST['username'] );
		$myEmail=$_POST['email'];
		$password=$_POST['password'];//md5 hash security
		//$avatar_path=$_POST[('image/'.$_FILES['avatar']['name'])];
		
		//make sure the file type is image/
		$newpass = md5( $_POST['password']); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "INSERT INTO users(name, email, password) VALUES ('$Name','$myEmail','$newpass')" )
        or die( mysql_error() );

		header("location:index.php");
				
			   
?>

<!--<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required /><? $_SESSION['messsage'] ?>
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>-->