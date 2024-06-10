<?php
// unset($_SESSION['cart']); 
include_once('model/ProductModel.php');
?>
<div class="cart_overlay">
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-10">
                    <h3>Shopping cart</h3>
                </div>
                <div class="col-2 col-md-2">
                    <div class="btn-close float-end"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-head">SUBSCRIPTION ITEMS <span>Repeat every order</span></div>
                </div>
            </div>
            <div id="cartdata">
                <?php
                $cartData = $_SESSION['cart'];
                $productModel = new ProductModel();
                foreach ($cartData as $key => $cd) :
                    if ($key != '') :
                        echo $_SESSION['cart'][$key];
                        $productResults = $productModel->getProdutById($key);
                        $row = mysqli_fetch_row($productResults);
                        //print_r($row);
                ?>
                        <div class="row mt-4">
                            <div class="col-3 col-md-3">
                                <img src="<?php echo $row[1]; ?>" class="w-100" alt="">
                            </div>
                            <div class="col-7 col-md-7">
                                <?php echo $row[2]; ?>
                                <div class="row">
                                    <div class="col-12 col-md-12">$<?php echo $row[5]; ?></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-10 col-md-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button id="down" class="btn btn-default" onclick=" down('0','myNumber_<?php echo $key; ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                        </svg></span></button>
                                                </div>
                                                <input type="text" id="myNumber_<?php echo $key; ?>" class="form-control input-number" value="<?php echo $cd; ?>" />
                                                <div class="input-group-btn">
                                                    <button id="up" class="btn btn-default" onclick="up('1','myNumber_<?php echo $key; ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 col-md-1">
                                        <a href="#" class="del" onclick="deleteElement(<?php echo $key; ?>)" data-product-id="<?php echo $key; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-2 col-md-2">
                                <?php $sum += ($row[5] * $cd); ?>
                                $<?php echo $row[5]; ?>
                            </div>
                        </div>
                <?php
                    endif;
                endforeach;
                ?>
                <div class="row chkout">
                    <hr />
                    <div class="col-10 col-md-10">Total</div>
                    <div class="col-2 col-md-2">
                        $<?php echo $sum ?>
                    </div>
                    <p>Taxes and fees calculated at checkout</p>
                    <a class="btn btn-primary btn-checkout mt-2" href="checkout.php">Checkout</a>
                    <a class="text-center mt-2 mb-2 continue_shop" href="#">Keep Shopping <span aria-hidden="true"> →</span></a>
                </div>
                <!-- <div class="row">
                    <div class="col-md-3">
                        <img src="assets/images/product-image-1.png" class="w-100" alt="">
                    </div>
                    <div class="col-md-7">
                        8 Dozen Fresh Bloom™ Eggs (Delivered Monthly).
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button id="down" class="btn btn-default" onclick=" down('0')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                </svg></span></button>
                                        </div>
                                        <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                        <div class="input-group-btn">
                                            <button id="up" class="btn btn-default" onclick="up('150')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="del"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        $ 49
                    </div>
                </div> -->
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        let counter = 0;
        jQuery('.buy-now-button').click(function() {
            var id = jQuery(this).attr('data-product-id');

            var $this = $(this);

            // Disable the button to prevent multiple clicks
            // $this.attr('disablebtn', 'true');
            $this.find('span').text('Loading...'); // Change button text
            $this.find('.buy_now_btn_loader').show(); // Show load


            var disBtn = jQuery(this).attr('disablebtn');
            if (disBtn == 'false') {
                jQuery.get('cartajax.php?id=' + id + '&val=0', function(data) {
                    jQuery('#cartdata').html(data);
                    $('#cart_counter').text(++counter);
                    // jQuery('.cart').animate({"width": '30%'},800);
                    setTimeout(function() {
                        openCart();
                        $this.find('.buy_now_btn_loader').hide();
                        $this.find('span').text('Added to Cart');
                        $this.attr('disablebtn', 'false');
                        $this.addClass('added-cart');
                    }, 790);
                    checkBtn();
                    jQuery('.continue_shop').click(function() {
                        jQuery('.cart').animate({
                            "width": '0'
                        }, 800);
                        setTimeout(function() {
                            jQuery('.cart').hide();
                        }, 790);
                    });
                });
            } else {
                $this.find('.buy_now_btn_loader').hide();
                $this.find('span').text('Added to Cart');
                $this.attr('disablebtn', 'true');
                $this.addClass('added-cart');
                swal("Limited Quentity Available", "We're sorry, there is limited quentity of this item available. ", "error");
            }

        });

        // popup cart 
        jQuery('#cpops-floating-cart').click(function(e) {
            openCart();
        })

        // close modal while click outside
        $('.cart_overlay').click(function(event) {
            if ($(event.target).is('.cart_overlay')) {
                closeModal();
            }
        });

        // close icon clicked
        jQuery('.btn-close').click(function() {
            closeModal();
        });

        // handle open cart
        function openCart() {
            $('.cart').show();
            $('.cart_overlay').show();
            $(this).text('Added to cart');
            jQuery('.cart').animate({
                "width": '28rem',
                "max-width": '28rem'
            }, 200);
        }

        // handle close modal 
        function closeModal() {
            jQuery('.cart').animate({
                "width": '0'
            }, 200);
            setTimeout(function() {
                jQuery('.cart').hide();
                $('.cart_overlay').hide();
            }, 110);
        }


    });

    function up(max, elementId) {
        document.getElementById(elementId).value = parseInt(document.getElementById(elementId).value) + 1;

        var arr = elementId.split("_");
        var id = arr[1];
        var v = document.getElementById(elementId).value;
        if (document.getElementById(elementId).value >= parseInt(max)) {
            document.getElementById(elementId).value = max;
        }

        if (v == 1) {
            jQuery.get('cartajax.php?id=' + id + '&val=' + v, function(data) {
                jQuery('#cartdata').html(data);

            });
        } else {
            swal("Limited Quentity Available", "We're sorry, there is limited quentity of this item available. ", "error");
        }
    }

    function down(min, elementId) {
        document.getElementById(elementId).value = parseInt(document.getElementById(elementId).value) - 1;
        if (document.getElementById(elementId).value <= parseInt(min)) {
            document.getElementById(elementId).value = min;
            if (document.getElementById(elementId).value == 0) {
                var prodidarr = elementId.split('_');
                deleteElement(prodidarr[1]);
            }
        }
        var arr = elementId.split("_");
        var id = arr[1];
        var v = document.getElementById(elementId).value;
        jQuery.get('cartajax.php?id=' + id + '&val=' + v, function(data) {
            jQuery('#cartdata').html(data);

        });
    }

    function deleteElement(id) {
        let cart_value = jQuery('#cart_counter').text();
        // cart_value= intval(cart_value);
        console.log('Cart Value: ', parseInt(cart_value));
        jQuery('#cart_counter').text(parseInt(cart_value)-1)
        jQuery.get('deletecart.php?id=' + id, function(cartdata) {
            jQuery('#cartdata').html(cartdata);
            checkBtn();
        });
    }

    function checkBtn() {
        jQuery('.buy-now-button').attr('disablebtn', false);
        $.getJSON("api/getcart.php", function(result) {

            $.each(result, function(i, field) {
                $('[data-product-id="' + i + '"]').attr('disablebtn', true);
            });
        });
    }
</script>