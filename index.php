<?php
session_start();
include_once('model/ProductModel.php');
$productModel = new ProductModel();
$productResults = $productModel->getProduts();

// var_dump($productResults);
// $cartData = $_SESSION['cart'];
// var_dump(count($cartData));

?>
<?php include_once('view/header.php') ?>
<!-- Banner Section Start Here -->
<secition class="banner-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>HEALTHY <span class="blue-title-bg">HENS</span>, HEALTHY <span class="blue-title-bg">EGGS,</span> HEALTHY <span class="blue-title-bg">PLANET</span></h1>

                <h2>Explore Our Eggs</h2>

                <ul>
                    <li>Pastured-Raised Eggs</li>
                    <li>Organic Eggs</li>
                    <li>Organic Liquid Egg Whites</li>
                </ul>

                <div class="button-block">
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</secition>
<!-- Banner Section Ends Here -->

<!-- Content Wraper Section Start Here -->
<section class="content-wraper-block">
    <div class="container">
        <!-- Featured In Block Start Here -->
        <div class="featuredin-block">
            <h4>As Featured In</h4>

            <ul>
                <li><img src="assets/images/runners-world-logo.png" class="img-fluid" alt=""></li>
                <li><img src="assets/images/Scientific_American_logo.png" class="img-fluid" alt=""></li>
                <li><img src="assets/images/mens-health-logo.png" class="img-fluid" alt=""></li>
                <li><img src="assets/images/muscle-fittness-logo.png" class="img-fluid" alt=""></li>
                <li><img src="assets/images/Shape_magazine_logo.png" class="img-fluid" alt=""></li>
            </ul>
        </div>
        <!-- Featured In Block Ends Here -->

        <!-- Two Column Featured Block Start Here -->
        <div class="two-col-featured-block">
            <div class="first-column">
                <img src="assets/images/post-feature-img.png" class="img-fluid" alt="">
            </div>
            <div class="last-column">
                <h4>Healthy hens lay better eggs</h4>
                <p>A hen's diet and access to pastures significantly impact her well-being and the quality of her eggs. Rich, vibrant, amber yolks with a creamy texture, thick egg whites, and strong shells indicate a healthy hen living her best life. On our small family farms, every hen enjoys the freedom to frolic under sunny skies with ample space to roam, forage, and thrive.</p>
                <p><strong>Protein -6g, Calories- 70, Sugar-0g</strong></p>
                <a href="#">Get Fresh Eggs</a>
            </div>
        </div>
        <!-- Two Column Featured Block Ends Here -->

        <!-- Feaure Lists Block Start Here -->
        <div class="featured-list-block">
            <ul>
                <li>
                    <img src="assets/images/list/1.png" class="img-fluid" alt="">
                    <h5>Protein-Packed</h5>
                </li>
                <li>
                    <img src="assets/images/list/2.png" class="img-fluid" alt="">
                    <h5>Golden Yolks Rich in Choline</h5>
                </li>
                <li>
                    <img src="assets/images/list/3.png" class="img-fluid" alt="">
                    <h5>Hearty Doses of “Good” Fats</h5>
                </li>
                <li>
                    <img src="assets/images/list/4.png" class="img-fluid" alt="">
                    <h5>Kinder to Our Planet</h5>
                </li>
                <li>
                    <img src="assets/images/list/5.png" class="img-fluid" alt="">
                    <h5>Eye-Opening Antioxidants</h5>
                </li>
                <li>
                    <img src="assets/images/list/6.png" class="img-fluid" alt="">
                    <h5>No Antibiotics, <br> No Chemical Pesticides, <br> No GMOs</h5>
                </li>
                <li>
                    <img src="assets/images/list/7.png" class="img-fluid" alt="">
                    <h5>Soaking Up the Sunshine</h5>
                </li>
                <li>
                    <img src="assets/images/list/8.png" class="img-fluid" alt="">
                    <h5>Foraging for Delicious Snacks</h5>
                </li>
                <li>
                    <img src="assets/images/list/9.png" class="img-fluid" alt="">
                    <h5>Self-Care Dust Baths</h5>
                </li>
            </ul>
        </div>
        <!-- Feaure Lists Block Ends Here -->

        <!-- Featured Product Block Start Here -->
        <div class="featured-products-block">
            <h3>Choose Your Egg Box</h3>
            <div class="products-container">
                <ul>
                    <li>
                        <div class="product-feature-image-block">
                            <div class="bulk-saving-block">$20 Bulk Savings</div>
                            <img src="https://realorgnow.com/assets/products/Egg Box  (1).jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-details-block">
                            <div class="product-title-block">
                                <a href="pastureraisedeggs">2 Dozen Fresh Pasture-raised Large eggs (24oct)</a>
                            </div>
                            <div class="product-excerpt">
                                <ul>
                                    <li>Responsibly Raised</li>
                                    <li>No Added Hormones</li>
                                    <li>No Antibiotics</li>
                                </ul>
                            </div>
                            <div class="free-delivery-block">
                                <p>Delivery is free</p>
                            </div>
                            <div class="price-block">
                                <div class="product-save-amount">Save: $10</div>
                                <div class="sale-price-block">$4.99</div>
                                <div class="actual-price-block"><span>$14.99</span></div>
                            </div>
                            <div class="buy-now-btn-block">
                                <a class="buy-now-button" data-product-id="1" disablebtn="false">
                                    <span>Buy Now</span>
                                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                                </a>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="product-feature-image-block">
                            <div class="bulk-saving-block">$20 Bulk Savings</div>
                            <img src="https://realorgnow.com/assets/products/Egg Box  (2).jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-details-block">
                            <div class="product-title-block">
                                <a href="organicfreerange">2 Dozen Fresh Organic Large eggs (24oct)</a>
                            </div>
                            <div class="product-excerpt">
                                <ul>
                                    <li>No Added Hormones &amp; No Antibiotics</li>
                                    <li>No Synthetic Pesticides</li>
                                    <li>Non-GMO Feed</li>
                                </ul>
                            </div>
                            <div class="free-delivery-block">
                                <p>Delivery is free</p>
                            </div>
                            <div class="price-block">
                                <div class="product-save-amount">Save: $10</div>
                                <div class="sale-price-block">$4.99</div>
                                <div class="actual-price-block"><span>$14.99</span></div>
                            </div>
                            <div class="buy-now-btn-block">
                                <a class="buy-now-button" data-product-id="2" disablebtn="true">
                                    <span>Buy Now</span>
                                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                                </a>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="product-feature-image-block">
                            <div class="bulk-saving-block">$20 Bulk Savings</div>
                            <img src="https://realorgnow.com/assets/products/Egg Box  (3).jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-details-block">
                            <div class="product-title-block">
                                <a href="organicliquideggwhites">Organic Liquid Egg Whites Pasture-Raised 32 Fl Oz</a>
                            </div>
                            <div class="product-excerpt">
                                <ul>
                                    <li>Fat Free</li>
                                    <li>Cholesterol Free</li>
                                    <li>Good Source of Protein</li>
                                </ul>
                            </div>
                            <div class="free-delivery-block">
                                <p>Delivery is free</p>
                            </div>
                            <div class="price-block">
                                <div class="product-save-amount">Save: $10</div>
                                <div class="sale-price-block">$5.99</div>
                                <div class="actual-price-block"><span>$15.99</span></div>
                            </div>
                            <div class="buy-now-btn-block">
                                <a class="buy-now-button" data-product-id="3" disablebtn="false">
                                    <span>Buy Now</span>
                                    <img src="assets/images/loader.gif" alt="loader" class="buy_now_btn_loader">
                                </a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            <!-- <div class="products-container">
                    <ul>
                    <?php while ($row = mysqli_fetch_row($productResults)) : ?>
                        <li>
                            <div class="product-feature-image-block">
                                <div class="bulk-saving-block">$20 Bulk Savings</div>
                                <img src="<?php echo $row[1] ?>" class="img-fluid" alt="">
                            </div>
                            <div class="product-details-block">
                                <div class="product-title-block">
                                    <?php if ($row[2] == "2 Dozen Fresh Pasture-raised Large eggs (24oct)") { ?>
                                        <a href="pastureraisedeggs"><?php echo $row[2] ?></a>
                                    <?php } elseif ($row[2] == "2 Dozen Fresh Organic Large eggs (24oct)") { ?>
                                        <a href="organicfreerange"><?php echo $row[2] ?></a>
                                    <?php } elseif ($row[2] == "Organic Liquid Egg Whites Pasture-Raised 32 Fl Oz") { ?>
                                        <a href="organicliquideggwhites"><?php echo $row[2] ?></a>
                                    <?php } ?>
                                </div>
                                <div class="product-excerpt">
                                <?php echo $row[3] ?>
                                </div>
                                <div class="free-delivery-block">
                                    <p>Delivery is free</p>
                                </div>
                                <div class="price-block">
                                    <div class="product-save-amount">Save: $<?php echo $row[4] - $row[5]  ?></div>
                                    <div class="sale-price-block">$<?php echo $row[5] ?></div>
                                    <div class="actual-price-block"><span>$<?php echo $row[4] ?></span></div>
                                </div>
                                <div class="buy-now-btn-block">
                                    <a class="buy-now-button" data-product-id="<?php echo $row[0] ?>" disablebtn="false">Buy Now</a>
                                </div>
                            </div>
                            
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div> -->
        </div>
        <!-- Featured Product Block Ends Here -->
    </div>
