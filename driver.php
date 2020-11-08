<!-- Header -->
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
<!-- Header -->
<!-- Breadcrumbs -->
<section class="breadcrumbs bg-grad pattern-overlay-2 overflow-hidden">
	<div class="container">
		<div class="row text-white">
			<div class="col pt-3">
				<nav aria-label="breadcrumb" class="nav justify-content-end">
				  <ol class="breadcrumb bg-transparent">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Driver</li>
				  </ol>
				</nav>
				<h1 class="font-weight-bold display-1 mb-md-n4 mt-4 pt-4 text-white">Driver</h1>
			</div>
		</div>
	</div>	
</section>
<!--
Why SVL Global
-->
<div class="container-fluid px-0">
	<div class="row no-gutters">
		<div class="col-sm-2">
			<nav id="pagenav" class="position-sticky">
				<nav class="nav flex-column">
					<a class="nav-item nav-link" href="#WhySVL" uk-scroll offset="50">Why Drive with Us?</a>
					<a class="nav-item nav-link" href="#LifeSVL" uk-scroll offset="50">Here's what you need to sign up?</a>
					<a class="nav-item nav-link" href="#OurCoreValues" uk-scroll offset="50">How Driver can Earn?</a>
					<a class="nav-item nav-link" href="#VisionMission" uk-scroll offset="50">It’s easy to get started with T-Pilots</a>
					<a class="nav-item nav-link" href="#KeyFactors" uk-scroll offset="50">Be your own Boss</a>
					<a class="nav-item nav-link" href="#Quality" uk-scroll offset="50">Why our captain love us?</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">Why become a captain?</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">T-Pilots Requirements</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">Why wait? get started</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">How T-Pilots Works?</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">Our Captain safety is our Priority</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">How would you like to Partner with Us?</a>
					<a class="nav-item nav-link" href="#CSR" uk-scroll offset="50">Why join T-Pilots Taxi?</a>
				</nav>
			</nav>
		</div>
		<main class="col border-left-2 overflow-hidden">
			<section id="WhySVL" class="bg-blue-50 p-5 position-relative">
				<div class="heading-block">
					<span class="badge badge-warning bg-blue-100 text-primary">Know More</span>
					<h2 class="display-4 text-primary">Why Drive with Us?</h2>
				</div>
				<header class="pb-5">
					<div class="row align-items-md-center">
						<div class="col-sm-6 pl-5">
							<div class="row">
								<div class="col-6 col-sm-6 mb-4">
									<div class="text-primary font-size-10 fweight-500">3+</div>
									<h5 class="mt-0 t500">Set your own hours</h5>
								</div>
								<div class="col-6 col-sm-6 mb-4">
									<div class="text-primary font-size-10 fweight-500">37+</div>
									<h5 class="mt-0 t500">Get Paid fast</h5>
								</div>
								<div class="col-6 col-sm-6 mb-4">
									<div class="text-primary font-size-10 fweight-500">21+</div>
									<h5 class="mt-0 t500">Get Support at every turn</h5>
								</div>
								<div class="col-6 col-sm-6 mb-4">
									<div class="text-primary font-size-10 fweight-500">4500+</div>
									<h5 class="mt-0 t500">Community</h5>
								</div>
							</div>
							<p class="text-muted">You decide when and how often you drive.</p>
						</div>
						<div class="col-sm-3" uk-parallax="y: -150,0; viewport: 0.4;">
							<div class="card shadow-sm border-light">
							<img src="https://picsum.photos/id/1013/1920/1080" alt="Featured image 1" class="card-img-top">
							<div class="card-body">
							<h5 class="card-title t600 color">Weekly payments in your bank account.</h5>
							<p class="card-text">Some quick example text to build on the card title.</p>
							</div>
							</div>
							<div class="card shadow-sm border-light mt-4">
							<img src="https://picsum.photos/id/1063/1920/1080" alt="Featured image 2" class="card-img-top">
							<div class="card-body">
							<h5 class="card-title t600 color">If there’s anything that you need, you can reach us anytime.</h5>
							<p class="card-text">Some quick example text. similique reprehenderit ab voluptatibus eaque.</p>
							</div>
							</div>
						</div>
						<div class="col-sm-3 pl-sm-3 mt-3 mt-sm-0" uk-parallax="y: -100,0; viewport: 0.3;">
							<div class="card shadow-sm border-light">
							<img src="https://picsum.photos/id/1070/1920/1080" alt="Featured image 3" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Be part of a respected driver community that supports each other</p>
							</div>
							</div>
						</div>
					</div>
				</header>
				<footer class="row justify-content-end position-absolute" style="z-index: 1;">
					<div class="col-sm-11 col-md-10">
						<div class="card bg-primary uk-light text-white border-top-0 border-bottom-0 border-right-0 rounded-right-0 border-left-4 border-blue-900">
							<div class="card-body row justify-content-end">
								<div class="col-sm">
									<div class="media align-items-top">
										<i class="far fa-check-circle fa-lg mt-2 mr-3"></i>
										<div class="media-body">
											<h5>Easily Manage Your Works</h5>
											<p class="font-size-3 mb-0">24x7 available, Anytime &amp; anywhere, we're always available for You.</p>
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="media align-items-top">
										<i class="far fa-check-circle fa-lg mt-2 mr-3"></i>
										<div class="media-body">
											<h5>24x7 Access.</h5>
											<p class="font-size-3 mb-0">Get Started with our Regular, Weekly, Monthly Plan.</p>
										</div>
									</div>
								</div>
								<div class="col-sm">
									<div class="media align-items-top">
										<i class="far fa-check-circle fa-lg mt-2 mr-3"></i>
										<div class="media-body">
											<h5>Secured &amp; Friendly.</h5>
											<p class="font-size-3 mb-0">Intrinsicly evisculate quality vectors befor high-impact schemas.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</section>
			
			<section id="LifeSVL">
				<header class="card rounded-0 border-0 uk-background-cover uk-light text-white bg-black-before before opacity-7-before pt-5" uk-parallax="bgy: -300" style="background-image: url('https://picsum.photos/id/1071/1920/1080');">
					<div class="card-body position-relative pt-5">
						<h2 class="heading text-uppercase text-center mb-5 position-relative">Here’s what you need to sign up?</h2>
						<div class="row">
							<div class="col">
								<h3>Requirements:</h3>
								<ol type="a">
									<li>Be at least 18 years old</li>
									<li>Clear a background screening</li>
								</ol>
							</div>
							<div class="col">
								<h3>Documents:</h3>
								<ol type="a">
									<li>Valid driver's license (private or commercial), if you plan to drive</li>
									<li>Proof of residency in your city, state or province</li>
									<li>Car documents such as commercial insurance, vehicle registration certificate, permit</li>
								</ol>
							</div>
							<div class="col">
								<h3>Signup Process:</h3>
								<ol type="a">
									<li>Visit the nearest Partner Support Centre in your city</li>
									<li>Submit documents and photo</li>
									<li>Provide information for a background check</li>
								</ol>
							</div>
						</div>
					</div>
				</header>
			</section>
			
			<section id="OurCoreValues" class="py-5 position-relative uk-background-cover" uk-parallax="bgy: -300" style="background-image: url('/assets/img/bg-3.svg');">
				<div class="container-fluid">
					<div class="row justify-content-start justify-content-sm-center justify-content-md-start">
						<div class="col-lg-4 col-md-6">
							<div class="heading-block services-info pr-1">
								<h2 class="t400 ls0 nott font-primary">How Driver Can earn?</h2>
								<p class="lead">There are three ways below</p>
							</div>
						</div>
					</div>
					<div class="row align-items-md-center mt-3">
						<div class="col-md-4 px-lg-4">
							<div class="card style-1 border-color-pink">
								<div class="card-body px-4 py-5">
									<div class="feature-box media-box">
										<div class="feature-box media-box">
											<div class="fbox-icon position-relative mb-3" style="width: 50px;height: 50px">
											<svg enable-background="new 0 0 464.585 464.585" viewBox="0 0 464.585 464.585" xmlns="http://www.w3.org/2000/svg"><path d="m464.585 393.312-87.463-315.015-75.392 20.932 8.329 29.998h-83.857v-41.781h-78.243v30.92h-42.373v-68.159h-105.586v364.17h90.586 15 42.373 15 48.243 15 98.153v-233.662l64.838 233.528zm-301.626-290.866h48.243v37.147h-48.243zm0 99.364h48.243v170.575h-48.243zm0-15v-8.608h48.243v8.608zm0-23.608v-8.609h48.243v8.609zm-72.373 206.987h-75.586v-275.99h75.586zm0-304.982v13.992h-75.586v-13.992zm-75.586 334.171v-14.189h75.586v14.189zm132.959 0h-42.373v-266.012h42.373zm15 0v-11.993h48.243v11.993zm146.396 0h-83.153v-255.152h83.153zm90.279-3.6-52.742-189.961 46.485-12.907 52.742 189.961zm-56.755-204.414-4.133-14.884 46.485-12.907 4.133 14.884zm23.802-94.602 14.537 52.358-46.485 12.907-14.537-52.358z"></path><path d="m243.621 160.457h48.315v15h-48.315z"></path><path d="m243.621 186.81h48.315v15h-48.315z"></path><path d="m243.621 213.164h48.315v15h-48.315z"></path><path d="m243.621 365.797h48.315v15h-48.315z"></path><path d="m119.272 272.274h15v25.255h-15z"></path><path d="m119.272 311.805h15v57.099h-15z"></path><path d="m119.272 189.919h15v68.081h-15z"></path><path d="m119.272 150.387h15v26.354h-15z"></path></svg>
											</div>
											<div class="fbox-desc">
												<h3 class="font-size-7">Driver under partner</h3>
												<p class="text-muted">A driver under partner drives a vehicle owned by a non-driving partner. The following document is required of a driver under partner:</p>
												<ul>
													<li>Commercial Driving License with Badge</li>
												</ul>
												<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
													<span class="btn-arrow"></span>
													<span class="twp-read-more text">Continue Reading</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-md-4 px-lg-4 mt-3 mt-md-0">
							<div class="card style-1">
								<div class="card-body px-4 py-5">
									<div class="feature-box media-box">
										<div class="fbox-icon position-relative mb-4" style="width: 50px;height: 50px">
										<svg enable-background="new 0 0 485.5 485.5" viewBox="0 0 485.5 485.5" xmlns="http://www.w3.org/2000/svg"><path d="m422.1 126.2h-295.7c-27.4 0-49.8-22.3-49.8-49.8 0-27.4 22.3-49.8 49.8-49.8h295.8c7.4 0 13.3-6 13.3-13.3 0-7.4-6-13.3-13.3-13.3h-295.8c-42.1 0-76.4 34.3-76.4 76.4v332.7c0 42.1 34.3 76.4 76.4 76.4h295.8c7.4 0 13.3-6 13.3-13.3v-332.7c-.1-7.3-6-13.3-13.4-13.3zm-13.3 332.7h-282.4c-27.4 0-49.8-22.3-49.8-49.8v-274.7c13.4 11.5 30.8 18.5 49.8 18.5h282.4z"></path><path d="m130.6 64.3c-7.4 0-13.3 6-13.3 13.3s6 13.3 13.3 13.3h249.8c7.4 0 13.3-6 13.3-13.3s-6-13.3-13.3-13.3z"></path><path d="m177.4 400.7c1.5.5 3 .8 4.5.8 5.5 0 10.6-3.4 12.5-8.8l16.2-45.3h62.4c.5 0 1.1 0 1.6-.1l16.2 45.4c1.9 5.4 7.1 8.8 12.5 8.8 1.5 0 3-.3 4.5-.8 6.9-2.5 10.5-10.1 8-17l-60.6-169.9c-.1-.4-.3-.8-.5-1.2-.1-.2-.2-.4-.3-.6s-.2-.4-.3-.6-.3-.4-.4-.7c-.1-.1-.2-.3-.3-.4-.1-.2-.3-.4-.5-.6-.1-.1-.2-.3-.4-.4-.1-.2-.3-.3-.5-.5s-.3-.3-.5-.5c-.1-.1-.3-.2-.4-.4-.2-.2-.4-.3-.6-.5-.1-.1-.3-.2-.4-.3-.2-.1-.4-.3-.6-.4s-.4-.2-.6-.3-.4-.2-.6-.3c-.4-.2-.8-.4-1.2-.5h-.1c-.4-.1-.8-.2-1.2-.3-.2 0-.3-.1-.5-.1-.3-.1-.5-.1-.8-.2-.2 0-.4 0-.6-.1-.2 0-.5-.1-.7-.1s-.4 0-.6 0-.4 0-.7 0c-.2 0-.5 0-.7.1-.2 0-.4 0-.6.1-.3 0-.5.1-.8.2-.2 0-.3.1-.5.1-.4.1-.8.2-1.1.3h-.1c-.4.1-.8.3-1.2.5-.2.1-.4.2-.6.3s-.4.2-.6.3-.4.3-.7.4c-.1.1-.3.2-.4.3-.2.2-.4.3-.6.5-.1.1-.3.2-.4.4-.2.2-.3.3-.5.5s-.3.3-.5.5c-.1.1-.2.3-.4.4-.2.2-.3.4-.5.6-.1.1-.2.3-.3.4-.1.2-.3.4-.4.6s-.2.4-.3.6-.2.4-.3.6c-.2.4-.4.8-.5 1.2l-60.8 169.9c-2.2 7 1.4 14.6 8.3 17.1zm65.3-142.9 22.5 63h-45.1z"></path></svg>
										</div>
										<div class="fbox-desc">
											<h3 class="font-size-7 fweight-400">Driver cum Owner</h3>
											<ol type="a">
												<li>A driver cum owner drives a vehicle that he or she owns. Requirements vary by city, but there are a few minimum requirements</li>
												<li>Commercial Driving License with Badge</li>
												<li>Vehicle Registration Certificate</li>
												<li>Vehicle Insurance</li>
												<li>Vehicle Permit</li>
												<li>Vehicle Fitness Certificate</li>
											</ol>
											<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
												<span class="btn-arrow"></span>
												<span class="twp-read-more text">Continue Reading</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card style-1 border-color-yellow p-2 py-lg-5 px-xl-3 px-lg-2 mt-3 mt-lg-5">
								<div class="card-body rounded">
									<div class="feature-box media-box">
										<div class="fbox-icon position-relative mb-4" style="width: auto;height: auto">
										<div class="d-flex align-items-center">
											<svg width="32" height="32" viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path><path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path><path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path></svg>
											<span class="text-muted ml-3 h6 m-0">+</span>
											<svg width="32" height="32" class="ml-3" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"></path></svg>
										</div>
										</div>
										<div class="fbox-desc">
											<h3 class="font-size-7">Non-driving Partner</h3>
											<p class="text-muted">A non-driving partner or fleet partner is someone who does not drive on the T-Pilots platform but owns vehicle(s) and manages at least one driver. Becoming a non-driving partner requires:</p>
											<ul>
												<li>Driving License or Photo ID</li>
												<li>Vehicle Registration Certificate</li>
												<li>Vehicle Insurance</li>
												<li>Contract Carriage Permit</li>
											</ul>
											<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
												<span class="btn-arrow"></span>
												<span class="twp-read-more text">Continue Reading</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 px-lg-4 mt-3 mt-md-0">
							<div class="card style-1 border-color-info p-2 py-lg-5 px-xl-3 px-lg-2">
								<div class="card-body">
									<div class="feature-box media-box">
										<div class="fbox-icon position-relative mb-3" style="width: 52px;height: 52px">
										<svg enable-background="new 0 0 496.592 496.592" viewBox="0 0 496.592 496.592" xmlns="http://www.w3.org/2000/svg"><path d="m400.296 328v-51.696l-21.816 8.488-.064-.144-.52-.944c-8.36-13.016-21.88-22.072-37.104-24.832l-52.496-9.552v-4.144c19.632-11.4 34.008-30.848 38.488-53.84 14.544-3.008 25.512-15.912 25.512-31.336v-79.016c0-22.328-14.624-41.8-35.84-48.136l-4-4c-18.608-18.608-43.344-28.848-69.656-28.848-54.312 0-98.504 44.184-98.504 98.504v61.496c0 15.424 10.968 28.328 25.512 31.336 4.488 22.992 18.856 42.448 38.488 53.84v4.144l-52.488 9.544c-15.208 2.76-28.72 11.8-37.088 24.808l-.48 1.168-21.944-8.536v51.696c-13.232 0-24 10.768-24 24v32c0 13.232 10.768 24 24 24v29.472l152 59.12 152-59.12v-29.472c13.232 0 24-10.768 24-24v-32c0-13.232-10.768-24-24-24zm-97.008-59.688 34.64 6.296c10.2 1.856 19.232 7.744 25.256 16.128l-77.4 30.096zm-78.312-15.8c7.384 2.256 15.208 3.488 23.32 3.488s15.936-1.232 23.32-3.488l-23.32 17.488zm11.144 28.352-16.328 16.32-10.592-31.768 5.096-.92zm46.176-16.36 5.096.92-10.592 31.768-16.328-16.32zm46-90.728v-27.552c4.76 2.776 8 7.88 8 13.776s-3.24 11-8 13.776zm-160 0c-4.76-2.776-8-7.88-8-13.776s3.24-11 8-13.776zm0-53.776v9.136c-2.848.744-5.52 1.864-8 3.312v-33.944c0-45.488 37.008-82.504 82.504-82.504 22.032 0 42.76 8.584 58.344 24.168l7.056 7.064 2.152.528c15.28 3.816 25.944 17.48 25.944 33.224v51.464c-2.48-1.448-5.152-2.576-8-3.312v-9.136h-25.368c-21.68 0-42.4-10.352-55.4-27.688l-6.36-8.496-15.896 15.904c-13.088 13.08-30.48 20.28-48.976 20.28zm16 56v-40.368c19.752-1.832 38.08-10.4 52.288-24.6l3.112-3.112c16.04 17.704 39.144 28.08 63.232 28.08h9.368v40c0 35.288-28.712 64-64 64s-64-28.712-64-64zm-25.632 98.608 34.64-6.296 17.504 52.52-77.416-30.104c6.024-8.392 15.072-14.264 25.272-16.12zm-70.368 109.392v-32c0-4.416 3.592-8 8-8 13.232 0 24 10.768 24 24s-10.768 24-24 24c-4.408 0-8-3.584-8-8zm152 92.304-128-49.768v-21.928c14.104-6.192 24-20.248 24-36.608s-9.896-30.416-24-36.608v-31.696l128 49.776zm-23.752-153.232 31.752-31.76 31.752 31.752-31.752 12.352zm167.752 103.456-128 49.768v-126.824l128-49.776v31.696c-14.104 6.192-24 20.248-24 36.608s9.896 30.416 24 36.608zm24-42.528c0 4.416-3.592 8-8 8-13.232 0-24-10.768-24-24s10.768-24 24-24c4.408 0 8 3.584 8 8z"></path></svg>
										</div>
										<div class="fbox-desc">
											<h3 class="font-size-7 fweight-400">Full Customer Satisfaction.</h3>
											<p class="text-muted font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
											<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
												<span class="btn-arrow"></span>
												<span class="twp-read-more text">Continue Reading</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="VisionMission">
				<div class="row align-items-stretch">
					<div class="col-sm-4 card bg-teal-A700 uk-light text-white rounded-0 border-0 overflow-hidden">
						<h3 class="card-header bg-transparent border-0 text-uppercase">Why choose Us</h3>
						<div class="card-body">
							<p class="font-size-3" style="line-height: 1.8;">Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.</p>
							<i class="far fa-lightbulb bgicon"></i>
						</div>
						<div class="card-footer border-0 bg-transparent">
							<a href="#" class="btn text-white mt-4 read-more button-fancy -red">
								<span class="btn-arrow"></span>
								<span class="twp-read-more text">Continue Reading</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 card bg-blue-grey-700 uk-light text-white rounded-0 border-0 overflow-hidden">
						<h3 class="card-header bg-transparent border-0 text-uppercase">Our Mission</h3>
						<div class="card-body">
							<p class="font-size-3" style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.</p>
							<i class="fas fa-cog bgicon"></i>
						</div>
						<div class="card-footer border-0 bg-transparent">
							<a href="#" class="btn text-white mt-4 read-more button-fancy -red">
								<span class="btn-arrow"></span>
								<span class="twp-read-more text">Continue Reading</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 card bg-red-500 uk-light text-white rounded-0 border-0 overflow-hidden">
						<h3 class="card-header bg-transparent border-0 text-uppercase">What you get</h3>
						<div class="card-body">
							<p class="font-size-3" style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
							<i class="fas fa-thumbs-up bgicon"></i>
						</div>
						<div class="card-footer border-0 bg-transparent">
							<a href="#" class="btn text-white mt-4 read-more button-fancy -red">
								<span class="btn-arrow"></span>
								<span class="twp-read-more text">Continue Reading</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			
			<section id="KeyFactors" class="position-relative p-5">
				<div class="card border-0 uk-light text-white call-to-action-area m-5">
					<div class="card-body p-5">
						<div class="row">
							<div class="col-12">
								<h2 class="text-white text-center text-uppercase mb-5">Key factors</h2>
							</div>

							<!-- Single Content -->
							<div class="col-md-6 col-lg-4">
								<div class="single-call-desc-content ca-mb-50">
									<h4>Download</h4>
									<p>Stoke makes building websites for your clients so much easier, faster and more enjoyable. With Stoke, you can build anything using themes.</p>
								</div>
							</div>

							<!-- Single Content -->
							<div class="col-md-6 col-lg-4">
								<div class="single-call-desc-content ca-mb-50">
									<h4>Install</h4>
									<p>Stoke makes building websites for your clients so much easier, faster and more enjoyable. With Stoke, you can build anything using themes.</p>
								</div>
							</div>

							<!-- Single Content -->
							<div class="col-md-6 col-lg-4">
								<div class="single-call-desc-content">
									<h4>Run</h4>
									<p>Stoke makes building websites for your clients so much easier, faster and more enjoyable. With Stoke, you can build anything using themes.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="Quality" class="py-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col">
							<nav>
							  <div class="nav nav-tabs justify-content-center text-center" id="KeyFactors-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-chalkboard fa-3x"></i><br> Inter-Connected Verticals</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="far fa-building fa-3x"></i><br> Self Sustained Automotive</a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-desktop fa-3x"></i><br> Growth Consistency </a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="far fa-address-card fa-3x"></i><br> Intellectual Team  </a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="far fa-money-bill-alt fa-3x"></i><br> Cost Effectiveness </a>
							  </div>
							</nav>
							<div class="tab-content p-5" id="KeyFactors-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="row no-gutters align-items-center">
										<div class="col-sm-5 tabContentInfo" style="z-index: 1;" uk-parallax="y: -100,0; viewport: 0.5;">
											<div class="card border-0 rounded-0 shadow-20dp">
												<div class="card-body p-5">
													<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
													<p class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, doloremque rerum! Aut doloremque, fuga nihil pariatur enim officiis aspernatur recusandae, qui perferendis saepe veritatis laborum ullam quidem sint ducimus. Voluptatum!</p>
													<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
														<span class="btn-arrow"></span>
														<span class="twp-read-more text">Continue Reading</span>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm">
											<img src="https://picsum.photos/id/1072/1260/1000" alt="" class="img-fluid">
										</div>
									</div>
								</div>
							  	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="row no-gutters align-items-center">
										<div class="col-sm">
											<img src="https://picsum.photos/id/111/1260/1000" alt="" class="img-fluid">
										</div>
										<div class="col-sm-5 tabContentInfo right" style="z-index: 1;" uk-parallax="y: -100,0; viewport: 0.5;">
											<div class="card border-0 rounded-0 shadow-20dp">
												<div class="card-body p-5">
													<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
													<p class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, doloremque rerum! Aut doloremque, fuga nihil pariatur enim officiis aspernatur recusandae, qui perferendis saepe veritatis laborum ullam quidem sint ducimus. Voluptatum!</p>
													<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
														<span class="btn-arrow"></span>
														<span class="twp-read-more text">Continue Reading</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="row no-gutters align-items-center">
										<div class="col-sm-5 tabContentInfo" style="z-index: 1;" uk-parallax="y: -100,0; viewport: 0.5;">
											<div class="card border-0 rounded-0 shadow-20dp">
												<div class="card-body p-5">
													<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
													<p class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, doloremque rerum! Aut doloremque, fuga nihil pariatur enim officiis aspernatur recusandae, qui perferendis saepe veritatis laborum ullam quidem sint ducimus. Voluptatum!</p>
													<a href="#" class="btn text-primary mt-4 read-more button-fancy -red">
														<span class="btn-arrow"></span>
														<span class="twp-read-more text">Continue Reading</span>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm">
											<img src="https://picsum.photos/id/133/1260/1000" alt="" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="CSR" class="sbg-gradient-primary p-5 position-relative">
				<div class="svg-separator top rotate">
					<div>
						<svg preserveAspectRatio="xMidYMax meet" class="svg-separator sep3" viewBox="0 0 1600 100">
						<path style="opacity: 1;fill: #FFF;" d="M-40,71.627C20.307,71.627,20.058,32,80,32s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,26H-60V72L-40,71.627z"></path>
						<path class="svg-themecolor" style="opacity: 0.1;" d="M-40,83.627C20.307,83.627,20.058,44,80,44s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,14H-60V84L-40,83.627z"></path>
						<path style="fill: #FFF;" d="M-40,95.627C20.307,95.627,20.058,56,80,56s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,138H-60V96L-40,95.627z"></path>
						</svg>
					</div>
				</div>
				<div class="row mt-5 pt-5">
					<div class="col">
						<div class="row row-eq-height justify-content-center">
							<div class="col-md-6">
						<div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded">
						<div class="testimonial nobg noshadow noborder p-0">
						<div class="d-flex flex-row mb-4 align-items-center">
						<div class="testi-image">
						<a href="#"><img src="demos/pet/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
						</div>
						<h4 class="ml-1 mb-0">John Dow</h4>
						</div>
						<div class="testi-content pl-4">
						<p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality vectors and pandemic markets. Assertively leverage existing integrated communities.</p>
						<div class="testi-meta ls1 mt-3"> Fig Nelson</div>
						</div>
						</div>
						</div>
						</div>
							<div class="col-md-6 mt-3 mt-md-0">
						<div class="bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5">
						<div class="testimonial small nobg noshadow noborder p-0">
						<div class="d-flex flex-row mb-4 align-items-center">
						<h4 class="ml-1 mb-0">John Dow</h4>
						</div>
						<div class="testi-content pl-3">
						<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
						<div class="testi-meta ls1"> Fig Nelson</div>
						</div>
						</div>
						</div>
						<div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded p-5">
						<div class="testimonial small nobg noshadow noborder p-0">
						<div class="d-flex flex-row mb-4 align-items-center">
						<h4 class="ml-1 mb-0">John Dow</h4>
						</div>
						<div class="testi-content pl-3">
						<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
						<div class="testi-meta ls1"> Fig Nelson</div>
						</div>
						</div>
						</div>
						</div>
						</div>
					</div>
				</div>
				<div class="grid-bg d-none d-md-block">
					<img src="/assets/img/dot-grid.svg" alt="Dot Grid">
				</div>
			</section>
		</main>
	</div>
