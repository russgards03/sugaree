<?php
include_once 'config/config.php';
if(isset($_POST['submit'])){
	$user_email = mysqli_real_escape_string($con,$_POST['user_email']);
	$user_password = mysqli_real_escape_string($con,$_POST['user_password']);

	$result = mysqli_query($con, "SELECT * FROM tbl_users WHERE user_email='$user_email' AND user_password='$user_password'") or die ("Error");
	$row = mysqli_fetch_assoc($result);

	if(is_array($row) && ! empty($row)){
		$_SESSION['valid'] = $row['user_email'];
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['id'] = $row['id'];
	}else{
		echo "<div class='message'
		<p> Wrong Username or Password <p>
		</div> <br> ";
		echo "<a href='login.php'><button class='btn'>Go back</button>";
	}
	if(isset($_SESSION['valid'])){
		header("Location: index.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SUGAREE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
	<title>LOGIN</title>
</head>
<body>
	<div class="container"></div>
		<div class="box form-box"></div>

	<div id="login-block">
		<h3>LOGIN</h3>
		<form method="POST" action="">
		<div class="field input">
			<label for="username">Username</label>
			<input type="text" class="input" name="user_email" autocomplete="off" placeholder="Enter email"/>
		</div>
		<div class="field input">
			<label for="password">Password</label>
			<input type="password" class="input" name="user_password" autocomplete="off" placeholder="Enter password"/>
		</div>
		<div class="field">
			<input type="submit" name="submit" value="Login"/>
		</div>
		<div class="links">
			Don't have an account yet?<a href="register.php">Register Here</a>
		</div>
		</form>
	</div>
</body>
</html>