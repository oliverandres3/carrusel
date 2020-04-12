<html>
<?php 
include_once("slider.php");
 ?>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 30%;
    margin: auto;
  }
  </style>
  <title>Prueba de PHP</title>
 <!--<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>-->
 <link href="css/style.css" rel="stylesheet">
 </head>
 <body>
 <p>slider de prueba</p>
 <div id="myCarousel" class="carousel slide">
<div class="container">
<h2>Create</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
<ol class="carousel-indicators">
<?php echo $button_html; ?>
</ol>
<div class="carousel-inner">
<?php echo $slider_html; ?>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
<ul class="thumbnails-carousel clearfix">
</ul>
</div>
</div>
</div>
 </body>
<script src="js/carousel-slider.js"></script>
</html>