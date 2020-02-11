<?php
include("database.php"); 
include("functions.php");
$show = 'emailForm'; //which form step to show by default
if ($_SESSION['lockout'] == true && (mktime() > $_SESSION['lastTime'] + 900))
{
    $_SESSION['lockout'] = false;
    $_SESSION['badCount'] = 0;
}
if (isset($_POST['subStep']) && !isset($_GET['a']) && $_SESSION['lockout'] != true)
{
    switch($_POST['subStep'])
    {
        case 1:
            //we just submitted an email or username for verification
            $result = checkUNEmail($_POST['uname'],$_POST['email']);
            if ($result['status'] == false )
            {
                $error = true;
                $show = 'userNotFound';
            } else {
                $error = false;
                $show = 'securityForm';
                $securityUser = $result['userID'];
            }
        break;
        case 2:
            //we just submitted the security question for verification
            if ($_POST['userID'] != "" && $_POST['answer'] != "")
            {
                $result = checkSecAnswer($_POST['userID'],$_POST['answer']);
                if ($result == true)
                {
                    //answer was right
                    $error = false;
                    $show = 'successPage';
                    $passwordMessage = sendPasswordEmail($_POST['userID']);
                    $_SESSION['badCount'] = 0;
                } else {
                    //answer was wrong
                    $error = true;
                    $show = 'securityForm';
                    $securityUser = $_POST['userID'];
                    $_SESSION['badCount']++;
                }
            } else {
                $error = true;
                $show = 'securityForm';
            }
        break;
        case 3:
            //we are submitting a new password (only for encrypted)
            if ($_POST['userID'] == '' || $_POST['key'] == '') header("location: login.php");
            if (strcmp($_POST['pw0'],$_POST['pw1']) != 0 || trim($_POST['pw0']) == '')
            {
                $error = true;
                $show = 'recoverForm';
            } else {
                $error = false;
                $show = 'recoverSuccess';
                updateUserPassword($_POST['userID'],$_POST['pw0'],$_POST['key']);
            }
        break;
    }
}elseif (isset($_GET['a']) && $_GET['a'] == 'recover' && $_GET['email'] != "") {
    $show = 'invalidKey';
    $result = checkEmailKey($_GET['email'],urldecode(base64_decode($_GET['u'])));
    if ($result == false)
    {
        $error = true;
        $show = 'invalidKey';
    } elseif ($result['status'] == true) {
        $error = false;
        $show = 'recoverForm';
        $securityUser = $result['userID'];
    }
}
if ($_SESSION['badCount'] >= 3)
{
    $show = 'speedLimit';
    $_SESSION['lockout'] = true;
    $_SESSION['lastTime'] = '' ? mktime() : $_SESSION['lastTime'];
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Password Recovery</title>
<link href="assets/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"></div>
<div id="page">
<!--PAGE CONTENT-->
</div>
</body>
</html>