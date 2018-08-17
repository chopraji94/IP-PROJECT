<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGNUP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="r_in">
    <div class="logo1">
                        <a href="../page.html"><img src="rsz_1new.jpg"></a>
                    </div>
    <div class="register_setup">
  <div class="header">
  	<h2 class="r_head">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
        </div>
</body>
</html>