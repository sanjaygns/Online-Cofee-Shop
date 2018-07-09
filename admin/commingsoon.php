<!DOCTYPE html>
<html>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.parallax {
  /* The image used */
  background-image: url('cofe_h.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax1 {
  /* The image used */
  background-image: url('cofe.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */

.bgimg {
    background-image: url('cofe_h.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	width: 806px;
}

hr {
    margin: auto;
    width: 40%;
}
.bgimg .middle h1 {
	font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
</style>
<body>
<div >
  <p><img src="logo.png" width="170px" height="150px" align="right"></p>
  </div>
<div class="parallax"></div>

  
  <div class="middle">
    
    <h2 style="color:white;">"The Biggest Relaunch of Indian coffee to the world"*</h2>
    
    <p id="demo" style="font-size:40px; color:white; "></p>
  </div>
  <div class="bottomleft" style="font-size:50px; color:white;">
    <p>Be Ready ! !</p>
  </div>


<div class="parallax"></div>

<div class="w3-content w3-section" style="max-width:100%;">
  <img class="mySlides" src="abt.png" style="width:100%">
  <img class="mySlides" src="info.png" style="width:100%">
  <img class="mySlides" src="click.png" style="width:100%">
</div>

<div class="parallax1"></div>

<div align="center" >
<p><img src="coff1.png" width="170px" height="150px" ></p>
<p><img src="logo.png" width="170px" height="150px" ></p>
<p><img src="coff2.png" width="170px" height="150px" ></p>
</div>

<div class="parallax1"></div>


<script>


var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}



// Set the date we're counting down to
var countDownDate = new Date("Feb 14, 2017 17:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "D " + hours + "H "
    + minutes + "M " + seconds + "S ";
    
    
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
