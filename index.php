<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" class="gr__bootsnipp-env_elasticbeanstalk_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
	<title>KupSip</title>
	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=0.9">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	  	<link rel="stylesheet" href="css/kupsip_web_menu.css">
	  	<link rel="stylesheet" href="css/home_page.css">
	  	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Franklin">
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   		<script src="./Thumbnail Carousel - Bootsnipp.com_files/jquery-1.10.2.min.js.download"></script>
    <script src="./Thumbnail Carousel - Bootsnipp.com_files/bootstrap.min.js.download"></script>
</head>
<style type="text/css">
    /* Removes the default 20px margin and creates some padding space for the indicators and controls */
.carousel {
    margin-bottom: 0;
	padding: 0 40px 30px 40px;
}
/* Reposition the controls slightly */
.carousel-control {
	left: -12px;
}
.carousel-control.right {
	right: -12px;
}
/* Changes the position of the indicators */
.carousel-indicators {
	right: 50%;
	bottom: -5px!important;
	margin-right: -19px;
	padding-top: 20px;
}
/* Changes the colour of the indicators */
.carousel-indicators li {
	background: #c0c0c0;
}
.carousel-indicators .active {
background: #333333;
}
@font-face {
    font-family: 'OmbudsmanStencil';
    src: url(../font/OmbudsmanStencil.ttf);
	}
