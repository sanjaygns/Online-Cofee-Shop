<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$country= $_POST["country"];

$address= $_POST["address"];
$pin=$_POST["pin"];
$address1=$_POST["location"];
$fields_string="";

$paypalUrl='https://www.paypal.com/cgi-bin/webscr';
$paypalId='support@kupsip.com';

function redirect_post($url, array $data)
{
    ?>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript">
            function closethisasap() {
                document.forms["redirectpost"].submit();
            }
        </script>
    </head>
    <body onload="closethisasap();">
    <form name="redirectpost" method="post" action="<? echo $url; ?>">
        <?php
        if ( !is_null($data) ) {
            foreach ($data as $k => $v) {
                echo '<input type="hidden" name="' . $k . '" value="' . $v . '"> ';
            }
        }
        ?>
    </form>
    </body>
    </html>
    <?php
    exit;
}


if($country !="India") {
	$url = $paypalUrl;
	$fields = array(
                        'business' => ($paypalId),
                        'cmd' => urlencode("_xclick"),
                        
                        'item_name' => urlencode($product_name),
                        'item_number' => urlencode("1"),
                        'amount' => urlencode($price),
						'no_shipping' => urlencode("1"),
						'currency_code' => urlencode("USD"),
						'cancel_return' => urlencode("http://kupsip.co/ks/cancel.php"),
                        'return' => urlencode("http://kupsip.co/ks/success.php")
                );

	redirect_post($url, $fields);
	
	//url-ify the data for the POST
/*	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);
	*/
	
}

else {
include 'src/instamojo.php';

$api = new Instamojo\Instamojo('bc9c53e0e4d40059ce152d1e29ddefac', '98024ae3bc56ce3c260607bce2142d4e','https://www.instamojo.com/api/1.1/payment-requests/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => false,
        "send_sms" => false,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://kupsip.co/ks/insta/thankyou.php",
        "webhook" => "http://kupsip.co/ks/insta/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
} ?>
