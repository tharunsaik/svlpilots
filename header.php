<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
<link rel="stylesheet" href="assets/css/svl-global.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<link rel="stylesheet" href="assets/css/flag.min.css">
<link rel="stylesheet" href="assets/css/animated-headlines.css">
<link rel="stylesheet" href="assets/css/hover-min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/back-to-top.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/styles.css">
<title>T-Pilots SVL</title>
<link rel="icon" href="assets/img/fav.png" type="image/gif">
</head>
<body data-spy="scroll" data-target="#navbar-sub" data-offset="100" class="position-relative">
<!--
Sign Up Modal
-->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<nav class="nav justify-content-center social-login a-mx-2 my-2">
				<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
				<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
				<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
			</nav>
			<p class="text-center text-muted">or Sign-Up with</p>
			<form>
				<div class="form-group">
					<label for="" class="sr-only">Name</label>
					<input type="text" class="form-control" id="" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label for="" class="sr-only">Enter Email or Phone Number</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
				</div>
				<div class="form-group font-size-1">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						<label class="form-check-label text-muted" for="inlineCheckbox1">Tell me about SVL Updates</label>
					</div>
				</div>
				<p class="font-size-2 text-muted">By signing up, I agree to SVL's <a href="#">Terms of Service, Privacy Policy, Guest Refund policy, and Host Guarantee Terms. Click Here</a></p>
				<button type="submit" class="btn btn-primary btn-block">Send OTP</button>
			</form>
		  </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Already a SVL Member? <a href="#signup" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign-In</a></p>
			</div>
		</div>
	</div>
</div>
<!--
Sign In Modal
-->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav class="nav justify-content-center social-login a-mx-2 my-2">
			<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
			<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
			<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
		</nav>
		<p class="text-center text-muted">or Sign-In with</p>
		<form>
			<div class="form-group">
				<label for="" class="sr-only">Enter Email or Phone Number</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
			</div>
			<div class="form-group">
				<label for="" class="sr-only">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
			</div>
			<div class="form-group font-size-1">
				<a href="#" class="float-right" data-toggle="modal" data-target="#forgotPassModal" data-dismiss="modal">Forgot password?</a>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
					<label class="form-check-label" for="inlineCheckbox1">Remember me</label>
				</div>
			</div>
			<a type="submit" class="btn btn-primary btn-block" href="dashboard.html">Submit</a>
		</form>
      </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Don't have an account? <a href="#" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal">Sign up</a></p>
			</div>
		</div>
	</div>
</div>
<!--
Forgot Password Modal
-->
<div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPassModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form>
					<div class="form-group">
						<label for="" class="sr-only">Enter Email or Phone Number</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Send OTP</button>
				</form>
      </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Already a SVL Member? <a href="#" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign-In</a></p>
			</div>
    </div>
  </div>
</div>
<!--
Map Share
-->
<div class="modal fade" id="shareMapModal" tabindex="-1" role="dialog" aria-labelledby="shareMapModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content rounded-0 border-2 border-primary">
		  <div class="modal-header">
			<h5 class="modal-title" id="shareMapModalLabel">Sign In</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<nav class="nav justify-content-center social-login a-mx-2 my-2">
						<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
						<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
						<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
					</nav>
					<p class="text-center text-muted">or Sign-In with</p>
					<form>
						<div class="form-group">
							<label for="" class="sr-only">Enter Email or Phone Number</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
						</div>
						<div class="form-group">
							<label for="" class="sr-only">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
						</div>
						<div class="form-group font-size-1">
							<a href="#" class="float-right">Forgot password?</a>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Remember me</label>
							</div>
						</div>
						<a type="submit" class="btn btn-primary btn-block" href="dashboard.html">Submit</a>
					</form>
		  </div>
				<div class="modal-footer text-center">
					<p class="font-size-2">Don't have an account? <a href="#">Sign up</a></p>
				</div>
		</div>
	  </div>
	</div>
