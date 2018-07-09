<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('dbConfig.php');

$qs="";

$rid = $_SESSION['roster_id'];


$result = $conn->query("SELECT * from order_info where roster_id='$rid'");

/*$result = $conn->query("SELECT * FROM products WHERE p_id IN (".$qs.") ");*/

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"C_id":"'  . $rs["c_id"] . '",';
    $outp .= '"Order_id":"'   . $rs["order_id"]        . '",';
    $outp .= '"P_id":"'   . $rs["p_id"]        . '",';
    $outp .= '"Quantity":"'   . $rs["number"]        . '",';    
    $outp .= '"Quant":"'. $rs["number"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>