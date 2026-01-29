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
  <h1>Membership</h1>
    <div class="text">
        <div class="text2">
            <p>While we accept all people to come and drink on the premises, as well as participate in our multiple sports teams, members will get better prices on their drinks, as well as potential discounts on upcoming events. You can become a new member for the price of £20, with renewals happening yearly (often around January time) costing £10 to renew for the following year. If you become a member, you will be able to participate in our highly anticipated members day, a yearly day where every drink is increasingly discounted with multiple separate tournaments taking place with cash prizes available for each winner.</p>    
        </div>
    </div>
    <div class="text3">
      <!--<a href="Login.php">Already a member? Login here</a>!-->
    </div>

</body>
</html>