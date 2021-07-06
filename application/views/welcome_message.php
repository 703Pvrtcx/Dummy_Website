<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?> assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Bootstrapz CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Tekink</title>

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
		
	<img class="logo" src ="<?php echo base_url();?>assets/img/logo.png"/>	
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
	<div class="row justify-content-between">
		<div class="col-3">
			<div class="flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
					<img class="card-img-top" src ="<?php echo base_url();?>assets/img/CAD.png" alt="CAD"/>	
						<div class="card-body">
							<h5 class="card-title">Custom Application Development</h5>
							<div class="desc">We build highly secure, scalable and robust application</div>
						</div>
					</div>
					<div class="flip-card-back">
					
					</div>
				</div>
			</div>	
		</div>
		<div class="col-3">
			<div class="flip-card">
				<div class="flip-card-inner">
					<div class="flip-card-front">
	
					<img class="card-img-top" src ="<?php echo base_url();?>assets/img/WEB.png" alt="WAD"/>	
					<div class="card-body">
						<h5 class="card-title">Web Application Development</h5>
						<div class="desc">For e-commerce portals, CRM, CMS, ERP Solutions to Chatbot's</div>
					</div>

					</div>
					<div class="flip-card-back">
					
					</div>
				</div>
			</div>	
		</div>
		<div class="col-3">
		<div class="flip-card">
			<div class="flip-card-inner">
					<div class="flip-card-front">
					<img class="card-img-top" src ="<?php echo base_url();?>assets/img/Mobile.png" alt="MAD"/>	
					<div class="card-body">
						<h5 class="card-title">Mobile Application Development</h5>
						<div class="desc">Whether you require native or cross platform apps</div>
					</div>
					</div>
					<div class="flip-card-back">
					
					</div>
				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
						<img class="card-img-top" src ="<?php echo base_url();?>assets/img/custom.png" alt="MAD"/>	
						<div class="card-body">
							<h5 class="card-title">Software Application Development</h5>
							<div class="desc">Planning to outsource software maintenance service?</div>
						</div>
						</div>
						<div class="flip-card-back">
						
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>

<!-- Services -->
	<div class ="service" id="service">
		<div class="row justify-content-center">
			<div class="col-4">
			<img class="cloud" src ="<?php echo base_url();?>assets/img/cloud.png" alt="Cloud"/>	
				
			</div>
			<div class="col-6 content">
				<h2>Who We Are?</h2>
				<h4>Inspiring Technologies</h4>
				<p>
					Teklink is a South African based turnkey software and business solution provider <br>providing Web, Mobile App and Software Development.	<br/>Established in 2017, at Teklink we proudly develop our own client facing <br/> solutions that we fully operate as separate businesses as well as take<br/> development work for external clients.
				</p>
				<div class="col-5">
					<div class="input-container">
						<button class="btn btn-light btn-field"><strong>READ MORE</strong></button>
						<i class="fa fa-book icon"></i>
					</div>
				</div>
			</div>
		</div>

  </div>

	<!-- Approach -->
	<div class ="approach" id="approach">
		<div class="row justify-content-center">
				<div class="col-5">
					<img class="secure" src ="<?php echo base_url();?>assets/img/secure.png" alt="Secure image"/>	
				</div>
				<div class="col-7">
					<!-- Dedicated Support -->
					<div class="dedicated">
						<div class="dedicated-item">
							<div class="row">
								<div class="col-2">
									<div class="dedicated-icon">
									<img class="Support" src ="<?php echo base_url();?>assets/img/support.png" alt="Support"/>	
				
									</div>
								</div>
								<div class="col-8">
										<div class="dedicated-title">
										<strong>Dedicated Support</strong>
										</div>
										<div class="dedicated-p">We have a customer centric Support team dedicated to serve the needs of our customers. Our support team is available 24/7 and is supported by in-house built Customer Relationship Management (CRM) tool for better support experience.</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Dedicated Experts -->
					<div class="dedicated">
						<div class="dedicated-item">
							<div class="row">
								<div class="col-2">
									<div class="dedicated-icon">
									<img class="Experts" src ="<?php echo base_url();?>assets/img/Experts.png" alt="Support"/>	
	
									</div>
								</div>
								<div class="col-8">
										<div class="dedicated-title">
											<strong>Dedicated Experts</strong>
										</div>
										<div class="dedicated-p">We take security very seriously. We have developed a comprehensive set of practices, technologies, and policies to help ensure your data is secure, our cloud and local hosted solutions are fully supported by our team of security experts.</div>
								</div>
							</div>
						</div>
					</div>


					
					<!-- Dedicated Security -->
					<div class="dedicated">
						<div class="dedicated-item">
							<div class="row">
								<div class="col-2">
									<div class="dedicated-icon">
									<img class="Security" src ="<?php echo base_url();?>assets/img/security.png" alt="Security"/>	
				
									</div>
								</div>
								<div class="col-8">
										<div class="dedicated-title"><strong>Dedicated Security</strong></div>
										<div class="dedicated-p">We have a customer centric Support team dedicated to serve the needs of our customers. Our support team is available 24/7 and is supported by in-house built Customer Relationship Management (CRM) tool for better support experience.</div>
								</div>
							</div>
						</div>
					</div>


				</div>
		</div>
	</div>
	<!-- Portfolio -->
	<div class ="portfolio" id="portfolio">


	
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