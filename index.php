<?php include 'navigationbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Secureparking-Home</title>
  <link rel="stylesheet" type="text/css" href="./css/Homepage.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

 
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Find parking near by you!

      </span>
      <div class="wrap">
      <div class="search">
<form action="index.php" method="post" autocomplete="on">
  <input type="text" name="search" class="input-search" placeholder="Where would you like to go?........" autofocus="on" required>
  <button type="submit" name="find" value="search" class="btn-search">
    <i class="fa fa-search"></i>
  </button>
</form>
</div>
</div>
<?php 
  if (isset($_POST['find'])) { 
    $arr = array('New Delhi','Muzaffarnagar','Gaziabad','Jaipur','Banglore','Mumbai','Kolkata','Chennai','Lucknow','Goa','Noida','Gujarat');
    $searchq = $_POST['search'];
    if (in_array($searchq, $arr)) {
      header('location: ./login/login.php');
    } else {
      header('location: sec-search-error.php');
    }
    
  }

?>

    </div>
  </div>

  
  <?php include 'navigationbar.php'; ?> 
  <section class="section section-light">
    <h2>CONSULTING SERVICE</h2>
    <P>
      Cosnsultation in parking management plays a vital role in establishing a bridge between planning & development. It involves a comperhensive study of traffic impact, parking demand analysis, parking strategy & desgin and parking management system design to provide accurate and first hand information to whether the type of car park is going to work for you.
      Our consulting team  is equipped with highly skilled technicians that use advance state of the art applications like Vissim & Turn-Check for efficient & accurate Traffic Data Analysis. <a style="text-decoration: none;" href="sec-cons-service.php">Learn more -</a> 
    </P>
   
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Parking Solutions
      </span>
    </div>
  </div>
   <?php include 'navigationbar.php'; ?>
  <section class="section section-dark">
    <p>Secureparking has parking spaces available for rent, lease or to book online in New Delhi, Banglore, Mumbai, Chandigarh, Punjab and Muzaffarnagar.</p>
    <h2>Monthly Parking</h2>
    <p>
      Your parking spot in the city to come and go us like. Monthly Parking provides you with 24-hour access, 7 days a week at your preferred Secure Parking car park.
    </p>
    <h2>Corporate Parking</h2>
    <p>
      Give your business the edge by offering clients and staff the convenience and benefit of complimentary parking. Contact us for more info!
    </p>
    <h2>Weekend Parking</h2>
    <p>
      Whether you're planning a shopping trip, a special lunch or an adventure with the family, Secure has parking close to the action. We offer special Weekend Parking rates at a wide selection of car parks across all major cities.
    </p>
    <h3><a style="text-decoration: none;" href="#">Learn more - </a></h3>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        MANAGEMENT OF VEHICLE PARK OPERATIONS
      </span>
    </div>
  </div>
   
  <?php include 'navigationbar.php'; ?>
  <section class="section section-light">
    <p>
      Our operational solutions cover any kind of park, large or small-whether they are connected to stadium, airport, shopping centres, commericial towers, hospitals and retail pay-and-display or patrolled car parks.  
    </p>
    <h3 >Customer Service :</h3>
    <p>
      Customer service is a series of activities desgined to enhance the level of customer satisfaction.
      The essence of good customer service is forming a relationship with the customer- a relationship that an individual customer feels that he would like to pursue. How do you go about forming such a relationship? By remembering the one true secert of good customer service and acting accordingly; "You will be judged by what you do, not what you say". <a style="text-decoration: none;" href="#">Learn more -</a>
    </p>
  </section>
   <section class="section section-power">
    <i><h4>Powered by</h4></i>
    <img class="duian" src="./css/image/duian.jpg">
  </section>
  <?php include 'navigationbar.php'; ?>
</body>
</html>
