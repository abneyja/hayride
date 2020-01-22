<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styll.css">
<script src="main.js" defer></script>
</head>
<body>

<div class="navbar">
  <a  href="index.php">Home</a>
  <a href="search.php">Book</a>
  <a class="active" href="parking.php"> Parking </a>
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

<h1> Parking </h1>
<div class="search">
<h2>Book the Best Spaces</h2>
<form>



<label for="Locations" id="loco">Location</label> 
<div class="form-group" id="card-number-field">
<input type="text" class="form-control2" id="cardNumber">
</div>
</br>
<br>
      
	  
<hr>

<label for="dates" id="loco">Dates</label> 
</br>
  
      <h3>From</h3><h3 class="b">Arrival Dateeeeee</h3> 
	  <h3>To</h3> </br>
	  
      <input type="date" name="dates" id="dates" value="" required="required" placeholder="Departure" />
	  <input type="date" name="dates" id="dates" value="" required="required" placeholder="Returns" />
	  
<hr>
	  
<label for="dates" id="loco">Parking Space</label> 
</br>
<br>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">1 Parking Space<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">2 Parking Space<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">3 Parking Space<br>
</label>
<label class="radio-inline">
<input type="radio" name="travels" value="travels">4 Parking Space<br>
</label>
<br>
<br>
<div class="buttons">
<a href="inventory.php" class="button">Find Parking</a>
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