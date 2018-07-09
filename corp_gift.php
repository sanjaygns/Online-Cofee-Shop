<!DOCTYPE html>
<html>
<head>
	<title>KupSip</title>

</head>
<style>

#footer {
	width:100%;
	height:100px;
	position:relative;
	bottom:0;
	left:0;
}
		div.row_gift{	
				width: 1200px;
				max-width: 1200px;
				margin:auto;
			}
			
			/*div.add_space_subscription{
			height: 110px;*/
		}
	#log_btn{
		height: 40px;
	}
		
    @media screen and (max-width: 500px){
    	
    	div.row_gift{	
				width: 450px;
				max-width:450px;
				margin:auto;	
			}
		div.add_space_subscription{
			height: 160px;
		}
    	
        
    }
		
	
</style>

<body>

	<?php include('header.php') ?>

	<div class="add_space_subscription"></div>
	<div class="row_gift">
		<div class="w3-row w3-card-8">
			<div class="w3-row">
				<div class="w3-col l3 m3 s1"><p></p></div>
				<div class="w3-col l6 m6 s10">
					<div class="w3-row">

						<div class="w3-col l12 w3-center">
							<h2><b>EXCLUSIVE COFFEE GIFTS FOR YOUR BUSINESS PARTNER</b></h2>
						</div>
					</div>
					<div class="w3-row">
						<div class="w3-col l12 w3-center">
							<h5>We invitet you to share the great gift of the leaf with your colleagues, co-workers or business partners. Present the Coffee Forte experience with a curated of health-promoting executive and incentive gifts. Our corporate tea gifts reflect your commitment to excellence, quality and style. </h5>
						</div>
					</div>
					<br>
					<div class="w3-row">
						<div class="w3-col l12 w3-center">
							<button class="w3-btn w3-teal"><b>GET IN TOUCH</b></button>
						</div>
					</div>
					<br>
					<div class="w3-row">
						<div class="w3-col l12 m12 s12 w3-center">
							<h2><b>CORPORATE GIFTS</b></h2>
						</div>
					</div>
				</div>
				<div class="w3-col l3 m3 s1"><p></p></div>
			</div>
			<br>
			<div class="w3-row w3-center">
				<div class="w3-col l2 m2"><p></p></div>
				<div class="w3-col l2 m2 s12"><img src="image/cofg1.jpg"></div>
				<div class="w3-col l1 m1"><p></p></div>
				<div class="w3-col l2 m2 s12"><img src="image/cofg1.jpg"><p></p></div>
				<div class="w3-col l1 m1"><p></p></div>
				<div class="w3-col l2 s12"><img src="image/cofg1.jpg"><p></p></div>				
				<div class="w3-col l2 m2 "><p></p></div>
			</div>
		</div>	
		<div class="w3-row w3-teal">
			
			<div class="w3-col l12 m12 s12">
				<?php include('contact_us.php') ?>
			</div>
			
		</div>

		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer_demo.php') ?>
		</div>
	</div>
</body>
</html>