<!--
Vehicle Details Modal
-->
<div class="modal fade" id="vehicleDetailsModal" tabindex="-1" role="dialog" aria-labelledby="vehicleDetailsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content rounded-0 border-2 border-primary">
		  <div class="modal-header">
			<h5 class="modal-title" id="vehicleDetailsModalLabel">Vehicle Details</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="container my-5">
					<div class="row">
						<div class="col">
							<h1 class="text-primary">SVL <span class="text-warning">City Taxi</span></h1>
							<p><strong>Lorem ipsum dolor sit amet</strong></p>
							<hr>
							<p>Consectetur adipisicing elit. Minima veniam ipsa asperiores architecto</p>
							<p><strong>•</strong>Nihil error Vero at ad. Facere a nihil vitae</p>
							<p><strong>•</strong>Expedita temporibus sed aliquam</p>
							<p><strong>•</strong>Quasi doloribus, iusto aut!</p>
							<div class="tq">
								<a href="#" class="btn btn-primary btn-lg rounded-0">Sign up to ride</a>
								<a href="#" class="btn btn-warning btn-lg rounded-0">Schedule for later</a>
							</div>
						</div>
						<div class="col">
							<img src="/assets/img/UberX.webp" alt="">
						</div>
					</div>
				</div>
      		</div>
		</div>
	</div>
</div>
<!--
Header
-->
<!--
Topbar
-->
<section class="bg-black top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <nav class="nav nav-divided justify-content-center justify-content-sm-start a-py-2 a-px-2 a-px-sm-4">
					<a href="#mail-us" class="nav-link" rel="PageScroll2id" data-ps2id-offset="50"><i class="fas fa-envelope"></i> Feedback</a>
					<a href="#contact-us" class="nav-link" rel="PageScroll2id" data-ps2id-offset="20"><i class="fas fa-map-marker-alt"></i> Contact Us</a>
				</nav>
            </div>
            <div class="col-sm-auto">
                <nav class="nav nav-divided justify-content-center justify-content-sm-end a-py-2 a-px-4">
					<a href="#" class="nav-link"><i class="fas fa-rupee-sign"></i></a>
					<a href="#" class="nav-link"><i class="in flag"></i></a>
					<a href="#" target="_blank" class="nav-link">Download Apps</a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-apple"></i></a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-android"></i></a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-youtube"></i></a>
					<a href="http://blog.svlglobal.com/" target="_blank" class="nav-link">SVLG Blog</a>
					<a href="#" class="nav-link" data-toggle="modal" data-target="#signUpModal">Sign-Up</a>
					<a href="#" class="nav-link" data-toggle="modal" data-target="#signInModal">Sign-In</a>
				</nav>
            </div>
        </div>
    </div>
</section>
<!--
Navbar
-->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="http://staging.tpilots.com/">
			<img src="assets/img/svltpilots.svg" alt="" width="87px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="navbarHome">
			<div class="navbar-nav ml-auto align-items-sm-center">
				<a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i></a>
				<a class="nav-item nav-link" href="driver.php">Driver</a>
				<a class="nav-item nav-link" href="rider.php">Rider</a>
				<a class="nav-item nav-link" href="business.php">Corporate</a>
				<a class="nav-item nav-link" href="features.php">Services</a>
				<a class="btn btn-sm btn-primary rounded-pill shadow-sm mx-3 bg-orange-500-hover border-orange-500-hover" target="_blank" href="http://book.svlglobal.com/">Book Now</a>
				<div class="nav-item dropdown allServicesDropdown">
					<a class="nav-link dropdown-toggle" href="#" id="allServicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-th"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="allServicesDropdown">
						<ul class="nav text-center">
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -345px;"></span>
									<span class="services-text">Account</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -138px;"></span>
									<span class="services-text">Search</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -1035px;"></span>
									<span class="services-text">Maps</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -1449px;"></span>
									<span class="services-text">YouTube</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -759px;"></span>
									<span class="services-text">Play</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -2208px;"></span>
									<span class="services-text">News</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -2139px;"></span>
									<span class="services-text">Gmail</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -2622px;"></span>
									<span class="services-text">Contacts</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 0;"></span>
									<span class="services-text">Drive</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -1794px;"></span>
									<span class="services-text">Calendar</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -1587px;"></span>
									<span class="services-text">Translate</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -2070px;"></span>
									<span class="services-text">Photos</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -69px;"></span>
									<span class="services-text">Shopping</span>
								</a>
							</li>
							<li class="nav-item col-sm-4">
								<a href="#" class="nav-link">
									<span class="services-icon" style="background-position: 0 -1242px;"></span>
									<span class="services-text">Duo</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>