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

  <title>Create Account</title>

  <!-- CSS Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/profile.css" type="text/css">
  
</head>

<body>

  <!-- Pop up appears when a user signs up with an email that's already taken -->
  <?php if (isset($_SESSION['Account with the email already exists'])): ?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Sign Up Error!</strong> Email already in use.
      </div>
      <?php unset($_SESSION['Account with the email already exists']); ?>
  <?php endif; ?>

  <!-- Pop up appears when a users signs up and the passwords do not match -->
  <?php if (isset($_SESSION['Password and confirm_password do not match'])): ?>
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Confirmation Error!</strong> Passwords do not match.
      </div>
      <?php unset($_SESSION['Password and confirm_password do not match']); ?>
  <?php endif; ?>

  <!-- Pop up appears when a user successfully signs up -->
  <?php if (isset($_SESSION['Successful signup'])): ?>
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> User account successfully created.
      </div>
      <?php unset($_SESSION['Successful signup']); ?>
  <?php endif; ?>
    
  <div class = "container-fluid display-table">
    <div class = "row display-table-row">
      <div class = "col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id = "sidebar">
        <div class = "navi">
          <ul>
            <li><a href="home.php"><span class = "hidden-xs hidden-sm">View Rooms</span></a></li>
            <li><a href="admin_logs.php"><span class = "hidden-xs hidden-sm">View Logs</span></a></li>
            <li><a class = "active" href="admin_account.php"><span class = "hidden-xs hidden-sm">Add Account</span></a></li>
            <li><a href="admin_sensors.html"><span class = "hidden-xs hidden-sm">Add Sensors</span></a></li>
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
          <legend>Create New Account</legend>
        </div>
        <div class = "text-center">
          <form class = "form-horizontal" action = "controller/signup.php" method = "POST">
            <fieldset>
              <div class = "createForm">
                <div class = "control-group">
                  <div class = "controls">
                    <input type = "text" id = "email" name = "email" placeholder = "Email Address" class = "input-xlarge customInput">
                  </div>
                </div>
                <div class = "control-group">
                  <div class = "controls">
                    <input type = "password" id = "password" name = "password" placeholder = "*******" class = "input-xlarge customInput">
                  </div>
                </div>
                <div class = "control-group">
                  <div class = "controls">
                    <input type = "password" id = "confirm_password" name = "confirm_password" placeholder = "*******" class = "input-xlarge customInput">
                  </div>
                </div>
                <div class = "control-group">
                  <div class = "controls">
                    <input type = "text" id = "first_name" name = "first_name" placeholder = "First Name" class = "input-xlarge customInput">
                  </div>
                </div>
                <div class = "control-group">
                  <div class = "controls">
                    <input type = "text" id = "last_name" name = "last_name" placeholder = "Last Name" class = "input-xlarge customInput">
                  </div>
                </div>
                <div class = "control-group">
                  <button class = "btn btn-success">Create Account</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
