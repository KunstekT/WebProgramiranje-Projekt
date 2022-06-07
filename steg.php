<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigationBar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon lib-->
    <link rel="stylesheet" href="css/main.css"  type="text/css">
    <style>
			
    </style>

    <!--Web stranica sadrži logiranje korisnika te kada je korisnik prijavljen može 
    koristiti mogućnost uploadanja slike u koju se sakriva string(niz) koji preda korisnik. 
    Steganografija autorovog naziva kako bi u slučaju krađe ili kršenja autorskih prava,
    korisnik mogao dokazati svoje autorsko pravo. Postoji mogućnost snimanja slika na svoj 
    račun uz podatke kada je izvršena steganografija. Ove podatke može vidjeti samo korisnik 
    na web stranici.

    Team name: Čempres

    Potrebne tehnologije: Bootstrap - responsive design
                                Javascript, PHP - steganografija i funkcionalnosti stranice
                                Firebase - login korisnika
                                CSS3 - oblikovanje
                                HTML5

    Stranice:   Landing page - index
                About us
                How it works - Steganography
                Log-in/sign-in - pop up or page
                User settings (if logged in)
    
    Landing page:   | small_image                                big_image(1/2)         small_box("Try it yourself")|
                    | small_box("Kratko o, link na about us")    big_image(2/2)                 small_image         |
    
    Steganography:  | small_box     small_box       small_box|
                    |               big_box                  |

    About us:       |box(1/4)                                |
                    |box(2/4)       box(1/4)                 |
                    |box(3/4)       box(2/4)         box(1/4)|
                    |box(4/4)       box(3/4)         box(2/4)|
                    |               box(4/4)         box(3/4)|
                    |                                box(4/4)|

    -->
</head>
<body>
	<!-- <div class="topnav" id="myTopnav">
		<a href="index.php" class="active">Home</a>
		<a href="login.php">Log in</a>
		<a href="#news">News</a>
		<a href="#contact">Contact</a>
		<a href="#about">About</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		  <i class="fa fa-bars"></i>
		</a>
	</div> -->
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
    <a href="about.php">About</a>
	<?php
	if(isset($_SESSION['username']))
	{
		echo '<a href="steg.php">Steganography</a>';
	}
	?>
    <!-- <a href="steg.php" class="active">Steganography</a> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>
      
<div class="container">
    <div class="row">
		<div class="col-md-1" ></div>
		<div class="col1 col-md-2" >
		<h2>Image:</h2>
		<input id="file" type="file"/><br/>
		<p></p>
		<h2>Text:<span id="capacity"></span></h2>
		<textarea id="text">Hello World!</textarea>
		<div class="btns">
			<span id="hide" class="btnshowhide">Encode</span>
			<span id="read" class="btnshowhide">Decode</span>
		</div>	
	</div>
	<div class="col-md-1" ></div>
	<div class="col2 col-md-3">
		<div id="original" class="half">
			<h2>Original Image:   </h2>
			<img id="img" src="images/default.jpg"/>
		</div>
	</div>
	<div class="col-md-1" ></div>
	<div class="col4 col-md-3">
		<div id="decodedimage" style="visibility:hidden;">
			<div id="stego" class="half">
				<h2>Encoded Image:</h2>
				<img id="cover" src=""/>
				<a id="download" class="btndownload" download="cover.png" rel="nofollow"><strong>Download</strong></a>
			</div>
		</div>

		<div id="messageArea" class="invisible">
			<h2>Message:</h2>
			<div id="message"></div>
		</div>
		
		</div>
	<div class="col1 col-md-1" ></div>
	</div>
  </div>

<!-- <div class="note">Click "D"-button or if it does not work perform right-click to download</div> -->

<script type="text/javascript" src="build/steganography.js"></script>
<script type="text/javascript">

function handleFileSelect(evt) {
	var original = document.getElementById("original"),
		stego = document.getElementById("stego"),
		img = document.getElementById("img"),
		cover = document.getElementById("cover"),
		message = document.getElementById("message");
	if(!original || !stego) return;

	var files = evt.target.files; // FileList object

	// Loop through the FileList and render image files as thumbnails.
	for (var i = 0, f; f = files[i]; i++) {

		// Only process image files.
		if (!f.type.match('image.*')) {
			continue;
		}

		var reader = new FileReader();

		// Closure to capture the file information.
		reader.onload = (function(theFile) {
			return function(e) {
				img.src = e.target.result;
				img.title = escape(theFile.name);
				stego.className = "half invisible";
				cover.src = "";
				message.innerHTML="";
				message.parentNode.className="invisible";
				updateCapacity();
			};
		})(f);

		// Read in the image file as a data URL.
		reader.readAsDataURL(f);
		decodedimage = document.getElementById("decodedimage");
		decodedimage.style="visibility: visible";
	}
}

function hide() {
	var stego = document.getElementById("stego"),
		img = document.getElementById("img"),
		cover = document.getElementById("cover"),
		message = document.getElementById("message"),
		textarea = document.getElementById("text"),
		download = document.getElementById("download");
	if(img && textarea) {
		cover.src = steg.encode(textarea.value, img);
		stego.className = "half";
		message.innerHTML="";
		message.parentNode.className="invisible";
		download.href=cover.src.replace("image/png", "image/octet-stream");
		
		decodedimage = document.getElementById("decodedimage");
		decodedimage.style="visibility: visible";
	}
}

function read() {
	var img = document.getElementById("img"),
		cover = document.getElementById("cover"),
		message = document.getElementById("message"),
		textarea = document.getElementById("text");
	if(img && textarea) {
		message.innerHTML = steg.decode(img);
		if(message.innerHTML !== "") {
			message.parentNode.className="";
			textarea.value = message.innerHTML;
			updateCapacity();
		}
	}
}

function updateCapacity() {
	var img = document.getElementById('img'),
		textarea = document.getElementById('text');
	if(img && text)
		document.getElementById('capacity').innerHTML='('+textarea.value.length + '/' + steg.getHidingCapacity(img) +' chars)';
}

window.onload = function(){
	document.getElementById('file').addEventListener('change', handleFileSelect, false);
	document.getElementById('hide').addEventListener('click', hide, false);
	document.getElementById('read').addEventListener('click', read, false);
	document.getElementById('text').addEventListener('keyup', updateCapacity, false);
	//hide();
	updateCapacity();
};

</script>
</body>
</html>
