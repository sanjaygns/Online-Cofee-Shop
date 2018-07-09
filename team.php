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
			<h2>Team</h2>

				<p><b>Team ( Please add a photo and some content after each name, we will give you the content later)</b></p>
				<p>
					<li>l	Mithun M Jagadeesh (Co - Founder) - MBA in Marketing & HR</li>
					<li>l	Gopinath S (Co- Founder) - MBA in Marketing & Tourism</li>
					<li>l	Sowmya Naik (Product Team) - PGDCQM</li>
					<li>l	Akanksha Gupta (Product Team) - PGDCQM</li>
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