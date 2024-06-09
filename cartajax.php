<?php
session_start();
include_once('model/ProductModel.php');
$product_id = $_GET['id'];
$v = $_GET['val'];
$sum = 0;
if(array_key_exists('cart',$_SESSION)){
    if(array_key_exists($product_id,$_SESSION['cart'])){
        if($v > 0)
            $_SESSION['cart'][$product_id] = $v;
        else
            $_SESSION['cart'][$product_id] += 1;
    }
    else{
        $_SESSION['cart'][$product_id] = 1;
    }
}
else
{
    $_SESSION['cart'][$product_id] = 1;
}
$cartData = $_SESSION['cart'];
$productModel = new ProductModel();
foreach($cartData as $key=> $cd){
   if($key !=''){
        //echo $_SESSION['cart'][$key];
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
    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
    </svg></span></button>
                    </div>
                    <input type="text" id="myNumber_<?php echo $key; ?>" class="form-control input-number" value="<?php echo $cd; ?>" />
                    <div class="input-group-btn">
                        <button id="up" class="btn btn-default" onclick="up('1','myNumber_<?php echo $key; ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
    </svg></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 col-md-1">
            <a href="#" class="del" onclick="deleteElement(<?php echo $key; ?>)" data-product-id="<?php echo $key; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
        </div>
        
        </div>
    </div>
    <div class="col-2 col-md-2">
        <?php $sum +=($row[5]*$cd); ?>
        $<?php echo $row[5]; ?>
    </div>
</div>
<?php
    }
}
?>
<div class="row chkout">
    <hr />
    <div class="col-10 col-md-10">Total</div>
    <div class="col-2 col-md-2">
        $<?php echo $sum ?>
    </div>
    <p>Taxes and fees calculated at checkout</p>
    <a class="btn btn-primary btn-checkout mt-2" href="checkout.php">Checkout</a>
    <a class="text-center mt-2 mb-2 continue_shop" href="#">Keep Shopping --</a>
</div>
