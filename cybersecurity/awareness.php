
<!DOCTYPE html>
<html>
<head>
    <title>Cyber Security Awareness</title>
    <link rel="stylesheet" type="text/css" href="css/cyberstyle.css">
    <link rel="icon" href="img/logocca.jpg">
    
</head>
<body>
    
<header>
    <div class="logo">
        
        <a href="awareness.php">
    <img src="img/logocca.jpg">
    </a>
</div>
<nav class="navbar">
<div class="navbar-links">
            <ul>
                <li><a href="staysafe.php">Stay Safe Online</a>
                <ul class="dropdown">
                
                <div class="typeselect">
                    <li><a href="all.php">All</a></li>
                    <li><a href="movie.php">Movie</a></li>
                    <li><a href="music.php">Music</a></li>
                    <li><a href="ona.php">ONA</a></li>
                    <li><a href="ova.php">OVA</a></li>
                    <li><a href="special.php">Special</a></li>
                    <li><a href="tv.php">TV</a></li>
                    <li><a href="unknown.php">Unknown</a></li>
                    </div>
                    </ul>
                </li>
                <li><a href="animelist.php">Anime List</a>
                <ul class="dropdown">
                    <li><a href="animelist.php">List of Anime in Alphabetical Order</a></li>
                    <li><a href="totalnumber.php">Total number of per Genre & Type</a></li>                    
                </ul>
                </li>
                </li>
                <li><a href="popular.php">Popular</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>
                
                </li>
            </ul>
        </div>
    </nav>
 
</header>
<div class="slogan">
      <p>
        Educating and empowering<br>our global digital society
      </p>
      </div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/sec1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/sec2.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/sec3.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    </body>
</html>