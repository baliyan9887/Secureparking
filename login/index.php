
<?php include('server.php');
        //if user not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/CSS" href="style.CSS">
</head>
<body>
	<div class="header">
	    <h2> Home Page </h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                         echo $_SESSION['success']; 
                         unset($_SESSION['success']);
                    ?>
                         
                     </h3>

            </div>
        <?php endif ?>
        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
            <p class="logout"><a href="index.php?logout='1'">Logout</a></p>
			<!-- booking button -->
            <p class="Booking"><a href="./includes/book.php" >Booking</a></p>
        <?php endif ?>
        

    </div>

  
</body>
</html>