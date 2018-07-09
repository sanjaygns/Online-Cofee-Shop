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
			<h2>Shipping & Delivery</h2>
				<h3>Worldwide Shipping and Delivery Information</h3>
				<p>Orders received are processed at different times, based on the roasting days. Orders received generally leave the roasting facilities within 3-7 business days of order date . Please note that our International delivery partner, DHL/FedEx does not deliver Kupsip orders on Saturday or Sundays.</p>
				<p>For express delivery to Russia, it is necessary to provide passport details at the end of checkout process. Under the option of express delivery, orders will be dispatched within 3-9 business days, depending on Russian customs clearance documents. However, your order will be delivered within 14-28 business days from the date of ordering.</p>
				<p>To cancel your order, before the order leaving the roasting facility, send us an email to info@kupsip.com with your order details and we'll cancel it promptly.</p>

				<p>
				<b>Important Notice:</b> It has come to our notice that the Customs Department in Italy, Costa-Rica and Czech Republic may have begun charging an additional amount as Custom Clearance fee. We at Kupsip work with the customs clearance departments of different countries to ensure that the package reaches you as quickly as possible, but in these specific cases, the additional charge will have to be borne by the customer.
				</p>
				<h3>Payment Options.</h3>
				<p>What payment options are available on Kupsip?<br>
				We accept Paypal, VISA, MasterCard, Maestro and American Express cards issued by banks in India and abroad.
				info@Kupsip.com

				</p>
				<b>Please note that we do not accept cancellations once the orders have been dispatched from our partner roasting facility.</b>
				<h4>DELIVERY PARTNERS</h4>
				<p>For international shipping, we work primarily with DHL/FedEx, EMS (India Post) and Air Mail to deliver our coffees worldwide. Express service (DHL/FedEx) takes up to 5-7 working days for delivery, EMS Speed Post takes up to 10-14 working days for delivery & Air Mail takes up to 15-25 days for delivery.</p>
				<P>For shipping to destinations within India, we work with Blue Dart & DTDC.</P>
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