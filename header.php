<!DOCTYPE html>
<?php



?>

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
		<link rel="stylesheet" href="build/css/countrySelect.min.css">
		<link rel="stylesheet" href="build/css/demo.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Abel|Doppio+One|Miriam+Libre|Nova+Round|Rationale|Share+Tech|Strait|Yanone+Kaffeesatz" rel="stylesheet">

	</head>
	<style type="text/css">
		div.navbar{
	 		position: fixed; width: 100%!important; z-index: 1000;
		}
	.navbar.scrolled {
	  background-color: black !important;
	  transition: background-color 200ms linear;
	  position: fixed; width: 100%; z-index: 1000; 
	}
	.test{
		background-color: white !important;
	}
    .hoverexa {
		color: white;
    background-color: teal;
  -webkit-animation-name: greenPulse;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
  -webkit-box-shadow: 0 0 8px teal;
}
	 @media screen and (max-width: 500px){
	 	div.navbar{
	 		position: fixed; width: 100%!important; z-index: 1000;	margin-top: -25px;
	 	}
	 }
		
	@font-face {
    font-family: Akrobat;
    src: url("akrobat/Akrobat-SemiBold.otf") format("opentype");
}
	</style>
<script>
	document.body.style.zoom="100%";
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
<body onload="myFunction()">
<script type="text/javascript">
  var currmap = {"BD": "BDT", "BE": "EUR", "BF": "XOF", "BG": "BGN", "BA": "BAM", "BB": "BBD", "WF": "XPF", "BL": "EUR", "BM": "BMD", "BN": "BND", "BO": "BOB", "BH": "BHD", "BI": "BIF", "BJ": "XOF", "BT": "BTN", "JM": "JMD", "BV": "NOK", "BW": "BWP", "WS": "WST", "BQ": "USD", "BR": "BRL", "BS": "BSD", "JE": "GBP", "BY": "BYR", "BZ": "BZD", "RU": "RUB", "RW": "RWF", "RS": "RSD", "TL": "USD", "RE": "EUR", "TM": "TMT", "TJ": "TJS", "RO": "RON", "TK": "NZD", "GW": "XOF", "GU": "USD", "GT": "GTQ", "GS": "GBP", "GR": "EUR", "GQ": "XAF", "GP": "EUR", "JP": "JPY", "GY": "GYD", "GG": "GBP", "GF": "EUR", "GE": "GEL", "GD": "XCD", "GB": "GBP", "GA": "XAF", "SV": "USD", "GN": "GNF", "GM": "GMD", "GL": "DKK", "GI": "GIP", "GH": "GHS", "OM": "OMR", "TN": "TND", "JO": "JOD", "HR": "HRK", "HT": "HTG", "HU": "HUF", "HK": "HKD", "HN": "HNL", "HM": "AUD", "VE": "VEF", "PR": "USD", "PS": "ILS", "PW": "USD", "PT": "EUR", "SJ": "NOK", "PY": "PYG", "IQ": "IQD", "PA": "PAB", "PF": "XPF", "PG": "PGK", "PE": "PEN", "PK": "PKR", "PH": "PHP", "PN": "NZD", "PL": "PLN", "PM": "EUR", "ZM": "ZMK", "EH": "MAD", "EE": "EUR", "EG": "EGP", "ZA": "ZAR", "EC": "USD", "IT": "EUR", "VN": "VND", "SB": "SBD", "ET": "ETB", "SO": "SOS", "ZW": "ZWL", "SA": "SAR", "ES": "EUR", "ER": "ERN", "ME": "EUR", "MD": "MDL", "MG": "MGA", "MF": "EUR", "MA": "MAD", "MC": "EUR", "UZ": "UZS", "MM": "MMK", "ML": "XOF", "MO": "MOP", "MN": "MNT", "MH": "USD", "MK": "MKD", "MU": "MUR", "MT": "EUR", "MW": "MWK", "MV": "MVR", "MQ": "EUR", "MP": "USD", "MS": "XCD", "MR": "MRO", "IM": "GBP", "UG": "UGX", "TZ": "TZS", "MY": "MYR", "MX": "MXN", "IL": "ILS", "FR": "EUR", "IO": "USD", "SH": "SHP", "FI": "EUR", "FJ": "FJD", "FK": "FKP", "FM": "USD", "FO": "DKK", "NI": "NIO", "NL": "EUR", "NO": "NOK", "NA": "NAD", "VU": "VUV", "NC": "XPF", "NE": "XOF", "NF": "AUD", "NG": "NGN", "NZ": "NZD", "NP": "NPR", "NR": "AUD", "NU": "NZD", "CK": "NZD", "XK": "EUR", "CI": "XOF", "CH": "CHF", "CO": "COP", "CN": "CNY", "CM": "XAF", "CL": "CLP", "CC": "AUD", "CA": "CAD", "CG": "XAF", "CF": "XAF", "CD": "CDF", "CZ": "CZK", "CY": "EUR", "CX": "AUD", "CR": "CRC", "CW": "ANG", "CV": "CVE", "CU": "CUP", "SZ": "SZL", "SY": "SYP", "SX": "ANG", "KG": "KGS", "KE": "KES", "SS": "SSP", "SR": "SRD", "KI": "AUD", "KH": "KHR", "KN": "XCD", "KM": "KMF", "ST": "STD", "SK": "EUR", "KR": "KRW", "SI": "EUR", "KP": "KPW", "KW": "KWD", "SN": "XOF", "SM": "EUR", "SL": "SLL", "SC": "SCR", "KZ": "KZT", "KY": "KYD", "SG": "SGD", "SE": "SEK", "SD": "SDG", "DO": "DOP", "DM": "XCD", "DJ": "DJF", "DK": "DKK", "VG": "USD", "DE": "EUR", "YE": "YER", "DZ": "DZD", "US": "USD", "UY": "UYU", "YT": "EUR", "UM": "USD", "LB": "LBP", "LC": "XCD", "LA": "LAK", "TV": "AUD", "TW": "TWD", "TT": "TTD", "TR": "TRY", "LK": "LKR", "LI": "CHF", "LV": "EUR", "TO": "TOP", "LT": "LTL", "LU": "EUR", "LR": "LRD", "LS": "LSL", "TH": "THB", "TF": "EUR", "TG": "XOF", "TD": "XAF", "TC": "USD", "LY": "LYD", "VA": "EUR", "VC": "XCD", "AE": "AED", "AD": "EUR", "AG": "XCD", "AF": "AFN", "AI": "XCD", "VI": "USD", "IS": "ISK", "IR": "IRR", "AM": "AMD", "AL": "ALL", "AO": "AOA", "AQ": "", "AS": "USD", "AR": "ARS", "AU": "AUD", "AT": "EUR", "AW": "AWG", "IN": "INR", "AX": "EUR", "AZ": "AZN", "IE": "EUR", "ID": "IDR", "UA": "UAH", "QA": "QAR", "MZ": "MZN"};
  jQuery.getJSON('http://freegeoip.net/json/', function(location) {
    if(location.country_code){
      var mycurrency = currmap[location.country_code];
      if(mycurrency){
       $("#curen").val(mycurrency);
       $("#curen").change();
		 
      }
    }
  });
