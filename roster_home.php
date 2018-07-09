<!DOCTYPE html>
<?php
session_start();
?>
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
			height: 400px;
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

	<?php include('roster_header.php') ?>
	<div class="row_gift">
		<div class="w3-row row_aroma">
			suchita
		</div>

		<div id="content">

		</div>
		<div id="footer">
			<?php include('footer.php') ?>
		</div>
	</div>
</body>
</html>