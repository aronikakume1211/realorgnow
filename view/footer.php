<!-- Footer Start Here -->
<?php 
$cartData = $_SESSION['cart'];
?>
<footer>

	<!-- cart popup icon start -->
	<div id="cpops-floating-cart" class="cpops-toggle-drawer">
		<button aria-label="Open CartPops popover" aria-expanded="false" class="cpops-floating-cart__button">
			<div class="cpops-floating-cart__animation"></div>
			<div class="cpops-floating-cart__count">
				<span id="cart_counter"><?php echo count($cartData);?></span>
			</div>
			<span class="cpops-floating-cart__icon">
				<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path d="M24 3l-.743 2h-1.929l-3.474 12h-13.239l-4.615-11h16.812l-.564 2h-13.24l2.937 7h10.428l3.432-12h4.195zm-15.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"></path>
				</svg>
			</span>
		</button>
	</div>

	<!-- cart popup icon End -->

	<!-- Location popup Start -->
	<div class="location_popup_container_overlay">
		<div class="location_popup_container">
			<h3 class="select_location_title">Select Location</h3>
			<p class="provide_location">Provide your location to serve you better</p>
			<div class="cities">
				<div class="popular_city">
					<h4 class="popular_city_title">Popular Cities</h4>
					<ul class="popular_cities_list d-flex flex-wrap gap-40 ">
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/bangalore.png" width="78" height="78" alt="country image for Bangalore">
							<p>Bangalore</p>
						</li>
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/chandigarh.png" width="78" height="78" alt="country image for Chandigarh">
							<p>Chandigarh</p>
						</li>
						<li class="popular_city_list_item">
							<img decoding="async" src="assets/images/locations/chennai.png" width="78" height="78" alt="country image for Chennai">
							<p>Chennai</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/delhi.png" width="78" height="78" alt="country image for Delhi NCR">
							<p>Delhi NCR</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Jaipur.png" width="78" height="78" alt="country image for Jaipur">
							<p>Jaipur</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Mumbai.png" width="78" height="78" alt="country image for Mumbai">
							<p>Mumbai</p>
						</li>
						<li class="popular_city_list_item">
							<img loading="lazy" decoding="async" src="assets/images/locations/Pune.png" width="78" height="78" alt="country image for Pune">
							<p>Pune</p>
						</li>
					</ul>
				</div>
				<div class="other_city">
					<h4 class="other_city_title">Other Cities</h4>
					<ul class="other_cities_list d-flex flex-wrap gap-20 ">
						<li class="other_city_list_item">
							<p>Coimbatore</p>
						</li>
						<li class="other_city_list_item">
							<p>Guntur</p>
						</li>
						<li class="other_city_list_item">
							<p>Kolkata</p>
						</li>
						<li class="other_city_list_item">
							<p>Lucknow</p>
						</li>
						<li class="other_city_list_item">
							<p>Mysore</p>
						</li>
						<li class="other_city_list_item">
							<p>Surat</p>
						</li>
						<li class="other_city_list_item">
							<p>Vijayawada</p>
						</li>
						<li class="other_city_list_item">
							<p>Coimbatore</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Location popup End -->

	<div class="return-to-top-block">
		<a class="return-top" href="#">Return To Top</a>
	</div>
	<div class="footer-bootom-block">
		<div class="container">
			<div class="footer-widgets-block">
				<ul>
					<li>
						<div class="widget-container">
							<nav>
								<ul>
									<li><a href="#">Manage My Eggscription</a></li>
									<li><a href="#">Manage My Eggscription</a></li>
								</ul>
							</nav>
						</div>
					</li>
					<li>
						<div class="widget-container">
							<nav>
								<ul>
									<li><a href="#">Recipes</a></li>
								</ul>
							</nav>
						</div>
					</li>
					<li>
						<div class="widget-container">
							<nav>
								<ul>
									<li><a href="#">Instagram</a></li>
									<li><a href="#">Facebook</a></li>
								</ul>
							</nav>
						</div>
					</li>
				</ul>
			</div>
			<div class="site-info-block">
				<h2 class="footer-logo"> Eggs Pro</h2>
				<div class="address-block">
					<p>15718 Aboite Road<br>Roanoke IN 46783 <br>Text <a href="tel:2605601260">(260) 560-1260</a>| Email <a href="mailto:help@fresheggco.com">help@fresheggco.com</a></p>
				</div>
			</div>
			<div class="terms-privacy-block">
				<ul>
					<li>
						<a href="@">Terms and Comditiona</a>
					</li>
					<li>
						<span>and</span>
					</li>
					<li>
						<a href="#">Privacy Policy</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Ends Here -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/location-popup.js"></script>

</body>

</html>