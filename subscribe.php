<!DOCTYPE html>
<html>
<head>
	<title>KupSip</title>

</head>
<style type="text/css">
#footer {
	width:100%;
	height:100px;
	position:relative;
	bottom:0;
	left:0;
}
		div.row_subscribe{	
				width: 1200px;
				max-width:1200px;
				margin:auto;
			}
			i.check_mark{
				font-size:30px;
				top:30px;
				display: block;
				margin-left:  110px; 
				margin-top: 10px;
			}
			div.add_space_subscription{
			height: 110px;
		}
		
    @media screen and (max-width: 500px){
    	div.row_subscribe{	
				width: 100%;
				max-width:100%;
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
	<div class="row_subscribe">
		<div class="w3-panel w3-card-2">
	 		<div class="w3-container w3-center">
	  			<h3>WHAT IS YOUR FAVORITE ROAST LEVEL?</h3>
	 		</div>
			<div class="w3-row">
				<div class="w3-col s112 m1 l1 w3-margin"></div>
					<div onclick="disp_coffee_type(1)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
						<i id="1" class="material-icons check_mark w3-tale">done</i>
			    		<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins"  style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image ">
			    		<p class="w3-center">Light</p>
			    		<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="disp_coffee_type(2)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="2" class="material-icons check_mark " >done</i>
				    	<img src="image/blends.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="disp_coffee_type(3)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="3" class="material-icons check_mark " >done</i>
				    	<img src="image/cf3.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="disp_coffee_type(4)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="4" class="material-icons check_mark " >done</i>
				    	<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
				  	</div>
			</div> 
			<div id="coffee_type" class="w3-hide">
				<div class="w3-container w3-center">
		  			<h3>WHICH TYPE OF COFFEE?</h3>
		  			<h4>you can select more than one option</h4>
		 		</div>
				<div class="w3-row">
					<div class="w3-col s12 m1 l1 w3-margin"></div>
						<div onclick="how_often(5)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
							<i id="5" class="material-icons check_mark " >done</i>
				    		<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins"  style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image ">
				    		<p class="w3-center">Light</p>
				    		<p class="w3-center" >text</p>
						</div>
				  		<div class="w3-col s12 m1 l1"></div>
					    <div onclick="how_often(6)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
					    	<i id="6" class="material-icons check_mark " >done</i>
					    	<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
					    	<p class="w3-center">Light</p>
					    	<p class="w3-center" >text</p>
						</div>
				  		<div class="w3-col s12 m1 l1"></div>
					    <div onclick="how_often(7)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
					    	<i id="7" class="material-icons check_mark " >done</i>
					    	<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
					    	<p class="w3-center">Light</p>
					    	<p class="w3-center" >text</p>
						</div>
				  		<div class="w3-col s12 m1 l1"></div>
					    <div onclick="how_often(8)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
					    	<i id="8" class="material-icons check_mark " >done</i>
					    	<img src="C:\Users\Public\Pictures\Sample Pictures\Penguins.jpg" alt="penguins" align="center" style="width: 100px; height: 100px; margin-left: 14px; " class="w3-section w3-image">
					    	<p class="w3-center">Light</p>
					    	<p class="w3-center" >text</p>
					  	</div>
				</div>
			</div>
			<div id="how_often" class="w3-hide">
				<div class="w3-container w3-center">
		  			<h3>HOW OFTEN?</h3>
		  			<h4>each shipment contains one 12 oz bag of coffeE beans</h4>
		 		</div>
				<div class="w3-row">
					<div class="w3-col s12 m1 l1 w3-margin"></div>
					<div onclick="which_tire(9)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
						<i id="9" class="material-icons check_mark " >done</i>
			    		<p class="w3-center">Light</p>
			    		<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="which_tire(10)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="10" class="material-icons check_mark " >done</i>
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="which_tire(11)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="11" class="material-icons check_mark " >done</i>
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
					</div>
			  		<div class="w3-col s12 m1 l1"></div>
				    <div onclick="which_tire(12)" class="w3-col s11 m2 l2  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin">
				    	<i id="12" class="material-icons check_mark " >done</i>
				    	<p class="w3-center">Light</p>
				    	<p class="w3-center" >text</p>
				  	</div>
				</div>
			</div>
			<div id="which_tire" class="w3-hide">
				<div class="w3-container">
		  			<h3 style="text-align: center;">WHICH TIER?</h3>
		 		</div>
				<div class="w3-row w3-center ">
					<div class="w3-col s12 m1 l1 w3-margin"><p></p></div>
					<div class="w3-col s11 m4 l4  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin-left">
					    <div class="w3-center w3-margin-top">
					    	<i id="1" class="fa fa-rupee " style="font-size:24px"></i>
					    	<i id="1" class="fa fa-rupee" style="font-size:24px"></i>
					    </div>
						<p class="w3-center">DELUXE</p>
						<p class="w3-center" >you have discering coffee taste and looking to try some of best coffee out there.</p>
					</div>
					<div class="w3-col s12 m1 l1"><p></p></div>
					<div class="w3-col s11 m4 l4  w3-light-grey w3-panel w3-card-2 w3-hover-shadow w3-margin-left">
					    <div class="w3-center w3-margin-top">
					    	<i id="1" class="fa fa-rupee" style="font-size:24px"></i>
					    	<i id="1" class="fa fa-rupee" style="font-size:24px"></i>
					    	<i id="1" class="fa fa-rupee" style="font-size:24px"></i>
					    </div>
					    <p class="w3-center">EXCLUSIVE</p>
					    <p class="w3-center" >you seek out the best of the best.you like small-batch coffees available in limited.</p>
					</div>
					<div class="w3-col s12 m1 l1 w3-margin "><p></p></div>
				</div>
			</div><br><br><br>
		</div>
		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer.php') ?>
		</div>

	</div>
	<script>
		function disp_coffee_type(x){
			document.getElementById("coffee_type").classList.add("w3-show");
			document.getElementById(x).classList.add("w3-text-teal");
		}

		function how_often(x){
			document.getElementById("how_often").classList.add("w3-show");
			document.getElementById(x).classList.add("w3-text-teal");
		}
		function which_tire(x){
			document.getElementById("which_tire").classList.add("w3-show");
			document.getElementById(x).classList.add("w3-text-teal");
		}
	</script>
</body>
</html>