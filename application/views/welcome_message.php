<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
 
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles1.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style1.css') ?>" rel="stylesheet">


	<!-- <link rel="stylesheet" type="text/css" href="<?php  echo base_url();?> assets/css/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Bootstrapz CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Tekink</title>

</head>
<body>



<div class="container">
  
<nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-dark">
     
     <div class="container">
      <a class="navbar-brand" href="#">INK-DEMO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
          <a class="nav-link" href="#Home">Home</a>     
          </li>
          <li class="nav-item">
		  <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
		  <a class="nav-link" href="#contact">Contact</a>
		  </li>
          <li class="nav-item">
		  <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
		  
          <li class="nav-item">
		  <a class="nav-link" href="#approach">Approach</a>
          </li>
          <li class="nav-item">
		  <a class="nav-link" href="#projects">Projects</a>
          </li>
		  
          <li class="nav-item">
		  <a class="nav-link" href="#services">Services</a>
          </li>

        </ul>
        <ul class="navbar-nav right">
        <li class="nav-item">
		<a class="nav-link"  href="#Sign-up">Sign-Up</a>
            </li>
        </ul>
          </div>
          </div>
    </nav>


<div class="container">

 	<div class ="content">
		<h1><strong>End-to-End Product<br> Engineering</strong></h1>
		<p>We deliver high value innovated solutions by bridging the gap between <br>business and technology.</p>
		<div>
			<button type="button"><span></span>READ MORE!</button>
			
			<button type="button"><span></span>Portfolio US</button>
		</div>

	</div>
</div> 


<!-- About us -->
<div class ="about" id="about">
	<div class="row justify-content-between">
		<div class="col-lg-3 col-md-4 col-sm-6">
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
		<div class="col-lg-3 col-md-4 col-sm-6">
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
		<div class="col-lg-3 col-md-4 col-sm-6">
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
		<div class="col-lg-3 col-md-4 col-sm-6">
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
	<div class ="services" id="services">
		<div class="row justify-content-center">
			<div class="col-md-4 col-sm-12">
			<img class="cloud" src ="<?php echo base_url();?>assets/img/cloud.png" alt="Cloud"/>	
				
			</div>
			<div class="col-md-6 col-sm-12 content">
				<h2>Who We Are?</h2>
				<h4>Inspiring Technologies</h4>
				<p>
					Teklink is a South African based turnkey software and business solution provider <br>providing Web, Mobile App and Software Development.	<br/>Established in 2017, at Teklink we proudly develop our own client facing <br/> solutions that we fully operate as separate businesses as well as take<br/> development work for external clients.
				</p>
				<div class="col-md-5 col-sm-12">
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
				<div class="col-md-5  col-sm-12">
					<img class="secure" src ="<?php echo base_url();?>assets/img/secure.png" alt="Secure image"/>	
				</div>
				<div class="col-md-7 col-sm-12">
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

	<!-- was working  ka service class -->
<div class="portfolio" id="portfolio" >
		<div class="portfolio">
		<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="circle-image">Image</div>
				<div class="circle-title">Research & Concept</div>
				<div class="p">The hardest part of what we do is working out exactly what needs doing. We already have a rough idea but we dig far deeper and work out the tiny intricacies of what needs to be done and conceptualising</div>
			</div>	
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="circle-image">Image</div>
				<div class="circle-title">Design & Work Flows</div>
				<div class="p">Next, we will get working on the layout of the software and the key flows that the system is being built around. At this point 80% of the system will be designed from a visual perspective to make it simpler to understand.</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="circle-image">Image</div>
				<div class="circle-title">Development & Testing</div>
				<div class="p">It's at this point we go a little quiet and just get it done. We give you progress reports when we reach milestones. There will be occasions where we need something clarified or checked. This is the longest part of the process.</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="circle-image">Image</div>
				<div class="circle-title">Training & Deployment</div>
				<div class="p">We will always find the best and convenient time after your training to launch and get the system going, We've found that the shorter space of time between training and launch the more common it is to need re-training.</div>
			</div>
		</div>
</div>

	<!-- Portfolio us -->
	<div class ="contact" id="contact">
		<h2>Use Teklink Today, and Get World Class Service!</h2>
		<br>
		<p>Faster time to market, delightful customer experience and continuous evolution in the midst of uncertainties are the most pressing concerns<br> of disruptive product companies.</p>
		<br><br>
		<button type="button" class="btn btn-success"> ABOUT US
		</button>
		<button type="button" class="btn btn-outline-dark"  >Portfolio US</button>
	</div>

	<!-- Footer -->
	<div class="footer">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="address"> Address</div>



		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="quick-menu">Quick Menu</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="latest-tweets">Latest Tweets</div>
		</div>
	</div>
	</div>
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js') ?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/vendor/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/holder.min.js') ?>"></script>


 </body>
</html>