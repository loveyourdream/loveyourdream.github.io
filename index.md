h1{
	color:red;
	size:20px;
	font-family:Trajan Pro;
	text-align: center;
}
h2{
	text-align:center;
	color:red;
	size:100px;
	font-family:Cambria;
}

h3{
	font-family:Hobo Std;
	color:black;
}
img {
    opacity: 1.0
    
}

img:hover {
    opacity: 0.7;
}
continer{
   width: 500px;
   height: 450px;
   margin: 40px auto;
   padding: 50px;
   box-sizing: border-box;
   background-image: tip2.jpg;
   box-shadow: 0 10px 15px -8px #000;
   border: 2px black;
   -webkit-border-radius:5px;
   text-align: center;
}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  //max-width: 1000px;
  position: relative;
  margin: auto;
    width: 600px;
    
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
  transition: background-color 1.2s ease;
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
}

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="plain(4).jpg" style="width:100%">
  <div class="text"></div>
</div>
    
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="plain(5).jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
   // window.setTimeout ("slideShow ("+slides+")",1000);
 //window.setTimeout("slideShow("+slides+")",1000);
}
</script>
<br>

<footer align="bottom"><b>
<p style="font-size:20px;">Posted by:Devanshi Doshi       Shivani Garud</p>
<p style="font-size:20px;">Contact Information 1 :<a href="#">doshi.d@somaiya.edu</a></p>
<p style="font-size:20px;">Contact Information 2 :<a href="#">s.garud@somaiya.edu</a></p></b>
</footer>
</body>
</html>


