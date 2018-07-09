<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

/*$conn = new mysqli("localhost", "root", "root", "kupsip");
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}*/
include('dbConfig.php');

$coffee_id = intval($_GET['coffee_id']);

if ($coffee_id == 100) {

	$result = $conn->query("SELECT p_id, p_name, p_price, p_img1, p_img2, p_img3, p_img4 FROM products");

}
else{

	$result = $conn->query("SELECT p_id, p_name, p_price, p_img1, p_img2, p_img3, p_img4 FROM products WHERE p_coffee_type = '$coffee_id'");
}
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["p_name"] . '",';
    $outp .= '"Id":"'   . $rs["p_id"]        . '",';
    $outp .= '"Image":"'   . $rs["p_img1"]        . '",';
    $outp .= '"Price":"'. $rs["p_price"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>