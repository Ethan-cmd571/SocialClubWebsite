

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
  <h1>Sports</h1>
  <div class="text2">
    <p>At Kings Norton Ex Servicemen, we provide a number of different sports that both members and non members to participate in. The sports that are provided at the club are as follows:</p>
  </div>
    <div class="text2">
    <p>Darts: There are 2 dartboards within the premises, each of which can be used at any time (barring league games). We have darts teams that currently compete on a Monday, Tuesday and a Thursday.</p>
  </div>

      <div class="row2">
        <div class="column2">
          <img src="Images/Darts1.jpg" style="width:100%">
        </div>
        <div class="column2">
          <img src="Images/Darts2.png" style="width:100%">
        </div>
        <div class="column2">
          <img src="Images/Darts3.jpg" style="width:100%">
        </div>
      </div>

  <div class="text2">
    <p>Dart players:</p>
  </div>

      <table class="centerTable">
        <tr>
          <th>Firstname</th>
          <th>Surname</th>
        </tr>
        <?php 
        $conn = mysqli_connect("localhost","root","","phplogin");
        $sql = "SELECT * FROM darts";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["firstname"]  ."</td><td>"  . $row["surname"]  ."</td></tr>";
          }
        } else {
          echo "No results";
        }
        $conn->close();

        ?>
      </table>

    <div class="text2">
      <p>Pool: We currently have 2 pool tables on the premises, with free pool and snooker occurring on Mondays. We currently have a pool team that compete on (day)</p>
    </div>

      <div class="row3">
        <div class="column3">
          <img src="Images/Pool1.jpg" style="width:100%">
        </div>
        <div class="column3">
          <img src="Images/Pool2.jpg" style="width:100%">
        </div>
      </div>
      
    <div class="text2">
      <p>Snooker: We currently have 2 snooker tables on the premises, with free pool and snooker occuring on Mondays. We currently have a snooker team that compete on (day)</p>
    </div>

       <div class="row3">
        <div class="column3">
          <img src="Images/Snooker1.jpg" style="width:100%">
        </div>
        <div class="column3">
          <img src="Images/Snooker2.jpg" style="width:100%">
        </div>
      </div>

    <div class="text2">
      <p>Bowls: We have 1 bowling green on the premises, off to the side of the carpark. We have a team that competes on (day)</p>
    </div>

      <div class="row3">
        <div class="column3">
          <img src="Images/Bowls1.jpg" style="width:100%">
        </div>
        <div class="column3">
          <img src="Images/Bowls2.jpg" style="width:100%">
        </div>
      </div>

    <div class="text2">
      <p>Dominoes: We have a dominoes team as well that competes on (day)</p>
    </div>
    </body>
</html>