
<!DOCTYPE html>
<html >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
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
       <div ng-app="myApp" ng-init="img_path='image/'" ng-controller="customersCtrl">
        <br><br><br>
        <div class="w3-row w3-margin" >
          <div class="w3-col s12 m12 l1" ><p></p></div>
          <div class="w3-col s12 m12 l10" ng-repeat="x in names">
            <div class="w3-row" >
              <div class="w3-col s12 m12 l6">
                <div class="w3-row" >
                  
                  <div class="w3-col s10 m10 l10 w3-hover-shadow w3-center w3-margin">
                    <img ng-src='{{ img_path + "" + x.Image1 }}' width="100%">
                  
                  </div>
                  <div class=" w3-center w3-margin">
                  <button class="w3-btn w3-teal">Button</button>
                  <button class="w3-btn w3-teal">Button</button>
                  <button class="w3-btn w3-teal" >Button</button>
					</div>
                </div>
              </div>
              <div class="w3-col s12 m12 l6">
                <div class="w3-margin " style="border-bottom: 1px solid #D1D1D1;"><h2><b>{{ x.Name }} </b></h2></div>
                <div class="w3-margin "><h4><b>Roster :</b> {{ x.Roster_name }} </h4></div>
                <div class="w3-margin "><h4><b>Coffee Type :</b> {{ x.Type }} </h4></div>
                <div class="w3-margin "><h5><b>Powder Rost :</b> {{ x.Rost }} </h5></div>
                <div class="w3-margin w3-justify "><p><b>Discription : </b> {{x.Discription}} </p></div>
                <div class="w3-margin "><h3><b>Price :</b> {{ x.Price}} </h3></div>
                
                
                
                <div class="w3-margin "><h3><b>Quantity :</b> 
                <select style="width: 120px; border-radius: 10px;" ng-model="selectedquant" ng-options="option for option in listOfOptions">
							</select>gms
                
                 
                   </h3></div>
                <div class="w3-row" >
                  <div class="w3-col s5 m5 l5 w3-margin">
                    <button ng-click="add_cart( x.Id, selectedquant)" class="w3-btn-block w3-teal w3-hover-shadow" >Cart</button>
                  </div>
                  <div class="w3-col s5 m5 l5 w3-margin">
                    <button class="w3-btn-block w3-teal w3-hover-shadow">Buy</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w3-col l1"><p></p></div>
        </div>
      </div>
      <?php
      $product_id = intval($_GET['prod']);
      ?>
      <script>
      var app = angular.module('myApp', []);
      app.controller('customersCtrl', function($scope, $http) {
        var prod_id = '<?php echo $product_id; ?>';
         $http.get("http://localhost/ks/product_details.php?prod_id="+prod_id)
         .then(function (response) {$scope.names = response.data.records;});
		  
		  $scope.option = {
        val01 : {val : "250"},
        val02 : {val : ""},
        val03 : {val : "3"}
			   };
		  $scope.listOfOptions = [250, 750, 1250, 1750, 2250, 2750, 4750];
		  $scope.selectedquant = $scope.listOfOptions[0];
		  
		  $scope.add_cart = function (add_to_cart, qun){
			  
						alert("Added to cart Product ID:"+ add_to_cart +", of quantity: "+qun);
						$http.get("http://localhost/ks/addcart.php", {params:{"cart": add_to_cart, "qnt": qun}})
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
					
				};
		  
      });
      </script>
      <br>
    </div>
    <br>
    <div id="content">
      
    </div>
      <div id="footer">
        <?php include('footer_demo.php') ?>
      </div>
      
  </div>
</body>
</html>

