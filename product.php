<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>KupSip</title>
	<script type="/ajax/libs/angularjs/ngStorage.min.js"></script>
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
	<div class="row_subscribe">
		<div class="w3-panel w3-card-2">
	 		<!-- <div ng-app="myApp" ng-init="img_path='/kupsip/image/'" ng-controller="customersCtrl">
			  <div class="w3-row w3-margin-right" >
			    <div class="w3-col s6 m6 l4 w3-center" ng-repeat="x in names">
			      <div class="w3-col l2 w3-center"><p></p></div>
			      <div class="w3-col l8 w3-center w3-margin w3-center w3-card-2">
			        <div><img width="150px;" ng-src='{{ img_path + "" + x.Image }}' /></div>
			        <div>{{ x.Name }}</div>
			        <div>{{ x.Price }}</div>
			      </div>
			      <div class="w3-col l1 w3-center"><p></p></div>
			    </div>
			  </div>
			</div> -->
			 <div ng-app="myApp" ng-init="img_path='../ks/image/'" ng-controller="cartCtrl">
			  <div class="w3-row w3-margin" >
			    <div class="w3-col s6 m6 l4 w3-center" ng-repeat="x in names">
			    
			      
			      <div class="w3-col l8 w3-center w3-margin w3-center w3-card-2">
			        <div><img width="150px;" ng-src='{{ img_path + "" + x.Image }}' /></div>
			        <div>{{x.Id}}</div>
			        <div><a ng-href="product_info.php?prod={{x.Id}}">{{ x.Name }}</a></div>
			        <div>{{ x.Price }}</div>
			        <div class="w3-row" >
			          <div class="w3-col s5 m5 l5 w3-center w3-margin-left w3-margin-bottom w3-margin-top"><a ng-href="product_info.php?prod={{x.Id}}"><button class="w3-btn-block w3-teal w3-medium">Details</button></a></div>
			          <div class="w3-col s5 m5 l5 w3-center w3-margin-left w3-margin-bottom w3-margin-top"><button onclick="window.location.href='#'" class="w3-btn-block w3-teal w3-medium">Buy NOW</button></div>
			        </div>
			      </div>
			      
			     
			    </div>
			  </div>
			</div>
			<?php
				$coffee_type = 100;
      			$coffee_type = intval($_GET['coffee_type']);
      		?>
			<script>
			
			var app = angular.module('myApp', []);
			app.controller('cartCtrl', function($scope, $http) {
				 var coffee_id = '<?php echo $coffee_type; ?>';
			   $http.get("http://localhost/ks/testangular.php?coffee_id="+coffee_id)
			   .then(function (response) {$scope.names = response.data.records;});
			  
			  	/*if (sessionStorage.sessionStart === undefined || sessionStorage.sessionStart === null) {
					var cart_array = [];
					alert("set");
					sessionStorage.setItem("sessionStart",1);
				}*/

				$scope.add_cart = function (add_to_cart){
						alert(add_to_cart);
						$http.get("http://localhost/ks/addcart.php?cart="+add_to_cart)
			   .then(function (response) {$scope.c_msg = response.data.records;});

					/*var cart_retrive_array = sessionStorage.getItem("cart_array");
					var cart_array = JSON.parse(cart_retrive_array);
					if (sessionStorage.sessionStart == 1) {
						cart_array.push(a);
					}
					for(var i = 0; i < cart_array.length; i++){
						alert(cart_array[i]);
					}
					sessionStorage.setItem("product_ss_ids", JSON.stringify(cart_array));*/
					
				}

			
			});

			

			</script>
			<br>
		</div>
		<br>
		<div id="content">
			
		</div>
			<div id="footer">
				<?php include('footer.php') ?>
			</div>
			
	</div>
	<script>
	/*	function disp_coffee_type(x){
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
		}*/
	</script>
</body>
</html>