</section>
<!-- Content Wraper Section Ends Here -->
<!-- Our Promise Section Start Here -->
<section class="our-promise-block">
    <div class="container">
        <ddiv class="two-col-sec">
            <div class="left-col-block">
                <h3><span>Our</span><br>Promise...</h3>
            </div>
            <div class="right-col-block">
                <ul>
                    <li>100% Satisfaction Guaranteed</li>
                    <li>Eggs delivered safe or we replace</li>
                    <li>No antibiotics, no chemical pesticides, no GMOs</li>
                </ul>
            </div>
        </ddiv>
    </div>
</section>
<!-- Our Promise Section Ends Here -->
<!-- White Bg Section Start Here -->
<section class="white-bg">
    <div class="container">
        <!-- Right Side Text Block Start -->
        <div class="right-side-text-block">
            <div class="section-title">
                <h2>Keeping it Bullsh*t-Free</h2>
            </div>
            <div class="right-side-two-col">
                <div class="left-col-sec">
                    <img src="assets/images/healthier.jpg" class="img-fluid" alt="">
                </div>
                <div class="right-col-sec">
                    <h4><span class="purple-bold">Bringing ethical</span> Food to the table</h4>
                    <p>At Now® Real Organic, our mission is to bring ethical food to your table. We are dedicated to improving the lives of people, animals, and the planet through our food practices. From giving our hens outdoor access and supporting family farmers to enabling you to trace your eggs back to the farm and ensuring transparency in the egg aisle, you can always trust that Now® Real Organic is committed to keeping it bullsh*t-free. Our eggs and butter from family farms are delicious and ethical, so you never have to question their quality.</p>
                    <!--ul>
                            <li>2-3x more vitamins A and E</li>
                            <li>2x more omega-3 fatty acids</li>
                            <li>7x times more beta carotene</li>
                            <li>3-6x times more vitamin D</li>
                        </ul-->
                </div>
            </div>
        </div>
        <!-- Right Side Text Block Ends -->

        <!-- Two Column Block Start Here  -->
        <div class="two-col-block">
            <div class="section-title">
                <h2>The Best Eggs. Period.</h2>
            </div>
            <div class="right-side-two-col">
                <div class="one-two text-center">
                    <img src="assets/images/post-1.jpg" class="img-fluid" alt="">
                    <div class="col-text-block">
                        <h3>Sealed With Natural Bloom</h3>
                        <p>Each egg is preserved with its natural bloom, which seals in freshness. This extends the shelf life of our eggs, keeping them ultra-fresh until your next delivery.</p>
                        <p>Rich Golden Yolks</p>
                        <p>The vibrant golden yolks in our eggs are incredibly delicious and reflect the high-quality diet and happy lives our hens enjoy on pasture.</p>
                    </div>
                </div>
                <div class="one-two text-center">
                    <img src="assets/images/post-2.jpg" class="img-fluid" alt="">
                    <div class="col-text-block">
                        <h3>Sealed With Natural Bloom</h3>
                        <p>Each egg is preserved with its natural bloom, which seals in freshness. This extends the shelf life of our eggs, keeping them ultra-fresh until your next delivery.</p>
                        <p>Rich Golden Yolks</p>
                        <p>The vibrant golden yolks in our eggs are incredibly delicious and reflect the high-quality diet and happy lives our hens enjoy on pasture.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Two Column Block Ends Here  -->

        <!-- What Folks Saying Block Start Here -->
        <div class="folks-block">
            <div class="section-title">
                <h2>What Folks are Saying</h2>
            </div>
            <!-- <div id="slider">
                <ul class="slider">
                    <li>
                        <p>“ At first, it was all about the taste and color for me. But then, my conscience kicked in, and I started buying regularly. How the animals are treated really matters to me. I used to work on this small farm with goats and chickens, which was super eye-opening. Luckily, the animals there had a good life. But, man, I just couldn't handle the idea of those goats ending up at the slaughterhouse.” </p>
                        <h5>Shohina Narzikulova</h5>
                    </li>
                    <li>
                        <p>“ We're grabbing these instead of our usual local farm eggs because they're out of stock for a few months while they build up their flock. Yeah, they're pretty pricey, but these eggs are always super fresh and have those healthy deep orange-yellow yolks that we love.” </p>
                        <h5>Julio Cesar Aguiar</h5>
                    </li>
                    <li>
                        <p>“ These have a great flavor with a dark yolk. Also, these chickens actually get to eat bugs and worms…pasture raised for the highest nutritional value. Get to know the labeling on your eggs. Cage free still means they’re cramped in a giant chicken house without the cages. Free range can mean they get a little time out doors. Organic pasture raised is the natural way chickens should be raised.” </p>
                        <h5>Katie</h5>
                    </li>
                    <li>
                        <p>“ They have farm webcams on their site so you can actually see the chickens outside foraging with a fair amount of space. Strong shells on the eggs. The other organic eggs I've seen from whole foods so far are just "cage free" so they're still inside all the time. ” </p>
                        <h5>Omran</h5>
                    </li>
                    <li>
                        <p>“ I won’t buy anything else. You can tell by taste and look that these hens are being taken care of. Saving a few dollars isn’t worth it to me to have a much inferior product. Don’t skimp, get these. I was surprised but these eggs were so fresh and delicious. It was my first time purchasing this brand and I wasn’t disappointed. ” </p>
                        <h5>Donna L. Ravaglia</h5>
                    </li>
                    <li>
                        <p>“ The dark yellow yolks testify to freshness; the taste testifies to happy hens. One of these could replace two- even among most “cage free” “ organic” brands. The organic have a nice thick shell and the yolks are a better color.” </p>
                        <h5>Wendy Stewart</h5>
                    </li>
                    <li>
                        <p>“ Eggs are tasty and have good texture. Have always tasted fresh. However, when I ordered from Fresh, too much was put in the bag. The egg carton was crumpled and eggs broken--a pity because they are so expensive. Whole Foods generally do a better job at careful packaging. That's primarily why I order more from them.” </p>
                        <h5>S. Bishop</h5>
                    </li>
                </ul>
                </div> -->
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <p>“ At first, it was all about the taste and color for me. But then, my conscience kicked in, and I started buying regularly. How the animals are treated really matters to me. I used to work on this small farm with goats and chickens, which was super eye-opening. Luckily, the animals there had a good life. But, man, I just couldn't handle the idea of those goats ending up at the slaughterhouse.” </p>
                    <h5>Shohina Narzikulova</h5>
                </div>
                <div class="item">
                    <p>“ We're grabbing these instead of our usual local farm eggs because they're out of stock for a few months while they build up their flock. Yeah, they're pretty pricey, but these eggs are always super fresh and have those healthy deep orange-yellow yolks that we love.” </p>
                    <h5>Julio Cesar Aguiar</h5>
                </div>
                <div class="item">
                    <p>“ These have a great flavor with a dark yolk. Also, these chickens actually get to eat bugs and worms…pasture raised for the highest nutritional value. Get to know the labeling on your eggs. Cage free still means they’re cramped in a giant chicken house without the cages. Free range can mean they get a little time out doors. Organic pasture raised is the natural way chickens should be raised.” </p>
                    <h5>Katie</h5>
                </div>
                <div class="item">
                    <p>“ They have farm webcams on their site so you can actually see the chickens outside foraging with a fair amount of space. Strong shells on the eggs. The other organic eggs I've seen from whole foods so far are just "cage free" so they're still inside all the time. ” </p>
                    <h5>Omran</h5>
                </div>
                <div class="item">
                    <p>“ I won’t buy anything else. You can tell by taste and look that these hens are being taken care of. Saving a few dollars isn’t worth it to me to have a much inferior product. Don’t skimp, get these. I was surprised but these eggs were so fresh and delicious. It was my first time purchasing this brand and I wasn’t disappointed. ” </p>
                    <h5>Donna L. Ravaglia</h5>
                </div>
                <div class="item">
                    <p>“ The dark yellow yolks testify to freshness; the taste testifies to happy hens. One of these could replace two- even among most “cage free” “ organic” brands. The organic have a nice thick shell and the yolks are a better color.” </p>
                    <h5>Wendy Stewart</h5>
                </div>
                <div class="item">
                    <p>“ Eggs are tasty and have good texture. Have always tasted fresh. However, when I ordered from Fresh, too much was put in the bag. The egg carton was crumpled and eggs broken--a pity because they are so expensive. Whole Foods generally do a better job at careful packaging. That's primarily why I order more from them.” </p>
                    <h5>S. Bishop</h5>
                </div>

            </div>
        </div>
        <!-- What Folks Saying Block Ends Here -->

        <!-- Right Side Text Block Start -->
        <div class="right-side-text-block">
            <div class="section-title">
                <h2>Our Eggs</h2>
            </div>
            <div class="right-side-two-col">
                <div class="left-col-sec">
                    <img src="assets/images/post-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="right-col-sec">
                    <h4><span class="purple-bold">Eggs that Nourish</span>, from Happy Hens</h4>
                    <p>Discover our range of organic, pasture-raised eggs—a nutritious, eco-friendly, and versatile protein source packed with 13 essential vitamins, healthy fats, antioxidants, and beyond. Explore our selection and find your favorite today.</p>
                    <!-- <ul>
                            <li>2-3x more vitamins A and E</li>
                            <li>2x more omega-3 fatty acids</li>
                            <li>7x times more beta carotene</li>
                            <li>3-6x times more vitamin D</li>
                        </ul> -->
                </div>
            </div>
        </div>
        <!-- Right Side Text Block Ends -->
        <!-- Right Side Text Block Start -->
        <div class="right-side-text-block hens-life-blk">
            <div class="right-side-two-col">
                <div class="right-col-sec">
                    <h4><span class="purple-bold">Happy Hens</span>, Better Lives</h4>
                    <p>With every box, you're not just receiving eggs; you're ensuring a happier life and purposeful work for a minimum of two hens on our farm:</p>
                    <ul>
                        <li>365 days of fresh air and sunlight</li>
                        <li>Never any GMOs, antibiotics, or drugs</li>
                        <li>Hens roam and forage on regenerative pastures</li>

                    </ul>
                </div>
                <div class="left-col-sec">
                    <img src="assets/images/post-4.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!-- Right Side Text Block Ends -->

        <!-- Common Question Block Start Here -->
        <div class="common-questions-block">
            <h3>Common Questions 🤔</h3>
            <ul>
                <li>
                    <h4>How Long Are My Eggs Good For?</h4>
                    <p>Our ultra-fresh eggs, sealed with their natural bloom, stay fresh for at least 6 weeks.</p>
                </li>
                <li>
                    <h4>How Are Eggs Shipped?</h4>
                    <p>Your eggs will arrive via FedEx or UPS in our specially designed, cushioned box. Inside, foam "Egg Snugglers" ensure the eggs are protected from jostling during transport.</p>
                </li>
                <li>
                    <h4>What If My Eggs Crack?</h4>
                    <p>No worries if you find a cracked egg! We'll credit your account for the value of two eggs.</p>
                </li>
                <li>
                    <h4>How Should I Store My Eggs?</h4>
                    <p>To maximize the shelf life of your Fresh Bloom eggs, we recommend storing them in your refrigerator upon arrival. However, in many European countries, fresh bloom eggs are commonly kept unrefrigerated.</p>
                </li>
                <li>
                    <h4>Do I Have to Be Home to Get My Order?</h4>
                    <p>You don't need to be home to receive your order. Now real organic eggs will be safe outside for several hours.</p>
                </li>
                <li>
                    <h4>Do I Need to Wash My Eggs?</h4>
                    <p>Washing eggs before eating them is optional. If you choose to wash them, we recommend doing so right before consumption, as washing removes their natural bloom and may affect freshness over time.</p>
                </li>
                <li>
                    <h4>Should I Eat Eggs Past the Best Before Date?</h4>
                    <p>To ensure your eggs are safe to eat, always check the best by date. If a carton has passed its best by date or is more than 45 days old from processing, the eggs are considered expired. At this point, we cannot guarantee their safety or quality.</p>
                </li>
                <li>
                    <h4>How Does Nutrition Impact Yolk Color?</h4>
                    <p>Yolk color can vary due to factors like flock age, weather, season, and location. Our hens' diets, including the bugs they eat, also affect yolk color. While we check our free-range and pasture-raised eggs regularly and find their yolks are usually darker than those from factory farms, our commitment to a natural, varied diet for our hens can sometimes result in lighter yolks.</p>
                </li>
                <li>
                    <h4>What Does Pasture-Raised Really Mean?</h4>
                    <p>Pasture-raised eggs come from hens with ample outdoor access. Our Certified Humane® pasture-raised hens enjoy 108 square feet of outdoor space each, allowing them to perch, dust bathe, socialize, forage for worms, and soak up the sunshine.</p>
                </li>
            </ul>
        </div>
        <!-- Common Questions Block Ends Here -->

    </div>
