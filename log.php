<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <script src="register.js" defer></script>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="search.php">Book</a>
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
      <a class="active" href="log.php">Login</a>
      <a href="#">Profile</a>
    </div>
  </div> 	
</div>


    <div class="container">
	 <fieldset>
    <h1>Log In</h1>

    <p>
      <label for="email">Email</label> </br>
      <input name="email" id="email" value="" required="required" placeholder="Email" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" />
    </p>

    <p>
	  <label for="password">Password</label> </br>
      <input type="password" id="password" name="password"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,20}" required>
    </p>
   
<div id="formErrors">
	<span id="email_error" style="color:red;visibility: hidden;"> *Email is not valid</span><br>
	<span id="password_empty" style="color:red;visibility: hidden;"> *Password is not valid.</span><br>			
</div>

    <button name="save" id="submit" type="submit" onclick="return checkForm()"> Log In </button>
	
	<p id="lol"><a href="r.php">Don't have an accaunt? Register.</a></p>
	
	<div class="footer">
     <p>© 2019 HAYRIDE Air Lines, Inc.|Travel may be on other airlines.</p>
    </div>

  </fieldset>
</div>

</body>
</html>