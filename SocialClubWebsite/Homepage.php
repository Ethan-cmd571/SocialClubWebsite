<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kings Norton Ex Servicemans Club</title>
</head>

<body>
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="Homepage.php" class="active">Home</a>
  <a href="Sports.php">Sports</a>
  <a href="Socials.php">Socials</a>
  <a href="Events.php">Events</a>
  <a href="Membership.php">Membership</a>
  <a href="Bookings.php">Bookings</a>
  <a href="Login.php">Membership login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<body style="background-color:#161515;"></body>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="Images/FrontDoor.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="Images/BowlingGreen.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Images/GeneralLoungeArea.jpg" style="width:100%">
  </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="Images/PoolAndSnooker.jpg" style="width:100%">
  </div>

    <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Images/Teles.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>  
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

    <h1>Welcome to Kings Norton Ex-Service Mens Club</h1>

  <div class="text2">
    <p>
        At Kings Norton Ex-Service mens club, we pride ourselves on being an inclusive area where people of all walks of life can meet for some good fun. Whether your here to join one of our competitive teams, here to watch the sport with your friends, want to hire out the function room for an occasion or just want to come for a good laugh with your mates, there’s something for everyone here.
    </p>
  </div>


</body>
</html>