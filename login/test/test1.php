<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="test.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrap">
	<div class="search">
<form action="test1.php" method="post" autocomplete="on">
	<input type="text" name="search" class="input-search" placeholder="Where you want to go?">
	<button type="submit" name="find" value="search" class="btn-search">
		<i class="fa fa-search"></i>
	</button>
</form>
</div>
</div>
</body>
</html>
<?php 
	if (isset($_POST['find'])) { 
		$arr = array('New Delhi','Muzaffarnagar','Gaziabad','Jaipur','Banglore','Mumbai','Kolkata','Chennai','Lucknow','Goa');
		$searchq = $_POST['search'];
		if (in_array($searchq, $arr)) {
			header('location: test2.php');
		} else {
			echo "<h1>";
			echo "Match not found";
			echo "</h1>";
		}
		
	}

?>