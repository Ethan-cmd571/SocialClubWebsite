
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Kings Norton Ex Servicemens</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="topnav" id="myTopnav">
            <a href="Home2.php" class="active">Home</a>
            <a href="Sports2.php">Sports</a>
            <a href="Socials2.php">Socials</a>
            <a href="Events2.php">Events</a>
            <a href="Bookings2.php">Bookings</a>
            <a href="Logout.php">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
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



<body style="background-color:#161515;">
  <h1> Weekly events </h1>
  <div class="text">
    <p>We currently have 2 events that occur weekly, with free pool and snooker occurring on a Monday, and a weekly quiz that takes place every Tuesday.</p>
  </div>
      <div class="row3">
        <div class="column3">
          <img src="Images/Freepool1.jpg" style="width:100%">
        </div>
        <div class="column3">
          <img src="Images/PoolAndSnooker.jpg" style="width:100%">
        </div>
      </div>

    <!-- This area will be adjusted depending on upcoming events -->
  <h1>Upcoming events </h1>
  <div class="text">
    One upcoming event we have is boxing night, which will take place on [day]. Purchase your tickets at the club for £10.
      <div class="row3">
        <div class="column3">
          <img src="Images/Boxing1.jpg" style="width:100%">
        </div>
        <div class="column3">
          <img src="Images/Boxing2.jpg" style="width:100%">
        </div>
      </div>
    </body>
</html>