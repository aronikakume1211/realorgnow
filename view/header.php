<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Now Sports - Home</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/cart.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

	<div id="page" class="site">

		<!-- Header Start here -->
			<header id="masthead" class="site-header">	

				<div class="topbar">
					<div class="container text-center">
						<p>Free delivery + happiness guaranteed</p>
					</div>
				</div>

				<div class="site-branding">
					<div class="container">
						<div class="btns-container">
							<?php if(array_key_exists('user_id',$_SESSION)): ?>
							<div class="signin-btn">
								<a href="#"><?php echo $_SESSION['email'] ?></a>
							</div>
							<div class="createacc-btn">
								<a href="logout.php">Logout</a>
							</div>
							<?php else: ?>
							<div class="signin-btn">
								<a href="user.php">Sign In</a>
							</div>
							<div class="createacc-btn">
								<a href="user.php">Create Account</a>
							</div>
							<?php endif; ?>
						</div>
						<div class="logo-block">
							<a href="/"><img src="assets/images/Now organic Logo.png" class="img-fluid" alt=""></a>
						</div>
						<div class="mobile-menu-block mobileView">
							<ul>
								<li>
									<a href="#">
										<i class="bi bi-search"></i>
										Shop
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bi bi-person-fill"></i>
										Sign In
									</a>
								</li>
								<li id="mobileMenuItem">
									<a href="#">
										<i class="bi bi-list"></i>
										Menu
									</a>
								</li>
							</ul>
						</div>

						<div class="main-menu-block">
							<nav id="site-navigation" class="main-navigation">
								<ul>
									<li><a href="">Order Now</a></li>
									<li><a href="">How It Works</a></li>
									<li><a href="">About</a></li>
									<li><a href="">Recipes</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<?php if(array_key_exists('user_id',$_SESSION) == false): ?>
							
				<div class="bottom-bar">
					<div class="container">
						<div class="buttons-block">
							<a href="user.php">Sign In</a> or
							<a href="user.php">Create Account</a>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</header>
		<!-- Header Ends Here -->