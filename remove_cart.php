<?php
session_start(); 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*unset($_SESSION['cart']);*/
  
include('dbConfig.php');
$rmcart_product_id = intval($_GET['rmcart']);

unset($_SESSION['cart'][$rmcart_product_id]);

$qs="";

foreach ($_SESSION["cart"] as $key => $value) {
    if ($qs != ""){
        $qs .= ",";
    }
    $qs .= $value;
}


$result = $conn->query("SELECT p.*, srl.*, sct.*, sr.* FROM products AS p JOIN standard_rost_level as srl JOIN standard_coffee_type AS sct JOIN standard_roster AS sr WHERE p.p_rost_level = srl.level_id AND p.p_coffee_type = sct.coffee_id AND p.p_roster = sr.roster_id AND p.p_id in (".$qs.")");


$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["p_name"] . '",';
    $outp .= '"Id":"'   . $rs["p_id"]        . '",';
    $outp .= '"Rost":"'   . $rs["level"]        . '",';
    $outp .= '"Type":"'   . $rs["coffee_type"]        . '",';
    $outp .= '"Roster":"'   . $rs["roster"]        . '",';
    $outp .= '"Discription":"'   . $rs["p_discription"]        . '",';
    $outp .= '"Image1":"'   . $rs["p_img1"]        . '",';
    $outp .= '"Image2":"'   . $rs["p_img2"]        . '",';
    $outp .= '"Image3":"'   . $rs["p_img3"]        . '",';
    $outp .= '"Image4":"'   . $rs["p_img4"]        . '",';
    $outp .= '"Price":"'. $rs["p_price"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>