<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Securaparking_Home</title>
  <link rel="stylesheet" href="./css/navigationbar.css">
</head>
<body>
  <nav class="navbar">
    <a href="#" style="position: absolute; text-decoration: none; color: #fff; font-weight: bolder;  font-size: 20px; padding: 13px; letter-spacing: 1.4px; ">SecureParking</a>
    <span class="open-slide">
      <a class="a" href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.php">Home</a></li>
          <li><a href="sec-about.php">About us</a></li>
            <li><a href="sec-join.php">join us</a></li>
            <li><a href="sec-blog.php">Blog</a></li>
            <li><a href="#">Contact us</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <li><a href="index.php">Home</a></li>
          <li><a href="sec-about.php">About us</a></li>
            <li><a href="sec-join.php">join us</a></li>
            <li><a href="sec-blog.php">Blog</a></li>
            <li><a href="#">Contact us</a></li>
    
  </div>
 

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
  
    }

  </script>
</body>
</html>