</script>

<ul class='social'>
  <li style="color: transparent;">
    <a class="fa fa-facebook" href="#">    
      <span>Facebook</span>
    </a> 
  </li>
  
  <li style="color: transparent;">
    <a class="fa fa-twitter" href="#">
      <span>Twiter</span>
    </a>
  </li>
  
  <li style="color: transparent;">
    <a class="fa fa-dribbble" href="#">
      <span>Dribbble</span>
    </a>
  </li>
  
  <li style="color: transparent;" >
    <a class="fa fa-google-plus" href="#">
    <span>Google Plus</span>
    </a> 
  </li>
  
</ul>




<div id="responsive_bg_id" class="responsive_bg"></div>
<div  class="navbar navbar-dark" id="navigation" style="font-family: 'Share Tech', sans-serif;">
<div class="row">
  <div id="line1" class="m_bg1" style="">
    <input class="currency" id="country_selector" width="40px" type="text">
    <a href="login.php">
      <button class="w3-text-white btnl1">
        <?php if(isset($_SESSION['c_id']) || isset($_SESSION['roster_id'])) { echo("LOGOUT");  } else { echo"LOGIN"; } ?>
      </button>
    </a> </div>
  <div class="logo_div">
		<a href="index.php"><img class="logo" id="logo" src="image/logo.png"></a>
		
	</div>
	
	<div id="line2" class="m_bg2" >
		
		<a href="subscribe.php" id="coffee" class="m_button" >COFFEE SUBSCRIPTION</a>
		<a href="#" id="shop" class="m_button" onmouseover="disp_menu_on(1)" onmouseout="disp_menu_off(1) " >SHOP<span class="drop caret"></span></a>
		<a href="#" id="business" class="m_button" onmouseover="disp_menu_on(2)" onmouseout="disp_menu_off(2)" >BUSINESS<span class="drop caret"></span></a>
		<a href="#" id="club" class="m_button" onmouseover="disp_menu_on(3)" onmouseout="disp_menu_off(3)" >KUPSIP CLUB<span class="drop caret"></span></a>	
		<a href="profile.php" class="m_button">
		<?php if(isset($_SESSION['c_id']) )
		{ echo("ACCOUNT");  }  ?>
		</a>
		
	</div>
	<div class="m_button_c w3-hover-blue">
    <a href="cart_info.php">
		<center>
			<span class="glyphicon glyphicon-shopping-cart cart" ></span>
		</center>
    </a>
	</div>
	<div id="sub_menu_main" class="sub_menus w3-hover-shadow" style="display: none; ">
		<span id="sub_shop" class="sub_shop" onmouseover="disp_menu_on(1)" onmouseout="disp_menu_off(1)">
			<div class="w3-row" ">
				<div class="w3-col s2 m2 l2 w3-center" style="border-right:solid teal 2px; ">
					<a href="product.php?coffee_type=100" class="w3-hover-text-teal"><p class="w3-large"><b>Coffee</b></p></a>
					<a href="product.php?coffee_type=1"><p id="singleorigin1" class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow">Single Origin</p></a>
					<a href="product.php?coffee_type=2"><p id="singleorigin2" class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow">Organic</p></a>
					<a href="product.php?coffee_type=3"><p id="singleorigin3" class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow">Blends</p></a>
					<a href="product.php?coffee_type=6"><p id="singleorigin4" class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow">Indian Spl</p></a>
					<!-- <button class="w3-btn-block w3-white w3-hover-teal w3-text-shadow">Shadow</button> -->
				</div>
				<div class="w3-col s2 m2 l2 w3-center" onMouseOver="oncoffee(1)" onMouseOut="offcoffee(1)" style="border-right:solid teal 2px;   ">
					<a href="#" ><h5 style="font-family: 'Share Tech', sans-serif;">Single Origin </h5></a>
				<img src="image/single_origin.jpg" class="w3-center" height="150px" width="100%" >
				</div>
				<div class="w3-col s2 m2 l2 w3-center" onMouseOver="oncoffee(2)" onMouseOut="offcoffee(2)" style="border-right:solid teal 2px; ">
					<a href="#" ><h5 style="font-family: 'Share Tech', sans-serif;"  onMouseOver="oncoffee(2)" onMouseOut="offcoffee(2)">Organic  </h5></a>
				<img src="image/organic.jpg" class="w3-center" height="150px" width="100%" >
				</div>
				<div class="w3-col s2 m2 l2 w3-center" onMouseOver="oncoffee(3)" onMouseOut="offcoffee(3)" style="border-right:solid teal 2px; ">
																																				<a href="#" ><h5 style="font-family: 'Share Tech', sans-serif;" >Blends</h5></a>
				<img src="image/blends.jpg" class="w3-center" height="150px" width="100%" >
				</div>
				<div class="w3-col s2 m2 l2 w3-center" onMouseOver="oncoffee(4)" onMouseOut="offcoffee(4)" style="border-right:solid teal 2px; ">
					<a href="#" ><h5 style="font-family: 'Share Tech', sans-serif;" >Indian Special </h5></a>
				<img src="image/indian_special.jpg" class="w3-center" height="150px" width="100%" >
				</div>
				
				
				<div class="w3-col s2 m2 l2 w3-center" onMouseOver="oncoffee(5)" onMouseOut="offcoffee(5)" style="border-right:solid teal 2px; ">
					<a href="#" ><h5 style="font-family: 'Share Tech', sans-serif;" id="singleorigin5" ><b>Brewing </b></h5></a>
				<img src="image/coffee_brewing.jpg" class="w3-center" height="150px" width="100%" >
				</div>
		</div>
		<!-- <span class="w3-margin sub_shop_coffee">Coffee</span><span class="w3-margin sub_shop_brewing">Brewing</span><div class="vertical-line ani_l" style="height: 45px;"></div> --> 
	  </span>
		<span id="sub_business" class="sub_business" onmouseover="disp_menu_on(2)" onmouseout="disp_menu_off(2)">
			<div class="w3-row">
				<div class="w3-col s12 m12 l12 w3-center w3-margin-top">
					<a href="wholesale.php"><p class="w3-btn-block w3-white w3-padding-tiny w3-medium w3-hover-shadow"><b>Whole Sale</b></p></a>
					<a href="corp_gift.php"><p class="w3-btn-block w3-white w3-padding-tiny w3-medium w3-hover-shadow"><b>Corporate Gifts</b></p></a>
				</div>
			</div>
		</span>
		<span id="sub_club" class="sub_club" onmouseover="disp_menu_on(3)" onmouseout="disp_menu_off(3)">
			<div class="w3-row">
				<div class="w3-col s12 m12 l12 w3-center w3-margin-top">
					<a href=""><p class="w3-btn-block w3-white w3-padding-tiny w3-medium w3-hover-shadow"><b>Blog</b></p></a>
					<a href=""><p class="w3-btn-block w3-white w3-padding-tiny w3-medium w3-hover-shadow"><b>Learn</b></p></a>
					<a href=""><p class="w3-btn-block w3-white w3-padding-tiny w3-medium w3-hover-shadow"><b>WorkShop</b></p></a>
					
				</div>
			</div>
		</span>
	</div>
