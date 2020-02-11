<?php switch($show) {
    case 'emailForm': ?>
    <h2>Password Recovery</h2>
    <p>You can use this form to recover your password if you have forgotten it. Because your password is securely encrypted in our database, it is impossible actually recover your password, but we will email you a link that will enable you to reset it securely. Enter either your username or your email address below to get started.</p>
    <?php if ($error == true) { ?><span class="error">You must enter either a username or password to continue.</span><?php } ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="fieldGroup"><label for="uname">Username</label><div class="field"><input type="text" name="uname" id="uname" value="" maxlength="20"></div></div>
        <div class="fieldGroup"><label>- OR -</label></div>
        <div class="fieldGroup"><label for="email">Email</label><div class="field"><input type="text" name="email" id="email" value="" maxlength="255"></div></div>
        <input type="hidden" name="subStep" value="1" />
        <div class="fieldGroup"><input type="submit" value="Submit" style="margin-left: 150px;" /></div>
        <div class="clear"></div>
    </form>
    <?php break; case 'securityForm': ?>
    <h2>Password Recovery</h2>
    <p>Please answer the security question below:</p>
    <?php if ($error == true) { ?><span class="error">You must answer the security question correctly to receive your lost password.</span><?php } ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="fieldGroup"><label>Question</label><div class="field"><?= getSecurityQuestion($securityUser); ?></div></div>
        <div class="fieldGroup"><label for="answer">Answer</label><div class="field"><input type="text" name="answer" id="answer" value="" maxlength="255"></div></div>
        <input type="hidden" name="subStep" value="2" />
        <input type="hidden" name="userID" value="<?= $securityUser; ?>" />
        <div class="fieldGroup"><input type="submit" value="Submit" style="margin-left: 150px;" /></div>
        <div class="clear"></div>
    </form>
 
     <?php break; case 'userNotFound': ?><br>    <h2>Password Recovery</h2><br>    <p>The username or email you entered was not found in our database.<br /><br /><a href="?">Click here</a> to try again.</p><br>    <?php break; case 'successPage': ?><br>    <h2>Password Recovery</h2><br>   <p>An email has been sent to you with instructions on how to reset your password. <strong>(Mail will not send unless you have an smtp server running locally.)</strong><br /><br /><a href="login.php">Return</a> to the login page. </p><br>    <p>This is the message that would appear in the email:</p><br><div class="message"><?= $passwordMessage;?></div><br>    <?php break;
     case 'recoverForm': ?>
    <h2>Password Recovery</h2>
    <p>Welcome back, <?= getUserName($securityUser=='' ? $_POST['userID'] : $securityUser); ?>.</p>
    <p>In the fields below, enter your new password.</p>
    <?php if ($error == true) { ?><span class="error">The new passwords must match and must not be empty.</span><?php } ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="fieldGroup"><label for="pw0">New Password</label><div class="field"><input type="password" class="input" name="pw0" id="pw0" value="" maxlength="20"></div></div>
        <div class="fieldGroup"><label for="pw1">Confirm Password</label><div class="field"><input type="password" class="input" name="pw1" id="pw1" value="" maxlength="20"></div></div>
        <input type="hidden" name="subStep" value="3" />
        <input type="hidden" name="userID" value="<?= $securityUser=='' ? $_POST['userID'] : $securityUser; ?>" />
        <input type="hidden" name="key" value="<?= $_GET['email']=='' ? $_POST['key'] : $_GET['email']; ?>" />
        <div class="fieldGroup"><input type="submit" value="Submit" style="margin-left: 150px;" /></div>
        <div class="clear"></div>
    </form>
    <?php break; case 'invalidKey': ?>
    <h2>Invalid Key</h2>
    <p>The key that you entered was invalid. Either you did not copy the entire key from the email, you are trying to use the key after it has expired (3 days after request), or you have already used the key in which case it is deactivated.<br /><br /><a href="login.php">Return</a> to the login page. </p>
    <?php break; case 'recoverSuccess': ?>
    <h2>Password Reset</h2>
    <p>Congratulations! your password has been reset successfully.</p><br /><br /><a href="login.php">Return</a> to the login page. </p>
    <?php break; case 'speedLimit': ?>
    <h2>Warning</h2>
    <p>You have answered the security question wrong too many times. You will be locked out for 15 minutes, after which you can try again.</p><br /><br /><a href="login.php">Return</a> to the login page. </p>