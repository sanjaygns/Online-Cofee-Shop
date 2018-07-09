<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	  	<link rel="stylesheet" href="css/home_page.css">
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<style type="text/css">
		div.vert_line{
			margin-top: 75px;
			height: 170px;
			width: 1px;
		}
		span.horizontal_line{
			height: 2px;
			width: 220px;
		}
		div.ver{
			display: block;
		}
		#hr{
			display: none;
		}
		@media screen and (max-width: 500px){
			div.ver{
				display: none;
			}
			#hr{
				display: block;
			}
		}
	</style>
<body>
	<div class="w3-row w3-teal">
	<div class="w3-col l1"><p></p></div>
	<div class="w3-col l10 s12">
	<div class="w3-row contact w3-teal">
		<div class="w3-col l1"></div>
		<div class="w3-col l6 s12 w3-teal">
			<form action="#" class="w3-container w3-card w3-text-white w3-margin w3-teal" style="border-color: transparent; ">
				<h2 class="w3-center" id="fnt">Contact Us</h2>
				 
				<!-- <div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
				    </div>
				</div> -->

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border w3-text-grey" name="last" type="text" placeholder="Name">
				    </div>
				</div>

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border w3-text-grey" name="email" type="text" placeholder="Email">
				    </div>
				</div>

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border w3-text-grey" name="phone" type="text" placeholder="Phone">
				    </div>
				</div>

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border w3-text-grey" name="message" type="password" placeholder="password">
				    </div>
				</div>
				<div class="w3-center">
					<button class="w3-btn w3-section w3-black w3-border w3-center" >SUBMIT</button>
				</div>
				<hr id="hr">
			</form>
			
		</div>

		<div class="w3-col l1 m1 w3-center ver">
			<div class="w3-col l5"><p></p></div>
			<div class="w3-col l2">
			<div class="w3-center w3-white vert_line"></div></div>
			<div class="w3-col l5"><p></p></div>
		</div>
		<div><p></p></div>
		<div class="w3-col l5 s12 w3-container w3-margin-top">
			<h2 id="fnt">COFFEE FAQ'S</h2>
			<p>We invitet you to share the great gift of the leaf with your colleagues, co-workers or business partners. Present the Coffee Forte experience with a curated of health-promoting executive and incentive gifts. Our corporate tea gifts reflect your commitment to excellence, quality and style.</p>
			<div class="w3-col l1"></div>
			<hr >
		</div>
		
		
	</div>
	</div>
	<div class="w3-col l1"><p></p></div>
	</div>
</body>
</html>