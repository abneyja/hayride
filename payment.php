<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylll.css">
</head>

<body>

<div class="navbar">
  <a  href="index.php">Home</a>
  <a class="active" href="search.php">Book</a>
  <a href="parking.php"> Parking </a>
   <a href="contact.php">Contact</a>
  <div class="dropdown">
  <button class="dropbtn"><img src="sh1.png">
      <i class="fa fa-caret-down"></i>
    </button>
   </div>
  <div class="dropdown">
    <button class="dropbtn"><img src="p1.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="r.php">Register</a>
      <a href="log.php">Login</a>
      <a href="#">Profile</a>
    </div>
  </div> 	
</div>
<h1> Payment </h1>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div>
                <form>
				<h2> Card Information </h2>
                    <div class="owner">
                        <label for="owner"><h3> Name of Card Holder</h3></label><h3 class="b">Arrrrr</h3> 
						<label for="cvv"><h3>CVV</h3></label> </br>
                        <input type="text" class="form-control" id="owner">
                        <input type="text" class="form-control1" id="cvv">
                    </div>
		
                    <div class="form-group" id="card-number-field">
                        <label id="number" for="cardNumber"><h3>Card Number</h3></label></br>
                        <input type="text" class="form-control2" id="cardNumber">
                    </div>
                    <div class="form">
                        <label><h3 class="a">Expiration Date</h3></label></br>
                        <select id="expiration-date">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select id="expiration-date">
                            <option value="16"> 2019</option>
                            <option value="17"> 2020</option>
                            <option value="18"> 2021</option>
                            <option value="19"> 2022</option>
                            <option value="20"> 2023</option>
                            <option value="21"> 2024</option>
                        </select>
                       <h3 class="b">Arrrrr</h3>
					   <br>
                       <div class="center">
                        <img src="visa.jpg" id="visa">
                        <img src="mastercard.jpg" id="mastercard">
                        <img src="amex.jpg" id="amex">
						</div>
                    </div>
					<hr>
					
					<h2> Address and Billing Address Information </h2>
					
					<div class="address">
                        <label for="address"><h3> Street Address</h3></label> 
                        <input type="text" class="control" id="address">
						<label for="city"><h3>City</h3></label> 
						<label for="state"><h3 class="c">State</h3></label> 
						<label for="country"><h3 class="d">Country</h3></label> </br>
                        <input type="text" class="control1" id="city">
                        <select id="expiration-date1">
                            <option value=""> -none-</option>
                            <option value=""> Alabama</option>
                            <option value=""> Alaska</option>
                            <option value=""> Arizona</option>
                            <option value=""> Arkansas</option>
                            <option value=""> California</option>
							<option value=""> Colorado</option>
							<option value=""> Connecticut</option>
							<option value=""> Delaware</option>
							<option value=""> Florida</option>
							<option value=""> Georgia</option>
							<option value=""> Hawaii</option>
							<option value=""> Idaho</option>
							<option value=""> Illinois</option>
							<option value=""> Indiana</option>
							<option value=""> Iowa </option>
							<option value=""> Kansas</option>
							<option value=""> Kentucky</option>
							<option value=""> Louisiana</option>
							<option value=""> Maine</option>
							<option value=""> Maryland</option>
							<option value=""> Massachusetts</option>
							<option value=""> Michigan</option>
							<option value=""> Minnesota</option>
							<option value=""> Mississippi</option>
							<option value=""> Missouri</option>
							<option value=""> Montana</option>
							<option value=""> Nebraska</option>
							<option value=""> Nevada </option>
							<option value=""> New Hampshire</option>
							<option value=""> New Jersey</option>
							<option value=""> New Mexico</option>
							<option value=""> New York</option>
							<option value=""> North Carolina</option>
							<option value=""> North Dakota</option>
							<option value=""> Ohio</option>
							<option value=""> Oklahoma</option>
							<option value=""> Oregon</option>
							<option value=""> Pennsylvania</option>
							<option value=""> Rhode Island</option>
							<option value=""> South Carolina</option>
							<option value=""> South Dakota</option>
							<option value=""> Tennessee</option>
							<option value=""> Texas</option>
							<option value=""> Utah</option>
							<option value=""> Vermont</option>
							<option value=""> Virginia</option>
							<option value=""> Washington</option>
							<option value=""> West Virginia</option>
							<option value=""> Wisconsin</option>
							<option value=""> Wyoming</option>
                        </select>
						<input type="text" class="control2" id="country">
                    </div>
					<hr>
					<div class="address">
                        <label for="address"><h3> Billing Address</h3></label> 
                        <input type="text" class="control" id="address">
						<label for="city"><h3>City</h3></label> 
						<label for="state"><h3 class="c">State</h3></label> 
						<label for="country"><h3 class="d">Country</h3></label> </br>
                        <input type="text" class="control1" id="city">
                        <select id="expiration-date1">
                            <option value=""> -none-</option>
                            <option value=""> Alabama</option>
                            <option value=""> Alaska</option>
                            <option value=""> Arizona</option>
                            <option value=""> Arkansas</option>
                            <option value=""> California</option>
							<option value=""> Colorado</option>
							<option value=""> Connecticut</option>
							<option value=""> Delaware</option>
							<option value=""> Florida</option>
							<option value=""> Georgia</option>
							<option value=""> Hawaii</option>
							<option value=""> Idaho</option>
							<option value=""> Illinois</option>
							<option value=""> Indiana</option>
							<option value=""> Iowa </option>
							<option value=""> Kansas</option>
							<option value=""> Kentucky</option>
							<option value=""> Louisiana</option>
							<option value=""> Maine</option>
							<option value=""> Maryland</option>
							<option value=""> Massachusetts</option>
							<option value=""> Michigan</option>
							<option value=""> Minnesota</option>
							<option value=""> Mississippi</option>
							<option value=""> Missouri</option>
							<option value=""> Montana</option>
							<option value=""> Nebraska</option>
							<option value=""> Nevada </option>
							<option value=""> New Hampshire</option>
							<option value=""> New Jersey</option>
							<option value=""> New Mexico</option>
							<option value=""> New York</option>
							<option value=""> North Carolina</option>
							<option value=""> North Dakota</option>
							<option value=""> Ohio</option>
							<option value=""> Oklahoma</option>
							<option value=""> Oregon</option>
							<option value=""> Pennsylvania</option>
							<option value=""> Rhode Island</option>
							<option value=""> South Carolina</option>
							<option value=""> South Dakota</option>
							<option value=""> Tennessee</option>
							<option value=""> Texas</option>
							<option value=""> Utah</option>
							<option value=""> Vermont</option>
							<option value=""> Virginia</option>
							<option value=""> Washington</option>
							<option value=""> West Virginia</option>
							<option value=""> Wisconsin</option>
							<option value=""> Wyoming</option>
                        </select>
						<input type="text" class="control2" id="country">
                    </div>
					<hr>
					<div class="address">
                        <label for="number"><h3> Phone Number</h3></label> 
                        <input type="tel" class="control2" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
					</div>
					<div class="discount">
                        <label for="number"><h3> Discount or Coupon </h3></label> 
                        <input type="text" class="control2" id="discount" name="discount">
					</div>
                    </br>
	
					
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn-default" id="confirm-purchase">Confirm</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
	<br>
	<h3 class="b">Arrrrr</h3>
	<br>
	
	
	
	
	
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.payform.min.js" charset="utf-8"></script>
    <script src="payment.js"></script>
	<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>
