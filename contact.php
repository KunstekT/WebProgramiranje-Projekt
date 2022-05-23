<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigationBar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon lib-->
    <script src="scripts/script.js"></script>
    <title>Steganography</title>
    <style>
      .overlap{
        margin-top: 100px;
        margin-left:-150px;
      }
    </style>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="home.php" class="active">Home</a>
    <?php
      if(!isset($_SESSION['username']))
      {
          echo '<a href="login.php">Log in</a>';
      }
      else
      {
          echo '<a href="login.php?logout=1">Log out</a>';
      }
	  ?>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
      
    <div class="container">
        <div class="row">
          <div class="col-xs-2">
          </div>
          <div class="col-xs-4">
            <div class="well">
              <h3>Čempres == Born To Impress</h3>
              <img src="images/cempres.png" width="200" height=700 alt="Cempres">
            </div>
          </div>
          <div class="overlap col-xs-4">
            <div class="well">
              <h3>Who are we?</h3>
              <p>We are just students who are trying hard not to fail a subject.</p>
              <p>Čempres is a name that was born from our lack of imagination and pressure to have an actual team name.</p>
              <p>But even so, they say diamonds are made under pressure, as such, since we are Čempres, it is only right we are here to Impress!</p>
            </div>
          </div>
          <div class="col-xs-2">
          </div>
        </div>
    </div>
</body>
</html>