<!DOCTYPE html>
<html>
<head>
<style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('cofe_h.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1024px) {
    .parallax {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<?php include('header.php') ?>

<div class="parallax"></div>

<div style="height:1000px;background-color:aliceblue;font-size:36px">
  <p>About us: </p>
  <p>Kupsip is a Bangalore based Coffee Company started by a bunch of Coffee lovers, for</p>
  <p>Coffee lovers. Our only focus is to provide you with a perfectly brewed cup of coffee each</p>
  <p>day. </p>
  <p>We understand you, your schedule and the nature of your Coffee buds and provide you the</p>
  <p>most suitable blend at your door step. And hey, we source it directly from the best Coffee</p>
  <p>roasters across India. </p>
  <p>We understand the importance of good Coffee and our effort is directed towards making</p>
  <p>Coffee an approachable and accessible luxury.</p>
  <p>If you wish, our Coffee for you will be customised.</p>
  <p>And every time, the first sip will make you say, </p>
  <p>&amp;quot;damn! I needed this!&amp;quot; </p>
  <p>Want your coffee customised? (A Hyperlink that will lead them to Coffee Guru’s tab)</p>
</div>

<div class="parallax"></div>
<div class="parallax"></div>

<div style="height:100px;background-color:red;font-size:36px">
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>

<div class="parallax"></div>

</body>
</html>
