<?php
include_once('../config/app.php');
include_once('../model/ShippingModel.php');
include_once('../model/OrderModel.php');

    

$shippingModel = new ShippingModel();
if($_POST['order_id'] > 0)
{
    $data = $shippingModel->getShippingByOrderId($_POST['order_id']);
    $id = $data['id'];
    $order_id = $_POST['order_id'];
    $shippingModel->updateShipping($_POST,$id);
    updateToAdmin($_POST,$order_id);
    echo $id.'|'.$order_id;
}
else
{
    $orderModel = new OrderModel();
    $order_id = $orderModel->addOrder($_POST['total']);
    $arr = $_POST;
    $arr['order_id'] = $order_id;
    $id = $shippingModel->addShipping($arr);   
    saveToAdmin($arr); 
    echo $id.'|'.$order_id;
}

function saveToAdmin($arr){
    $ch = curl_init();
    $url = app::$apiUrl.'addshippingdetail.php';
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
function updateToAdmin($arr,$id){
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