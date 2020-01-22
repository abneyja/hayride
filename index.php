<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="s.css">
<script src="main.js" defer></script>
</head>
<body>

<div class="navbar">
  <a class="active" href="#home">Home</a>
  <a href="search.php">Book</a>
  <a href="#news"> Parking </a>
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

<br>
<br>
</br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="d1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="d2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="d3.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="buttons">
<a href="search.php" class="button">Book Flight</a>
<a href="#" class="button">Parking Service</a>
</div>
<div class="footer">
  <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
</div>
</body>
</html>