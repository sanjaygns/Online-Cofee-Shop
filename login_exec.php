w<?php
session_start();
include('dbConfig.php');

/*if(isset($_SESSION['admin'])!="")
{
  header("Location: admin_login.php");
}*/

if(isset($_POST["login_form_btn"]))
{
	
  $auser = $conn->real_escape_string($_POST["email"]);
  $apass = $conn->real_escape_string($_POST["pass"]);
  
  $auser = trim($auser);
  $apass = trim($apass);
  
   $result = $conn->query("SELECT * FROM customer WHERE email_id='$auser'");
    
	if( $result) {
		
		$rs = $result->fetch_array(MYSQLI_ASSOC);
	}
	
  
  
  
  if($rs['password']==$apass)
  {
	  
	  $_SESSION['c_id'] = $rs['c_id'];
	  if(isset($_SESSION["checkout"])) {
		  ?>
    <script> if(!alert("Redirecting to checkout")) document.location = "checkout_exec.php";
    exit(); </script>
        <?php 
	  } else {
			?>
  			  <script> if(!alert("Welcome back to Kupsip")) document.location = 'index.php';
				  exit(); </script>
     	   <?php
	  }
    
    
  }
  else
  {
    ?>
    <script> if(!alert("Wrong Password")) document.location = 'login.php';
    exit(); </script>
        <?php
	  
  }
}

if(isset($_POST['signup_form_btn']))
{
  $auser = $conn->real_escape_string($_POST['s_email']);
  $aname = $conn->real_escape_string($_POST['s_name']);
  $apass = $conn->real_escape_string($_POST['s_pass']);
  
  $auser = trim($auser);
  $apass = trim($apass);
   $apass = trim($aname);
  
   $result = $conn->query("SELECT * FROM customer WHERE email_id='$auser'");
    
	if( $result) {
		echo('sanjay123');
		$rs = $result->fetch_array(MYSQLI_ASSOC);
	}
echo('sanjay');
  
  
  
  if($rs['email_id']==$auser)
  {
    ?>
        <script>if(!alert("Email already exists")) document.location = 'index.php';
    exit();</script>
        <?php
    
  }
  else
  {
    
	  
	  $qry = $conn->query("INSERT into customer(c_id,email_id,password,f_name) VALUES('','$auser','$apass','$aname')");
      
      //$query = mysql_query($qry);
	  if( ! $qry ) {
		 echo("Error description: " . mysqli_error($conn));
  echo "failllllllllllllllllllllllllllllllllllllllllllllll";
  }
  $result = $conn->query("SELECT * FROM customer WHERE email_id='$auser'");
    
	if( $result) {
		
		$rs = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['c_id'] = $rs['c_id'];
		
	$sub="KupSip: Activate your account ";
	$email = $rs['email_id'];
	$feedback = "KupSip :  your User-Id and password is : ".$rs['email_id']." and ".$rs['password']. "\nRegards,\nAdmin";
 	
        $from = "admin@kupsip.com";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);
		
		if($_SESSION["checkout"]) {
		?>
        <script> if(!alert("Wellcome to Kupsip, an email has been sent to your email id - redirecting you to Checkout")) document.location = 'checkout_exec.php';
			exit();
        </script>
        <?php	
		}
		?>
        <script> if(!alert("Wellcome to Kupsip, an email has been sent to your email id")) document.location = 'index.php';
			exit();
        </script>
        <?php
	
		
		
	}
	  
  }
  
}



?>