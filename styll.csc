body {
  font-family: Arial, Helvetica, sans-serif;
  background:url("world.jpg") fixed center;
  background-size: auto auto;
}

fieldset {
  border: none;
}

input, textarea {
  border: 1px solid #aaa;
  width: 100%;
  height:40px;
  border-radius: 4px;
}

input[aria-invalid="true"], textarea[aria-invalid="true"] {
  border: 2px solid #f00;
}

form p label abbr {
  border: none;
  font-weight: bold;
  color: #f00;
}

.container {
  background-color: #f1f1f1;
  padding: 10px;
  margin-top: 15px;
  max-width: 550px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  margin-left:32%;
  height: 660px;
  
}

button{
	color: white;
	background-color: #3498DB;
	height:50px;
	width: 100% 
}

h1{
	text-align:center;
}

#submit:hover {
  background-color: purple;
}

#lol{
	text-align:center;
}
a{
	color: blue;
}

a:hover {
  color: orange;
}

a:active{
	color:#C311A2;
	
}

.navbar {
  overflow: hidden;
  background-color: #333;

}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  max-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: purple;
}

.dropdown:hover .dropdown-content {
  display: block;
}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: orange;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

h2.b {
  visibility: hidden;
}

.footer {
   bottom:0;
   left:0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   position: fixed;
}

.active {
  background-color: blue;
}