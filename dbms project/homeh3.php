<!DOCTYPE html>
<html>
<head>
<title>e-voting.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1.center {
  text-align: center;
  color: black;
border: 2px solid green;
  border-radius: 12px;

}
#para5
{
text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: green
}

li {
  float: left;
 border-right: 1px solid #bbb;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}
li:last-child {
  border-right: none;
  color:red;
}


li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:red;
}

.dropdown:hover .dropdown-content {
  display: block;
}
######################################################################
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
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
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


</style>
</head>
<body>
<h1 class="center">E-VOTING<br>vote from your home</h1>

<ul>
  <li><a href="#home">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">hand book of rules</a>
    <div class="dropdown-content">
      <a href="#">candidate</a>
      <a href="#">voter</a>
      <a href="#">admin</a>
    </div>
  </li>
<li><a href="query3.php">Any query?</a></li>
<li><a href="#news">About</a></li>
<li><a href="#news">rate us</a></li>
<li><a href="ratepage.php">view rating</a></li>
<li style="float:right"><a href="addh3.php">Sign in</a></li>
<li style="float:right"><a href="reg3.php">Register</a></li>
</ul>

<h1 id="para5">Welcome to the Digital Voting</h1>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="a1.JPEG" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="a2.JPEG" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="a6.JPEG" style="width:100%">
  <div class="text">Caption Three</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div3{
position :absolute;
right:1250px;
top:950px;
}
div2{
position :absolute;
right:50px;
top:950px;
}
div4{
position :absolute;
right:350px;
top:950px;
}
div5{
position :absolute;
right:650px;
top:950px;
}
div6{
position :absolute;
right:950px;
top:950px;
}
.card {
  box-shadow:10px 10px 10px 10px rgba(0, 0, 0, 0.2);
  width: 250px;
  text-align: center;
  font-family: arial;
  height:500px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
#para3{
position:absolute;
top:825px;
right:650px;
}
</style>

<h1  id="para3">ABOUT US</h1>
<div3>
<div class="card">
  <img src="s1.jpg" alt="Vignesh" style="width:100%">
  <h1>G S S Vignesh</h1>
  <p class="title">CSE-A 19044</p>
  <p>Amrita University</p>
 <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
</div3>
<div2>
<div class="card">
  <img src="s1.jpg" alt="Hari srinivas" style="width:100%">
  <h1>k Hari srinivas</h1>
  <p class="title">CSE-A 19054</p>
  <p>Amrita University</p>
 <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
</div2>
<div4>
<div class="card">
  <img src="s1.jpg" alt="Akhil" style="width:100%">
  <h1>Chirla Akhil</h1>
  <p class="title">CSE-A 19028</p>
  <p>Amrita University</p>
 <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
</div4>
<div5>
<div class="card">
  <img src="s1.jpg" alt="Syam sai" style="width:100%">
  <h1>Konakalla Syam </h1>
  <p class="title">CSE-A 19070</p>
  <p>Amrita University</p>
 <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
</div5>
<div6>
<div class="card">
  <img src="s1.jpg" alt="Santhosh" style="width:100%">
  <h1>Ch Santhosh</h1>
  <p class="title">CSE-A 19029</p>
  <p>Amrita University</p>
 <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
</div6>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.slidecontainer {
  width: 50%;
margin-top:350px;
}

.slider {
  -webkit-appearance: none;
  width: 500px;
  height: 25px;
  background:green;
  outline: none;
  align:center;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: black;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: red;
  cursor: pointer;
}
div1{
position:absolute;
left:525px;
top:1350px;
}
#para1 {
  color: black;
  position:absolute;
  top:1550px;
  left:700px;
}
#para2{
 position:absolute;
  top:1600px;
  left:670px;
}
</style>
<h1 id="para1">Rate us</h1>
<p id="para2">Drag the slider to give rating</p>
<div1>
<div class="slidecontainer">
  <input type="range" min="1" max="5" value="3" class="slider" id="myRange">
  <p>value: <span id="demo"></span></p>
</div>
</div1>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<style>
.button {
  background-color: #4CAF50;
  color: white;
  width: 150px;
  text-align: center;
  text-decoration: none;
  position: absolute;
  top:1800px;
  left:700px;
  font-size: 16px;
  cursor: pointer;
}
</style>
<button class="button">View ratings</button>
</body>
</html>