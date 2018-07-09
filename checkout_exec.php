
<?php
session_start();
include('dbConfig.php');




if(!isset($_SESSION['c_id'] )  ) {
	$_SESSION["checkout"] = 1;
	
	 ?>
    <script> if(!alert("Please Login to Proceed")) document.location = 'login.php';
    exit(); </script>
        <?php
}	

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

$address = ip_info("72.163.220.12", "Address"); 
$country = ip_info("72.163.220.12", "Country");

if($country=='India') {
	$gateway="instamojo";
} else {
	$gateway="paypal";
}

$cust_id = $_SESSION['c_id'];
$result = $conn->query("SELECT * FROM customer WHERE c_id='$cust_id'");
    
	if( $result) {
		
		$rs = $result->fetch_array(MYSQLI_ASSOC);
	}

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
			      	<div class="w3-row " >
			      		<div class="w3-col s2 m2 l2 w3-center">
			      		
			      		
			      		
			      	</div>
			        
			      </div>
			      <div class="w3-col s0 m1 l1 w3-center"><p></p></div>
			     <div id="login_div" class="w3-row" style="display: block; ">
						<div class="w3-col l12 m12 s12">
						
						
						
							<form action="insta/pay.php" name="login_form" class="w3-container" method="POST">
						  
						  	<input type="hidden" name="product_name" value="Kupsip Coffee"> 
							<input type="hidden" name="product_price" value="{{getTotal()}}"> 
						   <input type="hidden" class="form-control" name="name" value="<?php echo $rs['f_name'] ?>">
						   <input type="hidden" class="form-control" name="country" value="<?php echo $country ?>">
						   <input type="hidden" class="form-control" name="email"  value="<?php echo $rs['email_id'] ?>">
						   	
							  
							<p>	
							  	  <label class="w3-label w3-text-black w3-validate">Address*</label>   
								  <input class="w3-input w3-border-teal w3-border" type="textarea" id="address" name="address" value="<?php echo $rs['address'] ?>" required>

								 
							  </p>
							  <p>	
							  	  <label class="w3-label w3-text-black w3-validate">Pin Code*</label>   
								  <input class="w3-input w3-border-teal w3-border" type="textarea" id="pin" name="pin" value="<?php echo $rs['zip'] ?>" required>

								 
							  </p>
							 
							  <p> 
							  	  <label class="w3-label w3-text-black w3-validate">Detected location</label>   
								  <input class="w3-input w3-border-teal w3-border" type="test" id="location" name="location" value="<?php echo $address; ?>" >
							  </p>
							  <p>	
							  	  <label class="w3-label w3-text-black w3-validate">Phone Number*</label>   
								  <input class="w3-input w3-border-teal w3-border" type="textarea" id="phone" placeholder="9988776655" name="phone" value="<?php echo $rs['phone'] ?>" pattern="[0-9]{10}" title="Enter valid 10 digit phone number" required>

								 
							  </p>

								 
							  </p>
							 <br>
							  <p>      
							  	<input type="submit" name="login_form_btn" id="login_f" class="w3-btn-block w3-teal" value="Proceed  - {{getTotal()}} "/>
							  </p>
							</form>
							
							
							
					
					
						</div>
					</div>
			     
			    </div>
			    
		    	 
			     
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