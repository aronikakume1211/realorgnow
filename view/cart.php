<?php unset($_SESSION['cart']) ?>
<div class="cart" style="display: block;
    width: 30%;">
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
            <div class="row">
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
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
</svg></span></button>
                            </div>
                            <input type="text" id="myNumber" class="form-control input-number" value="1" />
                            <div class="input-group-btn">
                                <button id="up" class="btn btn-default" onclick="up('150')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg></button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="del"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
                    </div>
                    </div>
                </div>
                <div class="col-md-2">
                    $ 49
                </div>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.buy-now-button').click(function(){
            var id = jQuery(this).attr('data-product-id');
            var disBtn = jQuery(this).attr('disablebtn');
            if(disBtn == 'false'){
                jQuery.get('cartajax.php?id='+id+'&val=0', function(data){
                    jQuery('#cartdata').html(data);
                    // jQuery('.cart').animate({"width": '30%'},800);
                    $('.cart').show();
                    jQuery('.cart').animate({"width": '30%'},800);
                    checkBtn();
                    jQuery('.continue_shop').click(function(){
                        jQuery('.cart').animate({"width": '0'},800);
                        setTimeout(function () {
                            jQuery('.cart').hide();
                        }, 790);
                    });
                });
            }else{
                swal ( "Limited Quentity Available" ,  "We're sorry, there is limited quentity of this item available. " ,  "error" );
            }
            
        });
        jQuery('.btn-close').click(function(){
            jQuery('.cart').animate({"width": '0'},800);
            setTimeout(function () {
                jQuery('.cart').hide();
            }, 810);
            
            
        });
          
        
    });
    function up(max,elementId) {
        document.getElementById(elementId).value = parseInt(document.getElementById(elementId).value) + 1;
        
        var arr =elementId.split("_");
        var id = arr[1];
        var v = document.getElementById(elementId).value;
        if (document.getElementById(elementId).value >= parseInt(max)) {
            document.getElementById(elementId).value = max;
        }
        
        if(v == 1){
            jQuery.get('cartajax.php?id='+id+'&val='+v, function(data){
                jQuery('#cartdata').html(data);
                
            });
        }
        else{
            swal ( "Limited Quentity Available" ,  "We're sorry, there is limited quentity of this item available. " ,  "error" );
        }
    }
    function down(min,elementId) {
        document.getElementById(elementId).value = parseInt(document.getElementById(elementId).value) - 1;
        if (document.getElementById(elementId).value <= parseInt(min)) {
            document.getElementById(elementId).value = min;
            if(document.getElementById(elementId).value == 0){
                var prodidarr = elementId.split('_');
                deleteElement(prodidarr[1]);
            }
        }
        var arr =elementId.split("_");
        var id = arr[1];
        var v = document.getElementById(elementId).value;
        jQuery.get('cartajax.php?id='+id+'&val='+v, function(data){
            jQuery('#cartdata').html(data);
            
        });
    }
    function deleteElement(id){
        jQuery.get('deletecart.php?id='+id,function(cartdata){
            jQuery('#cartdata').html(cartdata);
            checkBtn();
        });
    }
    function checkBtn(){
        jQuery('.buy-now-button').attr('disablebtn',false);
        $.getJSON("api/getcart.php", function(result){
            
            $.each(result, function(i, field){
                $('[data-product-id="'+i+'"]').attr('disablebtn',true);
            });
        });
    }
</script>