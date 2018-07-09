<?php
date_default_timezone_set('UTC');
require('XLSXReader.php');
$xlsx = new XLSXReader('sample1.xlsx');
$sheetNames = $xlsx->getSheetNames();

?>
<!DOCTYPE html>
<html>
<head>
	<title>XLSXReader Sample</title>
	<style>
		body {
			font-family: Helvetica, sans-serif;
			font-size: 12px;
		}

		table, td {
			border: 1px solid #000;
			border-collapse: collapse;
			padding: 2px 4px;
		}
	</style>
</head>
<body>
<img src="top.png" width="100%" >
<hr>


<?
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
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $row[0] . '",';
    $outp .= '"new":"'   . $row[1]        . '",';
    $outp .= '"benifit":"'. $row[2]     . '"}';
	}
}
$outp ='{"records":['.$outp.']}';

echo($outp);
	
	
	}

}

?>

<?
$data = array_map(function($row) {
	$converted = XLSXReader::toUnixTimeStamp($row[0]);
	return array($row[0], $converted, date('c', $converted), $row[1]);
}, $xlsx->getSheetData('Dates'));
array_unshift($data, array('Excel Date', 'Unix Timestamp', 'Formatted Date', 'Data'));
array2Table($data);
?>

</body>
</html>


<?
function array2Table($data) {
	echo '<table>';
	foreach($data as $row) {
		echo "<tr>";
		foreach($row as $cell) {
			echo "<td>" . escape($cell) . "</td>";
		}
		echo "</tr>";
	}
	echo '</table>';
}

function debug($data) {
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function escape($string) {
	return htmlspecialchars($string, ENT_QUOTES);
}
