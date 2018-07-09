<?php
session_start();
unset($_SESSION['c_id']);
unset($_SESSION['roster_id']);
?>


<html>
<head>
	<title>KupSip</title>

 <script>
	 

	 
function validateForm()
{
var a = $('#s_pass').val();
var b = $('#s_pass1').val();
 
//var a=document.forms["signup_f"]["s_pass"].value;
//var b=document.forms["signup_f"]["s_pass"].value;
 

  if (a !=b )
  {
  alert("Password Should Match ! ! ! ");
  return false;
  }
	  if (a.length <8 )
  {
  alert("Password Should be atleast 8 character ");
  return false;
  }
}
	
	/*
$(document).ready(function(){
	alert("Both Passwords should match !");
	$("#signup_f").submis(function() {
		var sign_name = $('#s_name').val();
		var sign_email = $('#s_email').val();
		var sign_pass = $('#s_pass').val();
		var sign_pass1 = $('#s_pass1').val();
		if ( sign_pass != sign_pass1) {
			alert("Both Passwords should match !");
			return false;
		} 
		var datastring = 'name='+sign_name+'&email='+sign_email+'&pass='+sign_pass;
		$.ajax({
			type: "POST",
			url: "validation.php",
			data: datastring,
			success: function(result){
					alert(result);
					login();
			}
		});
	});

	$("#login_f").submit(function() {
		var name = $('#name').val();
		$.ajax({
			type: "POST",
			url: "validation.php?login_val=1&signup_val=0",
			data: "name="+ name ,
			success: function(){
					alert("sucess login");
					login();
			}
		});
	});
}); 
*/
</script> 


</head>
<style>

#footer {
	width:100%;
	height:100px;
	position:relative;
	bottom:0;
	left:0;
}
		div.row_login{	
				width: 1200px;
				max-width: 1200px;
				margin:auto;
			}
			
			div.add_space_subscription{
			height: 110px;
		}
	#log_btn{
		height: 40px;
	}
		
    @media screen and (max-width: 500px){
    	
    	div.row_login{	
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
	<div class="row_login w3-card-8">
		<div class="w3-row">
			<div class="w3-col l4 m2 s1"><P></P></div>
			<div class="w3-col l4 m8 s10">
				<div class="w3-row">
					<div class="w3-row">
						<div class="w3-col l12 m12 s12 w3-center"><h2>WELCOME</h2></div>
					</div>
					<br>
					<br>
					<div class="w3-row w3-card-8" style="background-color: white ">

					<div class="w3-row">
						<div class="w3-col l6 m6 s6"><button onclick="login()" id="login_btn" class="w3-btn-block w3-border-right w3-hover-shadow w3-teal"><b>LOGIN</b></button></div>
			 			<div class="w3-col l6 m6 s6"><button onclick="signup()" id="signup_btn" class="w3-btn-block w3-border-left w3-hover-shadow w3-light-grey w3-block"><b>SIGN UP</b></button></div>
					</div>
					<br>
					<div ng-app="myApp" ng-init="img_path='image/'" ng-controller="customersCtrl">
					<div id="signup_div" class="w3-row" style="display: none; ">
						<div class="w3-col l12 m12 s12">
							<form action="login_exec.php" name="signup_form" class="w3-container" onSubmit="return validateForm()" method="POST">
							  <p>
								  <label class="w3-label w3-text-black w3-validate">Name</label>
								  <input class="w3-input w3-border-teal w3-border " type="text" id="s_name" name="s_name" required>
							  </p>
							  <p>	
							  	  <label class="w3-label w3-text-black w3-validate">Email</label>   
								  <input class="w3-input w3-border-teal w3-border" type="email" id="s_email" name="s_email" required>

								 
							  </p>
							 
							  <p> 
							  	  <label class="w3-label w3-text-black w3-validate">Password</label>   
								  <input class="w3-input w3-border-teal w3-border" type="password" id="s_pass" name="s_pass" required>
							  </p>
							  <p> 
							  	  <label class="w3-label w3-text-black w3-validate">Confirm password</label>   
								  <input class="w3-input w3-border-teal w3-border" type="password" id="s_pass1" name="last" required>
							  </p>
							 <br>
							  <p>      
							  	<input type="submit" name="signup_form_btn" id="signup_f" class="w3-btn-block w3-teal" value="Sign Up"/>
							  </p>
							</form>
						</div>
						<br>
						<br>
						<br>
						<br>
					</div>
					</div>
					<div id="login_div" class="w3-row" style="display: block; ">
						<div class="w3-col l12 m12 s12">
							<form action="login_exec.php" name="login_form" class="w3-container" method="POST">
							  
							  <p>	
							  	  <label class="w3-label w3-text-black w3-validate">Email</label>   
								  <input class="w3-input w3-border-teal w3-border" type="email" id="l_email" name="email" required>

								 
							  </p>
							 
							  <p> 
							  	  <label class="w3-label w3-text-black w3-validate">Password</label>   
								  <input class="w3-input w3-border-teal w3-border" type="password" id="l_pass" name="pass" required>
							  </p>
							 <br>
							  <p>      
							  	<input type="submit" name="login_form_btn" id="login_f" class="w3-btn-block w3-teal" value="Login"/>
							  </p>
							</form>
						</div>
					</div>


					</div>
					<div><p></p></div>


				</div>
			</div>
			<div class="w3-col l4 m3 s1"><p></p></div>
		</div>
		<br>
		<br>
	
		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer_demo.php') ?>
		</div>
	</div>
	<script>
		function signup(){
			document.getElementById("login_div").style.display = 'none';
			document.getElementById("login_btn").classList.remove("w3-teal");
			document.getElementById("login_btn").classList.add("w3-light-grey");

			document.getElementById("signup_btn").classList.remove("w3-light-grey");
			document.getElementById("signup_btn").classList.add("w3-teal");
			document.getElementById("signup_div").style.display = 'block';
			}

		function login(){
			document.getElementById("signup_div").style.display = 'none';
			document.getElementById("signup_btn").classList.remove("w3-teal");
			document.getElementById("signup_btn").classList.add("w3-light-grey");

			document.getElementById("login_btn").classList.remove("w3-light-grey");
			document.getElementById("login_btn").classList.add("w3-teal");
			document.getElementById("login_div").style.display = 'block';
			}
	</script>
</body>
</html>