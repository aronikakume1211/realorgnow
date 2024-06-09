<?php
include_once('config/app.php');
include_once('model/CarddetailsModel.php');
$arrcarddetails = array();
$arrcarddetails['order_id'] = $_POST['ord_id'];
$arrcarddetails['card_number'] = $_POST['card-number'];
$arrcarddetails['cvv'] = $_POST['cvc-number'];
$arrcarddetails['exp_month'] = $_POST['exp-mon'];
$arrcarddetails['exp_year'] = $_POST['exp-year'];
$carddetailsModel = new CarddetailsModel();
$carddetailsModel->addCard($arrcarddetails);
savecarddetailsadmin($arrcarddetails,$_POST['ord_id']);
function savecarddetailsadmin($arr,$order_id){
    $ch = curl_init();
    $url = app::$apiUrl.'savecarddata.php?id='.$order_id;
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
header('location:thankyou.php');
exit();

?>