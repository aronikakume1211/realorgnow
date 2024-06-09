<?php
session_start();
$arr = array();
if(array_key_exists('cart',$_SESSION)){
    $arr = $_SESSION['cart'];
}
echo json_encode($arr);
?>