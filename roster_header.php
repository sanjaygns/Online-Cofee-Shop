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

	</head>
	<style type="text/css">
	.navbar.scrolled {
	  background-color: black !important;
	  transition: background-color 200ms linear;
	  position: fixed; width: 100%; z-index: 1000; 
	}
	.test{
		background-color: white !important;
	}
	 @media screen and (max-width: 500px){
	 	div.navbar{
	 		position: fixed; width: 100%!important; z-index: 1000;	margin-top: -25px;
	 	}
	 }
	</style>
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
<body>

<div id="responsive_bg_id" class="responsive_bg"></div>
<div  class="navbar navbar-dark" id="navigation">
<div class="row">

	<div id="line1" class="m_bg1" style=" left: 500px; width: auto;">
		sanjay
		</span>
		    <button class="w3-text-white btnl1" ><a href="login.php"><span class="w3-text-white btnl1">
		  <?php if(isset($_SESSION['c_id']) || isset($_SESSION['roster_id'])) { echo("LOGOUT");  } else { echo"LOGIN"; } ?></button>
		    <span class="w3-text-white btnl1">		    </span></a><span class="m_bg1" style=" left: 500px; width: auto;"><a href="profile.php" style="color:white;">
		<?php if(isset($_SESSION['c_id']) )
		{ echo("My Account");  }  ?>
		</a></span>
	</div> 
	
	<div class="logo_div">
		<a href="index.php"><img class="logo" id="logo" src="image/logo.png"></a>
	</div>
	
	<div id="line2" class="m_bg2">
		<a href="subscribe.php" id="coffee" class="m_button">Menu 1</a>
		<a href="#" id="shop" class="m_button" onmouseover="disp_menu_on(1)" onmouseout="disp_menu_off(1)" >Menu 2<span class="drop caret"></span></a>
		<a href="#" id="business" class="m_button" onmouseover="disp_menu_on(2)" onmouseout="disp_menu_off(2)" >Menu 3<span class="drop caret"></span></a>
		<a href="#" id="club" class="m_button" onmouseover="disp_menu_on(3)" onmouseout="disp_menu_off(3)" >Menu 4<span class="drop caret"></span></a>	
	</div>
	

	
	</div>
	<div id="sub_menu_main" class="sub_menus" style="display: none; ">
		<span id="sub_shop" class="sub_shop" onmouseover="disp_menu_on(1)" onmouseout="disp_menu_off(1)">
			<div class="w3-row">
				<div class="w3-col s6 m6 l6 w3-center" style="border-right:solid teal 2px; ">
					<a href="product.php?coffee_type=100" class="w3-hover-text-teal"><p class="w3-large"><b>Coffee</b></p></a>
					<a href="product.php?coffee_type=1"><p class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow"><b>Single Origin</b></p></a>
					<a href="product.php?coffee_type=2"><p class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow"><b>Organic</b></p></a>
					<a href="product.php?coffee_type=3"><p class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow"><b>Blends</b></p></a>
					<a href="product.php?coffee_type=6"><p class="w3-btn-block w3-white w3-padding-tiny w3-small w3-medium w3-hover-shadow"><b>Indian Spl</b></p></a>
					<!-- <button class="w3-btn-block w3-white w3-hover-teal w3-text-shadow">Shadow</button> -->
				</div>
				<div class="w3-col s5 m5 l5 w3-center ">
					<a href="" class="w3-hover-text-teal"><p class="w3-large"><b>Brewing</b></p></a>
					<!-- <button class="w3-btn-block w3-white w3-hover-teal w3-text-shadow">Shadow</button> -->
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
	$(function () {
	  $(document).scroll(function () {
		  var $nav = $("#navigation");
		  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		});
	});
</script>
</body>

</html>