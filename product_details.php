<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('dbConfig.php');

$prod_details = intval($_GET['prod_id']);

date_default_timezone_set('UTC');
require('XLSXReader.php');
$xlsx = new XLSXReader('sample1.xlsx');
$sheetNames = $xlsx->getSheetNames();


foreach($sheetNames as $sheetName) {
	if($sheetName=="Database") {
	$sheet = $xlsx->getSheet($sheetName);
	
	//array2Table($sheet->getData());

		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");



//echo $qs;
//echo "\n";
/*$qs = "(".$qs.")";*/


/*$result = $conn->query("SELECT * FROM products WHERE p_id IN (".$qs.") ");*/

	$data=$sheet->getData();
    $outp = "";
	foreach($data as $row) {
	if($row[0]!="" && $row[1]!="" && $row[2]!="" ) {
   	break;
	}
}}}




$result = $conn->query("SELECT p.*, srl.*, sct.*, sr.* FROM products AS p JOIN standard_rost_level as srl JOIN standard_coffee_type AS sct JOIN standard_roster AS sr WHERE p.p_id = '$prod_details' AND p.p_rost_level = srl.level_id AND p.p_coffee_type = sct.coffee_id AND p.p_roster = sr.roster_id ");

/*$result = $conn->query("SELECT * FROM products WHERE p_id = '$prod_details' ");*/
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$rosterid=$rs["p_roster"];
	if($rosterid) {
		$rost = $conn->query("SELECT * FROM standard_roster WHERE roster_id = '$rosterid' ");
		if($rost) {
			$rs1 = $rost->fetch_array(MYSQLI_ASSOC);
		}
		
	}
	
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $row[0] . '",';
    $outp .= '"Id":"'   . $row[1]        . '",';
    $outp .= '"Rost":"'   . $row[2]        . '",';
    $outp .= '"Type":"'   . $rs["p_coffee_type"]        . '",';
    $outp .= '"Roster":"'   . $rs["p_roster"]        . '",';
	$outp .= '"Roster_name":"'   . $rs1["roster_name"]        . '",';
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