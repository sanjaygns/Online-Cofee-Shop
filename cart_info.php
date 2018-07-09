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
	<div class="row_subscribe" >
		<div class="w3-margin w3-card-2" >
	 		
			 <div ng-app="myApp" ng-init="img_path='image/'" ng-controller="cart_infoCtrl">
			  <div class="w3-row" >
			    <div class="w3-col s12 m12 l12 w3-center w3-margin-top" ng-repeat="x in cart_products">
			    
			     <div class="w3-col s1 m1 l1 w3-center"><p></p></div>
			      <div class="w3-col s12 m10 l10 w3-center w3-center w3-card-2 w3-leftbar w3-border-teal">
			      	<div class="w3-row w3-margin" >
			      		<div class="w3-col s2 m2 l2 w3-center">
			      			<img width="100%;" ng-src='{{ img_path + "" + x.Image1 }}' />
			      		</div>
			      		<div class="w3-col s4 m4 l4">
			      			<div class="w3-margin-top" ><a ng-href="product_info.php?prod={{x.Id}}">{{ x.Name }}</a></div>
			      			<div>Price : {{ x.Price * ((selectedquant)? selectedquant:x.Price/x.Price ) }}</div>
			      		</div>
			      		<div class="w3-col s2 m2 l2" style="margin-top: 10px;">
			      			<!-- ><select ng-model="selectedquant" onchange="getquants()" ng-options="option for option in listOfOptions"></select> -->
						Quantity : {{x.Quant}}
			      		</div>
			      		<div class="w3-col s1 l1 w3-center"><p></p></div>
			      		<div class="w3-col s1 m2 l2 w3-center w3-margin w3-right" ng-click="remove_cart(x.Id)" ><i class="glyphicon glyphicon-remove w3-hover-text-teal"></i></div>
			      		
			      	</div>
			        
			      </div>
			      <div class="w3-col s0 m1 l1 w3-center"><p></p></div>
			     
			    </div>
			    <?php 
				$as="";
				$ct=0;
				if(isset($_SESSION["cart"])) {
				foreach ($_SESSION["cart"] as $key => $value) {
					$as .= $value;
					$ct++;
				}
				}
				
				if($ct>0) {
				?> 
		    	<a href="checkout_exec.php" >
			    <button class="w3-btn-block w3-teal w3-medium" style=" height: 50px;">Total {{ getTotal()}} - Checkout</button></a> <?php } else { ?> 
			    <button  class="w3-btn-block w3-teal w3-medium" style=" height: 50px;">No Items in Cart</button> <?php } ?>
			  </div>
			</div>
			
			<script>
			
			var app = angular.module('myApp', []);
			app.controller('cart_infoCtrl', function($scope, $http) {

			   $http.get("http://localhost/ks/cart.php")
			   .then(function (response) {$scope.cart_products = response.data.records;
										 });

			   $scope.remove_cart = function (remove_from_cart){
						alert(remove_from_cart);
						$http.get("http://localhost/ks/remove_cart.php?rmcart="+remove_from_cart)
			   .then(function (response) {$scope.cart_products = response.data.records;   });
				   location.reload(false);
				}
			   $scope.cars = {
        car01 : {brand : "1"},
        car02 : {brand : "2"},
        car03 : {brand : "3"}
			   };
			$scope.listOfOptions = [1, 2, 3];
			 
			
			$scope.getquants = function(){
           	       var total = 0;
					for(var i = 0; i < $scope.cart_products.length; i++){
					   var product = $scope.cart_products[i];
					   $scope.cart_products[i].selectedquant = product.Quant;
					}
					
			}
			
			
			 
			
				$scope.getTotal = function(){
					var total = 0;
					for(var i = 0; i < $scope.cart_products.length; i++){
						var product = $scope.cart_products[i];
						
						var pr = parseInt(product.Price);
						var qu = parseInt(product.Quant);
						
						total +=  ( pr * qu ) ;
						
						//total += (product.price * product.quantity);
					}
					if(total==0) {
						if(!alert("No items in Cart")) document.location = 'index.php';
    					exit();
					}
					return total;
					
				};
			  
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