<?php
include_once('../config/app.php');
include_once('../model/ShippingModel.php');
$shippingModel = new ShippingModel();
$data = $shippingModel->getShippingById($_GET['id']);
$id = $data['order_id'];
$arr = $_POST;
$shippingModel->updateShipping($_POST,$_GET['id']);  
saveToAdmin($arr,$id);  
function saveToAdmin($arr,$id){
    $ch = curl_init();
    $url = app::$apiUrl.'updateshippingdetail.php?id='.$id;
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($arr));

    // In real life you should use something like:
    // curl_setopt($ch, CURLOPT_POSTFIELDS, 
    //          http_build_query(array('postvar1' => 'value1')));

    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);
    echo $server_output;

    curl_close($ch);
}