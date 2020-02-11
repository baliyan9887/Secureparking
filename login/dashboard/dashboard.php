<?php include('server.php');
        //if user not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User-Dashboard</title>
  <link rel="stylesheet" href="dash.css">
</head>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="#">Home</a>
    <a href="#">Profile</a>
    <a href="#">Activity</a>
  </div>
  

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
  
    }

  </script>

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
            <p class="user">Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
            <p class="logout"><a href="index.php?logout='1'">Logout</a></p>
        <?php endif ?>
        

    </div>

</body>
</html>
