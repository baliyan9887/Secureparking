<!-- <?php 
echo "Thank you for visiting here!!";
?>
<br>
<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>
	<form action="test2.php" method="post" autocomplete="on">
	<input type="text" name="username" placeholder="Enter your user name" required>
	<br><br>
	<input type="text" name="Email" placeholder="Enter your email" required><br><br>
	<label>
		<input type="checkbox" checked="checked" name="remeber"> Remember me
	</label><br>
	<button type="submit" name="submit" class="btn">submit</button>


</body>
</html>
<?php
	$db = mysqli_connect('localhost', 'root', '', 'login');
	$username = $_POST['username'];
	$email = isset($_POST['Email'])?$_POST['Email']:'';
	
	if(isset($_POST['submit'])){
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			echo "User & email alerady exist !";
		} else {
			$query = mysqli_query($db, "INSERT INTO `user`(`username`, `email`) VALUES ('$username','$email')");
		}
		

	}

	if(isset($_POST['username'])){
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			echo "User alerady exist !";
		} else {
			$query = mysqli_query($db, "INSERT INTO `user`(`username`) VALUES ('$username')");
		}
	}
	if(isset($_POST['email'])){
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			echo "email alerady exist !";
		} else {
			$query = mysqli_query($db, "INSERT INTO `user`(`email`) VALUES ('$email')");
		}
	}

 ?>
 -->








<!DOCTYPE html>
<html>
<head>
	<title>check</title>

</head>
<body>
	<form action="test3.php" method="post" autocomplete="on" style="background: rgba(46, 46, 46, .2); 
	margin-left: 250px; margin-top: 70px; width: 50%; padding: 20px;">
		<h1 style="margin-top: 150px; margin-left: 20px;">Please enter your username</h1>
	<input type="text" name="username" placeholder="Enter your user name" required style="  width: 70%;
    
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
    <br><br>
	<a href="#" style="text-decoration: none; margin-left: 35px;  background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px; margin-bottom: 30px;">Back</a>
	<button type="submit" name="submit" class="btn" style="text-decoration: none; margin-left: 400px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px; margin-bottom: 30px;">Next</button>
	<p style="float: right; margin-top: 60px; font-size: 12px;">copyright 2018, secureparking pvt. Ltd.</p>
	<select name="question" class="question" style="width: 70%;height: 40px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                     margin-left: 20px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    font-style: bold;
                                    outline: none;
                                    " required>
                <option value="">--Select your Security Question--</option>
                <option value="What is your pet name?">What is your pet name?</option>
                <option value="What was the name of your first school?">What was the name of your first school?</option>
                <option value="Who was your Childhood hero?">Who was your Childhood hero?</option>
                <option value="What is your favorite past time?">What is your favorite past time?</option>
                <option value="What is your all time favorite sports team?">What is your all time favorite sports team?</option>
                <option value="What is your father's middle name?">What is your father's middle name?</option>
                <option value="What make was your first car or bike?">What make was your first car or bike?</option>
                <option value="Where did you first meet your spouse?">Where did you first meet your spouse?</option>
            </select>  	
</body>
</html>









