div.h2.soc{
	color:red!important;
}

    </style>
 
	<body>
		<div>
		<?php include('header.php') ?>
		</div>
		<div class="row_home">
			<div class="slider">
				<div class="w3-content w3-display-container slider_main" >
					  <img class="mySlides" src="image/background.jpeg" width="100%">
					  <img class="mySlides" src="image/slide3.jpg" width="100%">
					  <img class="mySlides" src="image/cfe3.jpg">
					  <img class="mySlides" src="image/cfe4.jpg">
					  <img class="mySlides" src="image/cfe5.jpg">
					  
						<div class="w3-center w3-section w3-large w3-text-white w3-display-middle" style="width:100%">
						    <div class="w3-left w3-padding-left w3-hover-text-khaki arrow" onclick="plusDivs(-1)">&#10094;</div>
						    <div class="w3-right w3-padding-right w3-hover-text-khaki arrow" onclick="plusDivs(1)">&#10095;</div>
						   
				  		</div>
				</div>
				<div >
					<div id="plus" class="txtbox w3-hide"><p><input class=" w3-input w3-transparent w3-text-white" type="text" placeholder="Search.."></p></div>
					<!--<button onclick="search_btn1()" id="gly_search" class="w3-center w3-btn w3-teal">
						<span class="glyphicon glyphicon-search"></span>
					</button> -->
				</div>
				<div class="trans">
					<img class="tra w3-center" src="image/tra_image.png">
					<div class="tra_txt w3-text-white"><h2 id="tagline1">THE BEST COFFEE <br>YOU EVER MADE</h2></div>
					<div class="w3-text-white w3-center txt dslider_hider"><h5 class="w3-margin">Fresher, better-tasting coffee beans <br>delivered to your as you need it</h5></div>
					<div class="w3-text-white w3-center txt mslider_hider"><h5 class="w3-margin">Fresher, better-tasting coffee beans delivered to your as you need it</h5></div>

					<div class="w3-center"><button class="w3-btn w3-white btn_m111" style="font-family:'OmbudsmanStencil';font-size: 18px ">KUPSIP CLUB</button></div>
				</div>
			</div>
			<div class="w3-row" style="background-color: #E3E3E3; width: 100%;">
			
				<div class="w3-col w3-card-8">
						<div class="w3-row row11" >
						<div class="w3-col l3 m3 w3-center"><p></p></div>
							<div class="w3-col l3 m3 w3-center"><p></p></div>
							<div class="w3-col  w3-center" data-wow-iteration="infinite" data-wow-duration="1500ms">
								<h1 style="font-family:'OmbudsmanStencil'">BOX OF THE MONTH</h1>
								<h3 class="w3-margin" style="font-family:'OmbudsmanStencil'">Don’t stretch and reach for coffee anymore. Coffee itslef will reach for you now on…<br>Here is our Coffee promise to you.

									Forget having to walk to the closest market to buy Coffee. <!-- Forget the struggle you undergo while explaining the Coffee store guy your exact requirement. Coffee is a luxury and you deserve to receive Coffee with love.</h5>

									<h5>Once every month, we will knock your door with aromatic Coffee goodness! Pick the number of months you would like to receive coffee here. (a link)</h5>

									<h5>Indeed, the best way to start your month --></h3>
								<button class="w3-btn w3-teal"><b>Explore</b></button>
								
								
							</div>
							
						</div>
						<div class="w3-row dis_img_all_cof_main w3-center">
							
							<div class="w3-col w3-center">								
								<div class="w3-row w3-margin-top">
									<div class="w3-row">
										<div class="w3-col l3 m3 w3-center"><p></p></div>
										<div class="w3-col l6 m6 w3-center">
											<h1 id="soc" style="font-family:'OmbudsmanStencil';">SHOP OUR COLLECTION</h1>
											<button id="" class=" w3-btn w3-teal w3-animate-left"><b>SHOP</b></button>
										</div>
										<div class="w3-col l3 m3 w3-center"><p></p></div>
									</div>
									<br>
									<div class="w3-row img_all_cof w3-center">
										<div class="w3-col l2 m2 s6 "><img src="image/coff1.png"><p></p><p>Coffee</p></div>
										<div class="w3-col l2 m2 s6 "><img src="image/coff2.png"><p></p><p>Coffee</p></div>
										<div class="w3-col l2 m2 s6 "><img src="image/coff3.png"><p></p><p>Coffee</p></div>
										<div class="w3-col l2 m2 s6 "><img src="image/coff4.png"><p></p><p>Coffee</p></div>
										<div class="w3-col l2 m2 s6 "><img src="image/coff5.png"><p></p><p>Coffee</p></div>
										<div class="w3-col l2 m2 s6 "><img src="image/coff6.png"><p></p><p>Coffee</p></div>
									</div>
								</div>
								
							</div>

							
						
					</div>
				</div>			
				
			</div>
			<div class="padding_bar" style="background-color: #E3E3E3; width: 100%; height: 50px; "></div>
			<div class="w3-row" style="background-color: #CCCCCC">
			<div class="w3-col l2 m2"><p></p></div>
				<div class="w3-col l8 m8 s12">
					<div class="w3-row w3-center">
						<h3 style="font-family:'OmbudsmanStencil'">WHY KUPSIP IS THE FRESHEST</h3>
						<P>KUPSIP connects coffee to people.<br> Not to resellers, but to coffee drinkers</P>
					</div>
					</div>			
				<div class="w3-col l2 m2"></div>
			</div>
					<div class="w3-row">
					<div class="w3-col l6 m6 s12 w3-center ">
						
						<img class="" width="100%" src="image/kupsip_infographic1.png">
					</div>
					<div class="w3-col  l6 m6 s12 w3-center">
						<img width="100%" src="image/kupsip_infographic2.png">
					</div>
					</div>
				
			<div class="w3-row row3" style="z-index: 1000">
				<div class="w3-col l6 m6 row31 w3-center" style="background-color: black;">
					
					<div class="w3-col   s12 w3-center w3-text-white row32">
						<h2 style="font-family:'OmbudsmanStencil'">MEET YOUR COFFEE GURU</h2>
						<p>When you get a Kupsip coffee subscription, you get matched with a coffee curator - a coffee expert who learns the kinds of coffee you like and sends you coffee based on your performances.</p>
						<!-- <button class="w3-btn w3-teal"> Read More...</button> -->
					</div>
					
				</div>
				<div id="bg101" class="w3-col l6 m6 s12 p_img1">
					<!-- <img src="image/cofe.jpg" width="100%" height="339px" > -->
				</div>			
			</div>
			<div class="w3-row row4" style="z-index: 1000">
				<div id="bg102" class="w3-col l6 m6 s12 p_img1">
					<!-- <img src="image/cofe_h.jpg" width="100%" height="338px" > -->
				</div>	
				<div class="w3-col l6 m6 row41 w3-center" style="background-color: white;">
					
					<div class="w3-col   w3-center row42">
						<h2 style="font-family:'OmbudsmanStencil'">MEET OUR ROASTERS</h2>
						<p>We match you with coffees you'll love from over 30 of the country's best award-winning artisan coffee roasters. All coffee is roasted for your order and shipped directly to you.</p>
						<!-- <button class="w3-btn w3-teal"> Read More...</button> -->
					</div>
					
				</div>		
			</div>
			
			
			<div class="w3-row row5" style="background-color: #C4C4C4; z-index: 999; ">
				
				<div class="w3-col s_row w3-center">
				<h2 style="font-family:'OmbudsmanStencil'">FEATURED ROASTERS</h2>
				<div data-gr-c-s-loaded="true">
				<div class="container" style="width: 100% !important;  ">
				<div class="row_client_slider" >
					<div class="span121">
			    	    <div class="well_abc"> 
			                <div id="myCarousel" class="carousel slide">
			                 
			                
			                 
			                <!-- Carousel items -->
			                <div class="carousel-inner c_inner">
			                    
			                <div class="item active">
			                	<div class="row-fluid">
			                	  <div class="span3 inline"><a href="#" class=""><img src="image/marc coffee.png" alt="Image" style="max-width:100%;"></a>
			                	  <h5>Marc's Coffee</h5></div>
			                	  <div class="span3 inline"><a href="#" class=""><img src="image/flying squirrel.png" alt="Image" style="max-width:100%;"></a>
			                	  <h5>Flying Squirrel</h5> </div>
			                	  <div class="span3 inline"><a href="#" class=""><img src="image/Tariero.jpeg" alt="Image" style="max-width:100%;"></a>
			                	  <h5>Tariero</h5></div>
			                	  <div class="span3 inline"><a href="#" class=""><img src="image/WOODI PECKS.png" alt="Image" style="max-width:100%;"></a>
			                	  <h5>Woodi Pecks</h5></div>
			                	  <div class="span3 inline"><a href="#" class=""><img src="image/leo coffee.png" alt="Image" style="max-width:100%;"></a>
			                	  <h5>Leo Coffee</h5></div>
			                	</div><!--/row-fluid-->
			                </div><!--/item-->
			                 
			                   
					</div>
				</div>
			</div>
			

		</div>
		</div>
		<div class="w3-col l2 m1 s1"></div>
		</div>
			<div class="w3-row row6">
				<div class="w3-col l5 m5 " style="background-color: black">
					<div class="w3-col l2 m2"><img  src="image/wocs.png"> </div>
					<div class="w3-col l10 m10 w3-text-white row61">
						<div><p></p></div>
						<div class="w3-row ft"><p></p></div>
						<div id="font"><span class="fnt">WHAT OUR </div>
						<div><p></p></div>
						<div><p></p></div>
						<div class="w3-row ft"><p></p></div>
						<div id="font"><span class="fnt"><b style="color: transparent">..</b>  CUSTOMER SAY </div>
						
					</div>
					
				</div>
				<div class="w3-col l7 m7 s9 row62" style="background-color: teal">
					<div class="w3-row"><p></p></div>
					<div class="w3-row" style="margin-top: 2% ">
						<div class="w3-col l2 m1 s1"><p></p></div>
						<div class="w3-col l8 m11 s11">
							<div class="mySlider_test">
								<div class="testimonial">
									"Thank you Kupsip. My coffee powder customized and home delivered to me..</br> Really saved me tension and time." 
									<h4 class="w3-right" ></br></h4></br>
									<h4 class="w3-right" >| Kerla, India </h4>
									<h4 class="w3-right" >Ciju Jose |  </h4>
									
								</div>
							</div>
							<div class="mySlider_test">
								<div class="testimonial">
									"Hey, I found the best tasting coffee.. I tried my own style of coffee from your options. Liked it alot. Looking forward to more.
									<h4 class="w3-right" ></br></h4></br>
									<h4 class="w3-right" >| Bangalore, India </h4>
									<h4 class="w3-right" >Raveena Kaur |  </h4>
								</div>
							</div>
							<div class="mySlider_test">
								<div class="testimonial">
									"When I got back to the US I missed Indian filter Coffee so much, but thanks to Kupsip it still ensures I get my favourate coffee all the way from India..."	
									<h4 class="w3-right" ></br></h4></br>
									<h4 class="w3-right" >| South Carolina, USA </h4>
									<h4 class="w3-right" >Scott Porter |  </h4>
								</div>
							</div>
							</div>
						<div class="w3-col l2 m1 s1"><p></p></div>
					</div>
				</div>
			</div>

			<div id="content">

			</div>
			<div id="footer">
				<?php include('footer.php') ?>
			</div>
			

		</div>
	</body>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		     dots[i].className = dots[i].className.replace(" w3-white", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-white";
		}

		var thumbs1 = document.getElementById("thumbnail-slider");
            var thumbs2 = document.getElementById("thumbs2");
            var closeBtn = document.getElementById("closeBtn");
            var slides = thumbs1.getElementsByTagName("li");
            for (var i = 0; i < slides.length; i++) {
                slides[i].index = i;
            };
		
			
	</script>
	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlider_test");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "none"; 
		    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1} 
		    x[slideIndex-1].style.display = "block"; 
		    setTimeout(carousel, 8000); 
		}
</script>
<!-- <script>
	window.onscroll = function() {myFunction()};

	function myFunction() {
	    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
	        document.getElementById("tagline").className = "slideUp";
	    }
	}
</script> -->
<script>
	var search_on = 0;
	function search_btn1(){
		
		if (search_on == 0) {
		document.getElementById("plus").classList.add("w3-show");
		document.getElementById("plus").classList.add("w3-animate-opacity");
		search_on = 1;	
	}
	else{
		document.getElementById("plus").classList.remove("w3-show");
		document.getElementById("plus").classList.remove("w3-animate-opacity");
		document.getElementById("plus").classList.add("w3-hide");
		search_on = 0;	
	}
	}		
</script>

</html>