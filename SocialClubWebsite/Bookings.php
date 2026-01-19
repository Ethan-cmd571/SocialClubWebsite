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
  <!---<a href="Login.php">Membership login</a>!-->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<body style="background-color:#161515;">
    <div class="text">
        <p>At the venue, we have 2 function rooms, one which can hold 60 people and one which can hold 200 people, which can be seen below. This can be booked out to allow for whatever your needs may be. We also have the main lounge with the darts, pool and snooker tables being held here, with the bowling green being held to the side of the carpark.</p>
    </div>
    
    <div class="row">
      <div class="column">
        <img src="Images/Funcroom1.jpg" style="width:100%">
      </div>
      <div class="column">
        <img src="Images/Funcroom2.jpg" style="width:100%">
      </div>
      <div class="column">
        <img src="Images/Funcroom3.jpg" style="width:100%">
      </div>
      <div class="column">
        <img src="Images/Funcroom4.jpg" style="width:100%">
      </div>
    </div>

    <div class="text2">
      <p>If you would like to make an enquiry please fill out the form below.</p>
    </div>
    <main>
      <div class="enquiry">
        <h1>Booking/General enquiry form</h1>
          <form class="form login-form" action="contactForm.php" method="post">
            <svg class="form-icon-left" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
              <input class="form-label" for="name" type="text" name="name" placeholder="Full name">
              <input class="form-label" for="phonenumber" type="tel" name="phonenumber" placeholder="Phone number" inputmode="tel" autocomplete="tel" required pattern="^\+?[0-9()\s.-]{7,20}$" title="Enter a valid phone number (7–20 digits; you may include +, spaces, -, ().)">
              <input class="form-label" for="mail" type="email" name="mail" placeholder="Email address" autocomplete="email" required>
              <input class="form-label" for="subject" type="text" name="subject" placeholder="Subject">
              <textarea name="description" placeholder="Description" rows="4" cols="80"></textarea>
              <button class="btn blue" for="submit" type="submit" name="submit">SUBMIT</button>
          </form>
      </div>
    </main>
</body>