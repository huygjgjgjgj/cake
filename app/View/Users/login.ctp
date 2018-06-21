<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<?php echo $this->html->css(array('/Login/css/style.css')) ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <span class="error" style="text-a"><?php echo $error; ?></span>
	<form class="form" method="post" action="">
		<div class="form-group">
	    	<label for="User">Username</label>
	    	<input type="text" class="form-control" id="user" name="username" aria-describedby="userHelp" placeholder="Nhập user" required>
	  	</div>

	  	<div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	  	</div>

		<div class="form-check">
		    <input type="checkbox" class="form-check-input" name="save" id="save">
		    <label class="form-check-label" for="exampleCheck1">Save password</label>
	  	</div>

		<div class="form-group">
			<a href="#" class="forgot">Forgot password</a>
		</div>

	  	<button type="submit" name="login" class="btn btn-primary">Login</button>
	</form>
</body>
</html>