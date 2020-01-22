<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="s.css">
<script src="main.js" defer></script>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="search.php">Book</a>
  <a href="#news"> Parking </a>
   <a href="contact.php">Contact</a>
  <div class="dropdown">
  <button class="dropbtn"><img src="sh1.png">
      <i class="fa fa-caret-down"></i>
    </button>
   </div>
   <div class="dropdown">
  <button class="dropbtn"><img src="sh1.png">
      <i class="fa fa-caret-down"></i>
    </button>
   </div>
  <div class="dropdown">
    <button class="dropbtn"><img src="p1.png">
      <i class="fa fa-caret-down"></i>
    </button>
	</div>
    <div class="dropdown-content">
	  <a href="r.php">Register</a>
      <a href="log.php">Login</a>
      <a class="active" href="#">Profile</a>
    </div> 	
</div>

<h1>Welcome to your profile</h1>
<h2> NAME OF THE USER HERE<h2>
<div>

<input type="file" class="size" onchange="previewFile()"><br>
</div>
<script>
   function previewFile(){
       var preview = document.querySelector('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();  //calls the function named previewFile()
  </script>



</body>
</html>