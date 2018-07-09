<!DOCTYPE html>
<html>
<head>
	<title>KupSip</title>
	<link rel="stylesheet" href="css/home_page.css">

</head>
<style>

#footer {
	width:100%;
	height:100px;
	position:relative;
	margin-top: -20px;
}
	@font-face {
	    font-family: 'OmbudsmanStencil';
	    src: url(../font/OmbudsmanStencil.ttf);
		}
		div.row_aroma{
			width: 100%;
			max-width: 100%;
			height: auto;
		}

	
    @media screen and (max-width: 500px){
    	
    	div.row_gift{	
				width: 450px;
				max-width:450px;
				margin:auto;	
			}
		div.add_space_subscription{
			height: 140px;
		}        
    }
		
	
</style>

<body>

	<?php include('header.php') ?>
	<div class="row_gift">
		<div class="w3-row row_aroma">
			<div class="w3-col l1"><p></p></div>
			<div class="w3-col l10">
			<h2>SHOP CONFIDENTLY ON KUPSIP</h2>
				<h3>Is it safe to use my Credit/Debit card on Kupsip?</h3>
				<p>Your online transaction on Kupsip is secure with the highest levels of transaction security currently available on the Internet.Kupsip uses 256-bit encryption technology to protect your card information while securely transmitting it to the respective banks for payment processing. All credit card and debit card payments on Kupsip are processed through secure and trusted payment gateways managed by leading banks. Banks now use the 3D Secure password service for online transactions, providing an additional layer of security through identity verification.</p>

				<h3>Does Kupsip store my Credit/Debit card information?</h3>
				<p>
				Kupsip stores the first 6 and last 4 digits of your card number in a secure and encrypted manner. The first 6 digits (also known as the Bank Identification Number) are used to identify the bank name and country where your card was issued. The first 6 and last 4 digits are together used for fraud detection and prevention purposes.
				</p>
				<h3>Payment Options.</h3>
				<p>What payment options are available on Kupsip?<br>
				We accept Paypal, VISA, MasterCard, Maestro and American Express cards issued by banks in India and abroad.
				info@Kupsip.com

				</p>
				
<br>
			</div>
			<div class="w3-col l1"><p></p></div>
		</div>

		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer.php') ?>
		</div>
	</div>
</body>
</html>