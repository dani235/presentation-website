<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><a href="register.php" style="text-decoration: none; color: black;">Username</a></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" style="float: right; margin-top: -5px; margin-right: 20px;">Login</button>
  	</div>
  	<div class="input-group">
  		<a href="../index.php" type="submit" class="btn" style="text-decoration: none; margin-top: 20px;">Back</a>
  	</div>
  </form>
</body>
</html>