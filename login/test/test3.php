<!DOCTYPE html>
<html>
<head>
	<title>answer</title>
</head>
<body>
	<p>Thank you</p>

</body>
</html>
<?php
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	$username = isset($_POST['username'])?$_POST['username']:'';
	

	if(isset($_POST['username'])){
		$mysql_get_users = mysqli_query($db, "SELECT question FROM user WHERE username = '$username'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			echo "<h2>";
			echo "user already exist !";
			echo "<h2>";
		} else {
			echo "<h2>";
			echo "sorry";
			echo "<h2>";
		}
	}

 ?>
