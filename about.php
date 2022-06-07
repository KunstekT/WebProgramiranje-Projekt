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
    <a href="home.php">Home</a>
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
    <a href="about.php" class="active">About</a>
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
        <div class="col-md-1" ></div>
        <div class="col-md-3" id="aboutcol">
          <h3>Steganography vs cryptography</h3>
          Whereas cryptography is the practice of protecting the contents of a message alone, steganography is concerned with concealing the fact that a secret message is being sent and its contents. </div>
        
          <div class="col-md-7">
          <div class="row">
            <br>
            <br>
            <br>
          </div>          
          <div class="row">
            <div class="col-md-1" ></div>
            <div class="col-md-5" id="aboutcol">
              <h3>What does it do?</h3>
              Steganography includes the concealment of information within computer files. In digital steganography, electronic communications may include steganographic coding inside of a transport layer, such as a document file, image file, program, or protocol.
            </div>
            <div class="col-md-1" ></div>
            <div class="col-md-5">
              <div class="row">
                <br>
                <br>
                <br>
              </div>
              <div class="row">
                <div class="col-md-12" id="aboutcol">
                  <h3>Advantage</h3>
                  The advantage of steganography over cryptography alone is that the intended secret message does not attract attention to itself as an object of scrutiny. Plainly visible encrypted messages, no matter how unbreakable they are, arouse interest and may in themselves be incriminating in countries in which encryption is illegal.
                </div>
               </div>
            </div>
          </div>
        </div>

        <div class="col-md-1" ></div>
      </div>
    </div>
</body>
</html>
