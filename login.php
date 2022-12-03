<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VPQ CLAN - RP GIVEAWAY</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username,Email or PubgID</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" div name="login_user">Login</button>
  	</div>
  	<p>
  		Want to Register?? <a href="register.php">Sign up</a>
		</p>
	 
  </form>
</body>
</html>