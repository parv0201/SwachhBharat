
<?php
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Swachh Bharat</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
	</style>
</head>
<body>
	<div class="container" style="width: 100%;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img\1.jpg" width="800" height="600">
      </div>

      <div class="item">
        <img src="img\5.jpg" width=800" height="600">
      </div>
    
      <div class="item">
        <img src="img\6.jpg" width="800" height="600">
      </div>

      <div class="item">
        <img src="img\4.jpg" width="800" height="600">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <br>
</div>
<section id="aboutus">
	<h2 class="section-heading" align="center">About Website</h2>
	<br>
	<div class="row text-center">
		<div class="col-md-4">
			<h4> Complaint Box </h4>
			<p class="text-muted">We provide you complaint box to complain about lack of cleanliness around you</p>
		</div>
		<div class="col-md-4">
			<h4> NGOs & Volunteers </h4>
			<p class="text-muted">This website provides platform to NGOs and Volunteer to come foraward and contribute to Clean India Movement</p>
		</div>
		<div class="col-md-4">
			<h4>Events</h4>
			<p class="text-muted">We provide you various evnets related to Clean India happning in city</p>
		</div>
	</div>
</section>
</body>
</html>
<?php
	include('footer.php');
?>