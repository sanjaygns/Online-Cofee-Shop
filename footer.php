<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	  	<link rel="stylesheet" href="css/kupsip_web_menu.css">
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<style>
		/*div.footer_w{

			height: 250px;
			max-width: 100%;
			padding: 10px;
			
		}*/
		/*div.row_footer{
			height: 250px;
			max-width: 100%;
			padding: 10px;
		}*/
	/*	#mobile{
			display: none;
		}*/
		div.footer_m{
			display: none;
		}
		body{
			max-width: 100%
		}
		@media screen and (max-width: 500px){
			div.footer_m{
			display: block;
			max-width: 100%;
			margin-top: -22px;
			z-index: 1000;
		}


			@import url('http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:300,400,600');
			* {
			  box-sizing: border-box;
			  font-family: 'Open Sans', sans-serif;
			  font-weight: 300;
			}
			div.footer_w{
				display: none;
			}
			a {
			  text-decoration: none;
			  color: inherit;
			}
			p {
			  font-size: 1.1em;
			  margin: 1em 0;
			}
			.description {
			  margin: 1em auto 2.25em;
			}
			body {
			  width: 100%;
			  min-width: 300px;
			  max-width: 400px;
			  margin: 1.5em auto;
			  color: #333;
			}
			h1 {
			  font-family: 'Pacifico', cursive;
			  font-weight: 400;
			  font-size: 2.5em;
			}
			ul {
			  list-style: none;
			  padding: 0;
			}
			ul .inner {
			  padding-left: 1em;
			  overflow: hidden;
			  display: none;
			  border-width: 2px;
			}
			ul .inner.show {
			  display: block;
			}
			ul li {
				border-color: white;
				border-width: 2px;
			 /* margin: .5em 0;*/
			}
			ul li a.toggle {
			  width: 100%;
			  display: block;
			  background: rgba(0, 0, 0, 0.78);
			  color: #fefefe;
			  padding: .75em;
			  border-radius: 0.15em;
			  transition: background .3s ease;
			}
			ul li a.toggle:hover {
			  background: rgba(0, 0, 0, 0.9);
			}
			a.sub_acc_bg{
				background-color: #787878!important;
			}

		}
	</style>
	<body>
	<div class="w3-row footer_w w3-text-white">
		<div class="w3-col l4 m4" style="background-color: #333335; height: 230px; padding: 10px; ">
			<div class="w3-row">
				<div class="w3-col l1 "><p></p></div>
				<div class="w3-col l10 "><h3><u>Shop With Us</u></h3></div>
				<div class="w3-col l1 "><p></p></div>
							</div>
			<div class="w3-row w3-justify">
				<div class="w3-col l1 "><p></p></div>
				<div class="w3-col l4 m4">
					<a href=""><h4>Type</h4></a>
					<a href="aroma_mocha.php"><h6>Aroma Mocha</h6></a>
					<a href="baristas.php"><h6>Baristas</h6></a>
					<a href="grinders_cafe.php"><h6>Grinders Cafe</h6></a>
					<a href="tatiana_cafe.php"><h6>Tatiana's Cafe</h6></a>

				</div>
				<div class="w3-col l3 m3 w3-justify">
					<a href=""><h4>Speciality</h4></a>
					<a href="new.php"><h6>New</h6></a>
					<a href="best_selling.php"><h6>Best Selling</h6></a>
					<a href="sale.php"><h6>Sale</h6></a>
					<a href="samples.php"><h6>Samples</h6></a>
				</div>
				<div class="w3-col l4 m4 w3-justify">
					<h4>Business</h4>
					<a href="wholesale.php"><h6>Wholesale</h6></a>
					<a href="corp_gift.php"><h6>Corportae Gifting</h6></a>
				</div>
			</div>
		</div>
		<div class="w3-col l5 m5" style="background-color: #333335; height: 230px; padding: 10px;">
			<div class="w3-row w3-center">
			<div class="w3-col l5 m5 w3-justify">
				<div class="w3-row">
				<div class="w3-row"></div>
					<div class="w3-col l12 m12">
						<h3><u>Customer Service</u></h3>
					</div>
				</div>							
				<a href="shipping.php"><h6>Shipping & Delivery</h6></a>
				<a href="help_desk.php"><h6>Help Desk</h6></a>
				<a href="contact_us.php"><h6>Contact Us</h6></a>
			</div>
			<div class="w3-col l3 m3 w3-justify">
				<div class="w3-row">
				<div class="w3-row"></div>
					<div class="w3-col l12 m12">
						<h3><u>About US</u></h3>
					</div>
				</div>							
				<a href="about_kupsip.php"><h6>About KupSip</h6></a>
				<a href="team.php"><h6>Team</h6></a>
				<a href="newsroom.php"><h6>Newsroom</h6></a>
				<a href="testimonial.php"><h6>Testumonials</h6></a>
				<a href="brew_guide.php"><h6>Brew Guide</h6></a>
				<a href="careers.php"><h6>Careers</h6></a>
			</div>
			<div class="w3-col l4 m4 w3-justify">
				<div class="w3-row">
				<div class="w3-row"></div>
					<div class="w3-col l12 m12">
						<h3><u>Our Policies</u></h3>
					</div>
				</div>							
				<a href="terms_of_use.php"><h6>Terms of Use</h6></a>
				<a href="security.php"><h6>Security</h6></a>
				<a href="privacy_policy.php"><h6>Privacy Policy</h6></a>
			</div>
		</div>
		</div>
		<div class="w3-col l3 m3 w3-justify" style="background-color: #404C4B; height: 230px; padding: 10px ">
			<div class="w3-row">
			<div class="w3-col l2 "><p></p></div>
			<div class="w3-col l9 ">
				<h3><u>Contact Us</u></h3>
				<h6><span class="glyphicon glyphicon-map-marker "></span> 123, 3rd cross,</br> 2nd stage Arekere,</br> MICO Layout, Bengaluru,</br> India  - 560076</h6>
					
					<h6><span class="glyphicon glyphicon-earphone"></span>+91-90355 88107</h6>
					<h6><span class="glyphicons glyphicons-message-in"></span>info@kupsip.com</h6>
			</div>
			<div class="w3-col l1 "><p></p></div>
			
			</div>
			</div>
	</div>
	<div class="w3-row footer_m">
		<ul class="accordion">
			<li>
			    <a class="toggle w3-border" href="javascript:void(0);">Shop With Us<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
			    <ul class="inner">
			      <li>
			        <a href="#" class="toggle w3-border sub_acc_bg" style="background-color: ; ">Type<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
			        <div class="inner w3-border">
			          <p>
			          	<a href="aroma_mocha.php"><h6>Aroma Mocha</h6></a>
						<a href="baristas.php"><h6>Baristas</h6></a>
						<a href="grinders_cafe.php"><h6>Grinders Cafe</h6></a>
						<a href="tatiana_cafe.php"><h6>Tatiana's Cafe</h6></a>
			          </p>
			        </div>
			      </li>
			      
			      <li>
			        <a href="#" class="toggle w3-border sub_acc_bg">Speciality<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
			        <div class="inner  w3-border">
			          <p>
			            <a href="new.php"><h6>New</h6></a>
						<a href="best_selling.php"><h6>Best Selling</h6></a>
						<a href="sale.php"><h6>Sale</h6></a>
						<a href="samples.php"><h6>Samples</h6></a>
			          </p>
			        </div>
			      </li>
			      <li>
			        <a href="#" class="toggle w3-border sub_acc_bg">Business<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
			        <div class="inner  w3-border" >
			          <p>
			           	<a href="wholesale.php"><h6>Wholesale</h6></a>
						<a href="corp_gift.php"><h6>Corportae Gifting</h6></a>
			          </p>
			        </div>
			      </li>
			    </ul>
		  </li>

		  <li> 
		    <a class="toggle w3-border" href="javascript:void(0);">Customer Service<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
		    <ul class="inner w3-border">
			      	<a href="shipping.php"><h6>Shipping & Delivery</h6></a>
					<a href="help_desk.php"><h6>Help Desk</h6></a>
					<a href="contact_us.php"><h6>Contact Us</h6></a>
		    </ul>
		  </li>
		  <li> 
		    <a class="toggle w3-border" href="javascript:void(0);">About Us<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
		    <ul class="inner  w3-border">
		    	<a href="about_kupsip.php"><h6>About KupSip</h6></a>
				<a href="team.php"><h6>Team</h6></a>
				<a href="newsroom.php"><h6>Newsroom</h6></a>
				<a href="testimonial.php"><h6>Testumonials</h6></a>
				<a href="brew_guide.php"><h6>Brew Guide</h6></a>
				<a href="careers.php"><h6>Careers</h6></a>
		    </ul>
		  </li>
		  <li> 
		    <a class="toggle w3-border" href="javascript:void(0);">Our Policies<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
		    <ul class="inner w3-border">
		     	<a href="terms_of_use.php"><h6>Terms of Use</h6></a>
				<a href="security.php"><h6>Security</h6></a>
				<a href="privacy_policy.php"><h6>Privacy Policy</h6></a>
		    </ul>
		  </li>
		  
		  <li>
		    <a class="toggle w3-border" href="javascript:void(0);">Contact Us<span class="glyphicon glyphicon-chevron-down" style="float: right "></span></a>
		    <ul class="inner w3-border">
		      	<a href=""><h6><span class="glyphicon glyphicon-map-marker"></span> 66 South Street,jwjwj</h6></a>
				<a href=""><span class="glyphicon glyphicon-earphone"></span><h6>+4455661163636</h6></a>
				<a href=""><span class="glyphicons glyphicons-message-in"></span><h6>info@kupsip.com</h6></a>
		    </ul>
		  </li>
		</ul>
	</div>	
	</body>
<script type="text/javascript">
	$('.toggle').click(function(e) {
  	e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        /*$this.next().slideUp(350);*/
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
       /* $this.parent().parent().find('li .inner').slideUp(350);*/
        $this.next().toggleClass('show');
        /*$this.next().slideToggle(350);*/
    }
});
</script>

</html>