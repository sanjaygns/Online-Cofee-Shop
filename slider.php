<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    /* Removes the default 20px margin and creates some padding space for the indicators and controls */
.carousel {
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
}
/* Reposition the controls slightly */
.carousel-control {
    left: -12px;
}
.carousel-control.right {
    right: -12px;
}
/* Changes the position of the indicators */
.carousel-indicators {
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-right: -19px;
}
/* Changes the colour of the indicators */
.carousel-indicators li {
    background: #c0c0c0;
}
.carousel-indicators .active {
background: #333333;
}
</style>
<div class="container">
	<div class="row">
		<div class="span12">
    	    <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row-fluid">
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div><!--/myCarousel-->
                 
            </div><!--/well-->   
		</div>
	</div>
</div>
<script>
    $(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 10000
    })
});
</script>