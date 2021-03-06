<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigationBar.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon lib-->
    <script src="scripts/script.js"></script>
    <title>Steganography</title>
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

    <?php
    if(isset($_SESSION['username']))
    {
      echo '<a href="steg.php">Steganography</a>';
    }
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
      
  <div class="container">
    <div class="row">
      <div class="col1 col-md-5 text-center" >
        <img src="images/1.jpeg" alt="Code #1">
          <div class="row">
            <div class="col1row2 col-md-12">
            <h3>Want to know more?</h3>
            <p>Check out more about steganography <a href="about.php" style="color: #476930;">here</a>.</p>
            <p>More about us <a href="contact.php" style="color: #476930;">here</a>.</p>
            <p>And more about your rights <a style="color: #476930;" href="https://www.gov.uk/government/publications/copyright-notice-digital-images-photographs-and-the-internet/copyright-notice-digital-images-photographs-and-the-internet">here</a>.</p>
          </div>
        </div>
      </div>
      <div class="col2 col-md-2">
        <div class="maintitle">
          S<br>
          T<br>
          E<br>
          G<br>
          A<br>
          N<br>
          O<br>
          G<br>
          R<br>
          A<br>
          P<br>
          H<br>
          Y
        </div>
        <!-- <img class="titleImg" src="images/black_title.png" alt="Title"> -->
      </div>
      <div class="col3 col-md-5">
        <div class="uprightcol">
          <h3>Steganography</h3>
          <p>Steganography is the practice of concealing a message within another message or a physical object. In computing/electronic contexts, a computer file, message, image, or video is concealed within another file, message, image, or video..</p>

            <button id="start" class="btnstart" onclick="OnStartButtonPressed()" >Hide your message!</button>

          <p></p>
        </div>
        <div class="row">
            <div class="col3row2 col-md-12 text-center">
              <img src="images/2.jpeg" alt="Code #2">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  function OnStartButtonPressed() {
  <?php
  if(!isset($_SESSION['username']))
  {
      echo 'location.href = "login.php"';
  }
  else
  {
      echo 'location.href = "steg.php"';
  }
  ?>
}
</script>
</html>