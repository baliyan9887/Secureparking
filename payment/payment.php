<?php
    
    session_start();
    $errors = array();


    if (isset($_POST["submit"])) {
        $connection = new mysqli("localhost", "root", "", "membershipSystem");

    $firstName = $connection->real_escape_string($_POST["firstname"]);      
    $lastName = $connection->real_escape_string($_POST["lastName"]);          
    $email = $connection->real_escape_string($_POST["email"]);  
    $phone = $connection->real_escape_string($_POST["phone"]); 
        $date = $connection->real_escape_string($_POST["date"]);
        $city = $connection->real_escape_string($_POST["city"]);
        $parking = $connection->real_escape_string($_POST["parking"]); 
        $vehicle = $connection->real_escape_string($_POST["vehicle"]); 

        if (empty($firstName)) {
            array_push($errors, "firstName is required");  //add error to array
        }
        if (empty($lastName)) {
            array_push($errors, "lastName is required");  //add error to array
        }
        if (empty($email)) {
            array_push($errors, "Email is required");  //add error to array
        }
        if (empty($phone)) {
            array_push($errors, "Phone number is required");  //add error to array
        }
        if (empty($date)) {
            array_push($errors, "Date is required");  //add error to array
        }
        if (empty($city)) {
            array_push($errors, "City is required");  //add error to array
        }
        if (empty($parking)) {
            array_push($errors, "Parking is required");  //add error to array
        }
        if (empty($vehicle)) {
            array_push($errors, "Vehicle type is required");  //add error to array
        }
        
        if (count($errors) == 0) {
            $data = $connection->query("INSERT INTO users (firstName, lastName, email, phone, date1, city, parking, vehicle) VALUES ('$firstName', '$lastName', '$email', '$phone', '$date', '$city', '$parking', '$vehicle')");
            $_SESSION['city'] = $city;
            $_SESSION['success'] = "Your booking is confirmed";
            
        }
      
    
  }                  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Secureparking- Payment</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
<meta name="robots" content="noindex,follow" />
</head>
<body>
  <fieldset>
      <h2>Your order summary :</h2>
      Full name: <?php echo $_POST["firstname"]; ?>
      <?php echo $_POST["lastName"]; ?>
      <br>
      Email id: <?php echo $_POST["email"]; ?>
      <br>
      Phone number : <?php echo $_POST["phone"]; ?>
      <br>
      City:  <?php echo $_POST["city"]; ?>
      <br>
      Parking service :  <?php echo $_POST["parking"]; ?>
      <br>
      Date:  <?php echo $_POST["date"]; ?>
      <br>
      vehicle:  <?php echo $_POST["vehicle"]; ?>
      
    </fieldset>
<fieldset>
  <form action="Thank.php" method="post">
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>
      <div class="payment-method">
        <label for="card" class="method card">
          <div class="card-logos">
            <img src="img/visa_logo.png"/>
            <img src="img/mastercard_logo.png"/>
          </div>
          <br>
          <br>  
          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay 340.00 Rup. with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="img/bhim.jpg"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
            Pay 340.00 Rup. with PayPal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder" name = "name">Cardholder's Name</label>
          <input type="text" id="cardholder" />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" id="date" placeholder="MM / YY" />
            </div>

            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" id="verification"/>
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" id="cardnumber"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn">Back</button>
      <button class="btn next-btn"><a href="Thank.php" style="text-decoration: none;text-decoration-style: none; color: #fff;">Next Step</a></button>
    </div>
  </div>
</form>
</fieldset>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>