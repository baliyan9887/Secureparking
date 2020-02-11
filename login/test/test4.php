<!--<!DOCTYPE html>
<html>
<head>
  <title>Forgot password</title>
</head>
<body>
  <h1>Please select your security question </h1>
    <form class="forgot" method="post">
    
     <select name="question" class="question" style="width: 70%;height: 40px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                     margin-left: 20px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    font-style: bold;
                                    outline: none;" required>
                <option value=""><?php echo $mysql_get_users; ?></option>
                
            </select>   
            <br><br>
       
           <input type="text" name="answer" placeholder="Enter your answer" style="  width: 70%;
    margin-left: 17px;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;">
            <br><br>
            <a href="forget.php" style="text-decoration: none; margin-left: 20px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px;">Back</a>
           <button name="next" style="text-decoration: none; margin-left: 600px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px;"">Next</button>
  </form>
</body>
</html> -->

<?php
      $db = mysqli_connect('localhost', 'root', '', 'registration');
      if (isset($_POST['next'])) {
        $username = ($_POST['username']);
        $sql = "SELECT question FROM user WHERE username = '$username'";
        $result = mysqli_query($db, $sql);
       
      }
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>questions</title>
</head>
<body>
  <?php
  while ($question = $mysql_fetch_assoc($result)) {
       echo "question".$question;
   } 
  ?>

</body>
</html>




















