<!DOCTYPE html>
<html>
<head>
	<title>check</title>

</head>
<body>
	<form action="forget.php" method="post" autocomplete="on" style="background: rgba(46, 46, 46, .2); 
	margin-left: 250px; margin-top: 0; width: 50%; padding: 20px;">
	<h1>Password Recovery</h1>
	<p>You can use this form to recover your password if you have forgotten it. Because your password is securely encrypted in our database, it is impossible actually recover your password, but we will enable you to reset it securely. Enter either your username or your email address below to get strated.   </p>
		<h2 style="margin-top: 50px; margin-left: 20px;">Please enter your username</h2>
	<input type="text" name="username" placeholder="Enter your username" style="  width: 70%;
    
    margin-bottom: 20px;
    margin-top: 50px;
    margin-left: 30px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;">
    <br><br><h3 style="margin-left: 40%;">OR</h3>
    <input type="text" name="email" placeholder="Enter your Email" style="  width: 70%;
    
    margin-bottom: 20px;
    margin-top: 10px;
    margin-left: 30px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;">
    <br><br>
	<a href="#" style="text-decoration: none; margin-left: 35px;  background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px; margin-bottom: 30px;">Back</a>
	<button type="submit" name="submit" class="btn" style="text-decoration: none; margin-left: 400px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px; margin-bottom: 30px;">Next</button>
	<p style="float: right; margin-top: 60px; font-size: 12px;">copyright 2018, secureparking pvt. Ltd.</p>

</body>
</html>
<?php
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	$username = isset($_POST['username'])?$_POST['username']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';

	

	if(isset($_POST['username'])){
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			header('location: check-question.php');
		} if (isset($_POST['email'])) {
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			header('location: check-question.php');
		} else {
			echo "<h2>";
			echo "The username or email you entered was not found in our database";
			echo "<h2>";
		}
	 }
	}
	

 ?>
