<!DOCTYPE html> 
<html>
<head>
    <title>Secureparking-booking</title>
    <link rel="stylesheet" type="text/css" href="style.CSS">
    <script src="book.js"></script>
</head>
    <body>
      <section>
        <div class="booking-box" style=" display: flex;
  flex-direction: column;
  width: 90%;
  height: 659px;
  
 ">
        <form method="post" action="payment.php">      
           <h1>Booking</h1>

          <fieldset>
            <legend>Personal Details:</legend>
          <label>First name</label>
            <input type="text" name="firstname" required autofocus placeholder="Enter Full name" pattern="[a-zA-Z0]{2,}" title="Please enter in more than six letters" >
          <label>Last name</label>
          <input type="text" name="lastName" required autofocus placeholder="Your Last Name" pattern="[a-zA-Z0]{2,}" title="Please enter in more than six letters" /> 
          <label>Email ID</label>
          <input type="text" name="email" required autofocus placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid Id">
          <br>
          <label>Phone number</label>
          <input type="tel" name="phone" required autofocus placeholder="Enter your phone number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" title="Please enter in a number in this format:#### ### ###"  >
          
        </fieldset>
            <br>
            <fieldset>
              <legend>Booking Details:</legend>
              <label>Select City:</label>
          <select class="city" style="width: 37%;height: 50px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    outline: none;" name="city" required>
            <option value="">Select</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Banglore">Banglore</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Chennai">Chennai</option>
            <option value="Muzaffarnagar">Muzaffarnagar</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Noida">Noida</option>
          </select>
              <label>Select Parking Services:</label>
              <select name="parking" style="width: 38%;height: 50px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    outline: none;" required>
                <option value="">Select</option>
                <option value="Cyber City Parking Pvt.Ltd.">Cyber City Parking Pvt.Ltd.</option>
                <option value="Airport Parking Pvt.Ltd.">Airport Parking Pvt.Ltd.</option>
                <option value="Sevron Multiventure Serices Pvt.Ltd.">Sevron Multiventure Serices Pvt.Ltd.</option>
                <option value="Secure Parking Solutions Pvt.Ltd.">Secure Parking Solutions Pvt.Ltd.</option>
                <option value="MSIL Outside Parking Pvt.Ltd.">MSIL Outside Parking Pvt.Ltd.</option>
              </select>
              <label>Select Date:</label>
              <input type="date" style="width: 37%;height: 50px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    outline: none;"
                                     name="date" required>
              
              <label>Select Vehicle Type:</label>
              <select name="vehicle" style="width: 38%;height: 50px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    outline: none;" required>
                <option value="">Select</option>
                <option value="Bike">Bike</option>
                <option value="Car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Three Wheeler">Three Wheeler</option>
              </select>
              <p>Do you require Deluxe Parking?</p>
              <label>Yes:</label>
              <input type="radio" name="Delux" value="YesDelux" required>
              <label>No:</label>
              <input type="radio" name="Delux" value="NoDelux" required>


            </fieldset>
             <div class="panel-footer">
      <button class="btn back-btn">Back</button>
      <button class="btn next-btn" name="submit"><a style="text-decoration: none; color: #fff;" href="payment.php" >Next Step</a></button>
    </div>
  </div>
            
        </form>
        
       
      </div>                
        </form>
      </section>
    </body>
</html>