</div>
</div>
<script>

/*window.onscroll = function() {myFunction_scroll()};

function myFunction_scroll(){
	alert("sujay");
}
*/
/*
function myFunction_scroll() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("responsive_bg_id").className = "test";
    } else {
        document.getElementById("responsive_bg_id").className = "";
    }
}*/

function disp_menu_on(x){
	
	if (x==1) {
		document.getElementById('sub_menu_main').style.display='block';
		document.getElementById('sub_shop').style.display='block';
		/*document.getElementById("sub_shop").classList.add("ani");*/
		document.getElementById("sub_shop").classList.add("w3-card-4");
	} 
	else if (x==2) {
		document.getElementById('sub_menu_main').style.display='block';
		document.getElementById('sub_business').style.display='block';
		/*document.getElementById("sub_business").classList.add("ani");*/
		document.getElementById("sub_business").classList.add("w3-card-4");
	} else if (x==3) {
		document.getElementById('sub_menu_main').style.display='block';
		document.getElementById('sub_club').style.display='block';
		/*document.getElementById("sub_club").classList.add("ani");*/
		document.getElementById("sub_club").classList.add("w3-card-4");
	}
}
function oncoffee(x) {
	
		
		document.getElementById('singleorigin'+x).className = 'hoverexa';
	
}
function offcoffee(x) {
	
		
		document.getElementById('singleorigin'+x).className = 'w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow';
	
}
function disp_menu_off(x){
	if (x==1) {
		document.getElementById('sub_menu_main').style.display='none';
		document.getElementById('sub_shop').style.display='none';
	} 
	else if (x==2) {
		document.getElementById('sub_menu_main').style.display='none';
		document.getElementById('sub_business').style.display='none';
	} else if (x==3) {
		document.getElementById('sub_menu_main').style.display='none';
		document.getElementById('sub_club').style.display='none';
	}
}
</script>
<script>
	function myFunction() {
		var pat=location.pathname.split("/").slice(-1);
		
    if(pat !="index.php" && pat.toString().length!=0 ) {
		
		
		
		var div = document.getElementById( 'navigation' );
		div.style.backgroundColor = 'black';
	}
		
}
	$(function () {
	  $(document).scroll(function () {
		  
		  
		  var $nav = $("#navigation");
		  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		});
	});
</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="build/js/countrySelect.min.js"></script>
		<script>
			$("#country_selector").countrySelect({
				//defaultCountry: "jp",
				//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
				preferredCountries: ['in', 'ca', 'gb', 'us']
			});
		</script>
</body>

</html>