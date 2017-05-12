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

  <title>d61nqaetpcu0lv Landing Page</title> <!--Change this -->

  <!-- CSS Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/landing.css" type="text/css">

</head>

<body>

    <!-- Pop up appears when a user signs up with an email that's already taken -->
    <?php if (isset($_SESSION['Unsuccessful login'])): ?>
      <div class="alert alert-warning">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Sign In Error!</strong> Incorrect username or password.
        </div>
        <?php unset($_SESSION['Unsuccessful login']); ?>
    <?php endif; ?>

    <div class = "container">
        <div class = "row" style = "margin-top: 10%">
          <div class = "col-lg-12 text-center">
            <form class = "form-horizontal" action = "controller/login.php" method = "POST">
              <fieldset>
                <div class = "loginForm">
                  <legend>Sign in</legend>
                  <div class = "control-group">
                    <div class = "controls">
                      <input type = "text" id = "email" placeholder = "Email" class = "input-xlarge customInput" name = "email">
                    </div>
                  </div>
                  <div class = "control-group">
                    <div class = "controls">
                      <input type = "password" id = "password" placeholder = "*******" class = "input-xlarge customInput" name = "password">
                    </div>
                  </div>
                  <div class = "control-group">
                    <button class = "btn btn-success">Sign in</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
    </div>

</body>
</html>
