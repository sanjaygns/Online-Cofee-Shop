<!DOCTYPE html>
<html>
<head>
	<title>KupSip</title>
	<link rel="stylesheet" href="css/home_page.css">

</head>
<style>

#footer {
	width:100%;
	height:100px;
	position:relative;
	margin-top: -20px;
}
	@font-face {
	    font-family: 'OmbudsmanStencil';
	    src: url(../font/OmbudsmanStencil.ttf);
		}
		div.row_gift{	
				width: 100%;
				max-width: 100%;
				margin-top: -25px;
			}
			
			/*div.add_space_subscription{
			height: -10px!important;
		}*/
	
    @media screen and (max-width: 500px){
    	
    	div.row_gift{	
				width: 450px;
				max-width:450px;
				margin:auto;	
			}
		div.add_space_subscription{
			height: 140px;
		}
    	
        
    }
		
	
</style>

<body>

	<?php include('header.php') ?>

	<!-- <div class="add_space_subscription"></div> -->
	<div class="row_gift">
		<div class="w3-row ">
			<div class="w3-col l12 m12 s12">
				<img src="image/CoffeeFarmer.jpg" height="auto" width="100%">
			</div>
		</div>
		<div class="w3-row w3-card-8">
			<div class="w3-col l3 m3 s1"><p></p></div>
			<div class="w3-col l6 m6 s10">
				<div id="fnt" class="w3-row w3-center">
					<h2 id="fnt"><b>WHOLESALE</b></h2>
					<p>We pick our teas directly from source and immediately vaccum park (Aroma Seal Packing) to ensure that they retain their freshness, aroma and flavour. To read more about our Guarateed freshness promise,<a href="#">Click here</a></p>
				</div>
			</div>
			<div class="w3-col l3 m3 s1"><p></p></div>
		</div>
		
		
		<div class="w3-row w3-teal">
			
			<div class="w3-col l12 m12 s12">
				<?php include('contact_us.php') ?>
			</div>
			
		</div>
		<div class="w3-row w3-card-8">
			<div class="w3-col l2 m2 s1"><p></p></div>
			<div class="w3-col l8 m8 s10 w3-center" id="fnt">
				<h2 id="fnt">WOULD YOU LIKE SOME FINE COFFEE, THEN? <a style="background-color: transparent; "><h3 class="w3-btn w3-teal">YES</h3></a></h2>
			</div>
			<div class="w3-col l2 m2 s1"><p></p></div>
		</div>
		<div class="w3-row w3-card-8 w3-grey" style="height:40px; padding: 7px; ">
			<div class="w3-col l2 m2 s1"><p></p></div>
			<div class="w3-col l8 m8 s10 w3-center" id="fnt">
				<h6 id="fnt">FOR ANY ENQUIRY CALL US ON: US:+14084987042, UK:+442033189688, AUSTRALIA:+61286078878</h6>
			</div>
			<div class="w3-col l2 m2 s1"><p></p></div>
		</div>

		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer.php') ?>
		</div>
	</div>
</body>
</html>