<?php
include_once('model/OrderModel.php');
$ordermodel = new OrderModel();
$delete_ids = implode(',',$_POST);
$ordermodel->deleteOrders($delete_ids);


?>