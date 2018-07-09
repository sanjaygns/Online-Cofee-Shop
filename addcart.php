<?php
session_start(); 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*unset($_SESSION['cart']);*/
if ( !isset( $_SESSION["cart"] ) ) {  
    $_SESSION["cart"] = array();  
} 
if ( !isset( $_SESSION["qnt"] ) ) {  
    $_SESSION["qnt"] = array();  
} 


$cart_product_id = intval($_GET['cart']);
$cart_quantity = intval($_GET['qnt']);






$_SESSION["cart"][$cart_product_id]=$cart_product_id;

$_SESSION["qnt"][$cart_product_id]=$cart_quantity;

$arr_len = sizeof($_SESSION["cart"]);

echo $arr_len."\n";

$qs="";

foreach ($_SESSION["cart"] as $key => $value) {
	if ($qs != ""){
		$qs .= ",";
	}
    echo "Key:".$key; 
    echo "Value:".$value;
    echo "\n";
    $qs .= $value;
	$qs .= "qnt ".$_SESSION["qnt"][$value]."   ";
}
$qs = "(".$qs.")";
/*echo "(".$qs.")";*/

echo $qs;

$outp = 'success';

echo($outp);
?>