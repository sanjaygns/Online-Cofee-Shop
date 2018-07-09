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
			<h2>About Kupsip</h2>
				<p>India is a Coffee country and we have the geographical advantage which only adds to the goodness and flavour. Kupsip aims at bringing this goodness as quickly and as easily as possible from the crop to your cup!</p>
				<p><b>How do we do this?</b></p>
				<p>We have on board the best coffee roasters of the country. These roasters have undergone a tedious quality check before we welcomed them on board.</p>
				<p>We will make sure your love for coffee only increases. Best product, best delivery, at your door step!</p>

				
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