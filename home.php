<?php

  session_start();

?>

<!DOCTYPE html>
<html lang = "en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home Page</title>

  <!-- CSS Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/profile.css" type="text/css">

</head>

<body>

  <div class = "container-fluid display-table">
    <div class = "row display-table-row">
      <div class = "col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id = "sidebar">
        <div class = "navi">
          <ul>
            <li><a class = "active" href="home.php"><span class = "hidden-xs hidden-sm">View Rooms</span></a></li>
            <?php if(isset($_SESSION['admin'])): ?>
            <li><a href="admin_logs.php"><span class = "hidden-xs hidden-sm">View Logs</span></a></li>
            <li><a href="admin_account.php"><span class = "hidden-xs hidden-sm">Add Account</span></a></li>
            <li><a href="admin_sensors.html"><span class = "hidden-xs hidden-sm">Add Sensors</span></a></li>
            <?php else: ?>
            <li><a href="regular_logs.html"><span class = "hidden-xs hidden-sm">View Logs</span></a></li>
            <?php endif; ?>
            <li>
              <form action="controller/logout.php" method="post">
                  <div class = "control-group">
                    <button class = "btn btn-success">Sign Out</button>
                  </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
      <div class = "col-md-10 col-sm-11 v-align box">
        <div class = "labels text-center">
          <legend>Room Occupation Statuses</legend>
        </div>
        <div class = "text-center">
          <ul>
            <li><span class = "roomList">Room #1: </span><span class = "roomList">Occupied</span></li>
            <li><span class = "roomList">Room #2: </span><span class = "roomList">Vacant</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</body>
