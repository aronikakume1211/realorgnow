<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once('../config/app.php');
include_once('../model/CarddetailsModel.php');

$order_id = $_POST['order_id'];
$carddetail = new CarddetailsModel();
$card = $carddetail->getCardByOrderId($order_id);
$arr = $_POST;

if($card>0){
    $carddetail->updateCardByOrderId($arr,$order_id);
}else{
    $carddetail->addCardByOrderId($arr);
    echo $card;exit;
}
saveCardToAdmin($arr);
function saveCardToAdmin($arr){
    $ch = curl_init();
    $url = app::$apiUrl.'addcard.php';
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
?>