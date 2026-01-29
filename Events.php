<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kings Norton Ex Sercicemens club, social club based in Kings Norton, Birmingham, where a variet of pub sports take place">
    <meta name="keywords" content="Kings norton ex servicemens club, Kings Norton ex servicemen, Kings Norton, Social club">
    <meta name="author" content="Ethan Dearn">
    <meta name="copyright" content="Kings Norton Ex Servicemens Club">
    <link rel="stylesheet" href="styles.css">
    <title>Kings Norton Ex Servicemens Club</title>
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
  <!---<a href="Login.php">Membership login</a>!-->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<body style="background-color:#161515;">
  <script>
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
  <h1> Weekly events </h1>
  <div class="text">
    <p>We currently have 2 events that occur weekly, with free pool and snooker occurring on a Monday, and a weekly quiz that takes place every Tuesday.</p>
  </div>
      <div class="row3">
        <div class="column3">
          <img src="Images/Freepool1.jpg" style="width:100%" alt="Free pool and snooker">
        </div>
        <div class="column3">
          <img src="Images/PoolAndSnooker.jpg" style="width:100%" alt="Pool and Snooker tables">
        </div>
      </div>

    <!-- This area will be adjusted depending on upcoming events -->
  <h1>Upcoming events </h1>
  <div class="text">
    One upcoming event we have is boxing night, which will take place on [day]. Purchase your tickets at the club for £10.
      <div class="row3">
        <div class="column3">
          <!-- Only need to adjust the image based on location and alt text -->
          <img src="Images/Boxing1.jpg" style="width:100%" alt="Boxing">
        </div>
        <div class="column3">
          <img src="Images/Boxing2.jpg" style="width:100%" alt="Boxing">
        </div>
      </div>
</body> 