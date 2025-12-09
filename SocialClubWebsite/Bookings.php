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


<body style="background-color:#161515;">
    <div class="text">
        <p>At the venue, we have a main function room which can be seen below. This can be booked out to allow for whatever your needs may be. We also have the main lounge with the darts, pool and snooker tables being held here, with the bowling green being held to the side of the carpark.</p>
    </div>

    <main>
      <div class="enquiry">
        <h1>Booking/General enquiry form</h1>
          <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="phonenumber" placeholder="Phonenumber">
            <input type="text" name="mail" placeholder="Email address">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit" name="submit">SUBMIT</button>
          </form>
      </div>
    </main>
</body>