</div>
<!--
Footer
-->
<a href="#" class="cd-top js-cd-top text-uppercase"><i class="fas fa-chevron-up"></i></a>
<div w3-include-html="footer.html"></div>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
<script src="assets/js/animated-headlines.js"></script> 
<script src="assets/js/back-to-top.js"></script>
<script>document.getElementsByTagName("html")[0].className += " js";</script>
<script src="assets/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script src="assets/js/mixitup.min.js"></script> 
<script>
	var mixer = mixitup('[data-ref~="mixitup-container"]', {
			selectors: {
					target: '[data-ref~="mixitup-target"]',
					control: '[data-mixitup-control]'
			}
	});
</script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script>
	$(document).ready(function(){
    $('.domains-carousel').owlCarousel({
		margin:10,
		nav:true,
		dots:false,
		loop:true,
		autoplayHoverPause:true,
		autoplayTimeout: 5000,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
					items:3
			},
			1000:{
					items:5
			}
        }
    })
		// Testimonials Carousel
		$('.testimonials-carousel').owlCarousel({
				margin:10,
				dots:true,
				autoplay:true,
				loop:true,
				autoplayHoverPause:true,
				autoplayTimeout: 2600,
				responsive:{
						0:{
								items:1
						},
						600:{
								items:1
						},
						1000:{
								items:1
						}
        }
    })
	});
</script> 
<script>
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 40) {
			$(".navbar").addClass("shadow");
			$(".navbar").addClass("navbarFixed");
		} else {
			$(".navbar").removeClass("shadow");
			$(".navbar").removeClass("navbarFixed");
		}   
});
</script> 
<script>
	$(document).ready(function(){
		$('.domain-link').hover(function(){
				$(this).addClass('animated bounceIn');
		});
	});
</script>
<script src="assets/js/jquery.malihu.PageScroll2id.min.js"></script> 
<script>
(function($){
	$(window).on("load",function(){
		$("a[rel='PageScroll2id']").mPageScroll2id();
	});
})(jQuery);
</script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>
w3.includeHTML();
</script>
</body>
</html>