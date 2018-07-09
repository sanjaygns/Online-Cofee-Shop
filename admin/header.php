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
		background-color: transparen!important;
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

<div id="responsive_bg_id" style="background-color: transparent;" class="responsive_bg"></div>
<div  class="navbar " style="background-color: transparent;" id="navigation">
<div class="row" style="background-color: transparent;">

	
	
	<div class="logo_div">
		<a href="index.php"><img class="logo" id="logo" height="150px" width="170px" src="../image/logo.png"></a>
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