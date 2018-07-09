<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('dbConfig.php');

$qs="";

foreach ($_SESSION["cart"] as $key => $value) {
    if ($qs != ""){
        $qs .= ",";
    }
   /* echo "Key:".$key; 
    echo "Value:".$value;
    echo "\n"; */
    $qs .= $value;
}
//echo $qs;
//echo "\n";
/*$qs = "(".$qs.")";*/

$result = $conn->query("SELECT p.*, srl.*, sct.*, sr.* FROM products AS p JOIN standard_rost_level as srl JOIN standard_coffee_type AS sct JOIN standard_roster AS sr WHERE p.p_rost_level = srl.level_id AND p.p_coffee_type = sct.coffee_id AND p.p_roster = sr.roster_id AND p.p_id in (".$qs.")");

/*$result = $conn->query("SELECT * FROM products WHERE p_id IN (".$qs.") ");*/

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["p_name"] . '",';
    $outp .= '"Id":"'   . $rs["p_id"]        . '",';
    $outp .= '"Rost":"'   . $rs["level"]        . '",';
    $outp .= '"Type":"'   . $rs["p_coffee_type"]        . '",';
    $outp .= '"Roster":"'   . $rs["p_roster"]        . '",';
    $outp .= '"Discription":"'   . $rs["p_discription"]        . '",';
    $outp .= '"Image1":"'   . $rs["p_img1"]        . '",';
    $outp .= '"Image2":"'   . $rs["p_img2"]        . '",';
    $outp .= '"Image3":"'   . $rs["p_img3"]        . '",';
    $outp .= '"Image4":"'   . $rs["p_img4"]        . '",';
    $outp .= '"Quant":"'   . $_SESSION["qnt"][$rs["p_id"]]        . '",';
    $outp .= '"Price":"'. $rs["p_price"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>