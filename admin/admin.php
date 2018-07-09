<?php
session_start();
include('dbConfig.php');

/*if(isset($_SESSION['admin'])!="")
{
  header("Location: admin_login.php");
}*/

if(isset($_POST['btn-login']))
{
  $auser = mysql_real_escape_string($_POST['email_id']);
  $apass = mysql_real_escape_string($_POST['pass']);
  
  $auser = trim($auser);
  $apass = trim($apass);
  
   $result = $conn->query("SELECT * FROM standard_roster WHERE emailid='$auser'");
    
	if( $result) {
		echo('sanjay123');
		$rs = $result->fetch_array(MYSQLI_ASSOC);
	}
echo('sanjay');
  
  
  
  if($rs['password']==$apass)
  {
    $_SESSION['roster_id'] = $rs['roster_id'];
    header("Location: ../roster_home.php");
  }
  else
  {
    ?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
  }
  
}
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<div class="w3-row">
  <div class="w3-col s12 m3 l3 w3-center"><p></p></div>
  <div class="w3-col s12 m6 l6">
    <form class="w3-container w3-card-4" method="post">
      <h2 class="w3-center w3-text-teal"><i>KUPSIP</i> Admin Panel</h2>
      <p>
      <input class="w3-input" name="email_id" type="text" required>
      <label class="w3-label w3-validate">Email</label></p>
      <p>
      <input class="w3-input" name="pass" type="password" required>
      <label class="w3-label w3-validate">Password</label></p>
      <p class="w3-center"><button type="submit" class="w3-btn w3-section w3-teal w3-ripple" name="btn-login"> Log in </button></p>

      </form>
  </div>
  <div class="w3-col s12 m3 l3 w3-center"><p></p></div>
</div>

</body>
</html>       
