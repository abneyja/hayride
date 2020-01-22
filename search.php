<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styll.css">
<script src="main.js" defer></script>
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

<h1> Book a flight </h1>
<div class="search">
<h2>Please select your trip:</h2>
<form>
<label class="radio-inline">
<input type="radio" name="trip" value="One-way">One-way<br>
</label>
<label class="radio-inline">
<input type="radio" name="trip" value="Roundtrip">Roundtrip<br>
</label>
<hr>


<label for="Locations" id="loco">Locations</label> 
</br>
<br>
      <input name="locations" id="locations" value="" required="required" placeholder="From" />
	  <input name="locations" id="locations" value="" required="required" placeholder="To" />
	  
<hr>

<label for="dates" id="loco">Dates</label> 
</br>
  
      <h3>Departure Date</h3><h3 class="b">Arrival Dateeeeee</h3> 
	  <h3>Arrival Date</h3> </br>
	  
      <input type="date" name="dates" id="dates" value="" required="required" placeholder="Departure" />
	  <input type="date" name="dates" id="dates" value="" required="required" placeholder="Returns" />
	  
<hr>
	  
<label for="dates" id="loco">Travels</label> 
</br>
<br>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">1 Passenger<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">2 Passengers<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">3 Passengers<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">4 Passengers<br>
</label>
<br>
<br>
<div class="buttons">
<a href="inventory.php" class="button">Find</a>
</form>
</div>
 <h2 class="b">This heading is hidden</h2>
<br>
<br>
</br>

<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>