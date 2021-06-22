<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/about.css">

	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?> assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?> assets/css/about.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Teklink</title>

</head>
<body>

<ul class="nav justify-content-end bg-success navbar-dark">
	<span>Follow us:</span>
    <li class="nav-item">
      <a href="#">FB</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">W</a>
    </li>
    <li class="nav-item">
      <a class="nav-link bg-dark" href="#">Call Now!+(27)10 593 5223</a>
    </li>
  </ul>



  <!-- Home page -->
<div class="banner">
	<div class ="navbar"> 	
		
	<img class="logo" src ="<?php echo base_url();?>assets/img/icon_t.png"/>	
	
	<ul>
		
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About us</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#approach">Approach</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#contact">Contact</a></li>
			
		</ul>
	</div>
	<div class ="content">
		<h1><strong>End-to-End Product<br> Engineering</strong></h1>
		<p>We deliver high value innovated solutions by bridging the gap between <br>business and technology.
			
		</p>
		<div>
			<button type="button"><span></span>READ MORE!</button>
			
			<button type="button"><span></span>CONTACT US</button>
		</div>

	</div>
</div>

<!-- About us -->
<div class ="about" id="about">
		<h1>About Us</h1>
		<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
		
</div>
<!-- Services -->
	<div class ="service" id="service">
		<h1>Services</h1>
		<div class="card-group">
		<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>

</div>
	</div>
	<!-- Approach -->
	<div class ="approach" id="approach">
		<h1>Approach</h1>
		<p>Loren ipsom
			<br>
		</p>
		
	</div>
	<!-- Portfolio -->
	<div class ="portfolio" id="portfolio">
		<h1>Portfolio</h1>
		<p>Loren ipsom
			<br>
		</p>
	</div>
	<!-- Contact us -->
	<div class ="contact" id="contact">
		<h1>Contact Us</h1>
		<p>Loren ipsom
			<br>
		</p>
	</div>

	<!-- Footer -->

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
</body>
</html>