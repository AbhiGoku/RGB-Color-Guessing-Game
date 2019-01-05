<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form1.php" method="post" enctype="multipart/form-data" />
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" id="pwd" required /><? $_SESSION['messsage'] ?>
      <script type="text/javascript">
        window.setTimeout(function() {
          if(document.getElementById(pwd)!=="")alert("Make sure you remember the password");},500);
      </script>
            <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>