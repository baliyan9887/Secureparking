
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/CSS" href="style.CSS">
</head>
<body>
	
    <form method="post" action="login.php" autocomplete="on">
        <!-- display validation error here --> 
        
        <?php include('errors.php'); ?>
    	<div class="login-box">
         <img src="avatar.png" class="user">
          <h2>Sign in</h2>
            <form> 
            <p>Username</p>
            <input type="text" name="username" required autofocus placeholder="Enter Username" pattern="[a-zA-Z0]{6,}" title="Please enter in more than six letters" >
            <p>Password</p>
            <input type="password" name="password" required autofocus placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/
            specialcharacter uppercase and lowercase letter, and at least 8 or more character ">  
            <label>
        <input type="checkbox" checked="checked" name="remeber"> Remember me
    </label>

            <button type="submit" name="login" class="btn">Login</button>
            <h5>
                Forgot <a href="forget.php">password?</a>
            </h5>
    	 <h6>
    	 	Not yet a member? <a href="register.php">Sign up</a>
    	 </h6>
        </form>
    </div>

    </form>
</body>
</html>