</section>
<!-- White Bg Section Ends Here -->
<!-- Delivering Happiness Section Start Here -->
<section class="delivering-block">
    <div class="container">
        <h3>Delivering Happiness</h3>
        <img src="assets/images/eggs.png" class="img-fluid" alt="">
    </div>
</section>
<!-- Delivering Happiness Section End Here -->
<script type="text/javascript">
    function checkBtn() {
        $.getJSON("api/getcart.php", function(result) {

            $.each(result, function(i, field) {
                $('[data-product-id="' + i + '"]').attr('disablebtn', true);
            });
        });
    }
    jQuery(document).ready(function($) {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        // setInterval(function () {
        //       moveRight();
        //   }, 14000);
        //   var slideCount = $('#slider ul li').length;
        //   var slideWidth = $('#slider ul li').width();
        //   var slideHeight = $('#slider ul li').height();
        //   var sliderUlWidth = slideCount * slideWidth;

        //   $('#slider').css({ width: slideWidth, height: slideHeight });

        //   $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

        //   $('#slider ul li:last-child').prependTo('#slider ul');

        //   function moveLeft() {
        //       $('#slider ul').animate({
        //           left: + slideWidth
        //       }, 200, function () {
        //           $('#slider ul li:last-child').prependTo('#slider ul');
        //           $('#slider ul').css('left', '');
        //       });
        //   };

        //   function moveRight() {
        //       $('#slider ul').animate({
        //           left: - slideWidth
        //       }, 200, function () {
        //           $('#slider ul li:first-child').appendTo('#slider ul');
        //           $('#slider ul').css('left', '');
        //       });
        //   };

        //   $('a.control_prev').click(function () {
        //       moveLeft();
        //   });

        //   $('a.control_next').click(function () {
        //       moveRight();
        //   });

    });
    checkBtn();
</script>
<?php include_once('view/cart.php') ?>
<?php include_once('view/footer.php') ?>