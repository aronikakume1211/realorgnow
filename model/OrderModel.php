<?php
include_once('DB.php');
class OrderModel{
    public $conn;
    function __construct(){
        $this->conn = new DB();
    }
    
    function getOrderById($id){
        $sql = "SELECT * FROM now_order WHERE id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        return $products;
       
    }
    function addOrder($total){
        $sql = "INSERT INTO now_order (order_total,created_at) VALUES (".$total.",'".date('Y-m-d H:i:s')."')";
        $con = $this->conn->getConnection();
        $shipping = $con->query($sql);
        $id = mysqli_insert_id($con);
        return $id;
    }
    function deleteOrders($ids){
        $sql_card = "DELETE FROM card_details WHERE order_id IN(".$ids.")";
        $sql_ship = "DELETE FROM shipping WHERE order_id IN(".$ids.")";
        $sql_order = "DELETE FROM now_order WHERE id IN(".$ids.")";

        $con = $this->conn->getConnection();
        $del_card = $con->query($sql_card);
        $del_ship = $con->query($sql_ship);
        $del_ord = $con->query($sql_order);
    }
}
?>