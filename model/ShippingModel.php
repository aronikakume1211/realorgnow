<?php
include_once('DB.php');
class ShippingModel{
    public $conn;
    function __construct(){
        $this->conn = new DB();
    }
    function getAllShipping(){
        $sql = "SELECT * FROM shipping";
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        return $products;
       
    }
    function getShippingById($id){
        $sql = "SELECT * FROM shipping WHERE id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        $row = mysqli_fetch_assoc($products);
        return $row;
       
    }
    function getShippingByOrderId($id){
        $sql = "SELECT * FROM shipping WHERE order_id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        $row = mysqli_fetch_assoc($products);
        return $row;
       
    }
    function addShipping($arrShip){
        $sql = "INSERT INTO shipping (order_id,first_name, last_name, address, zip_code, city, state, email, mobile, created_at) VALUES ('".$arrShip['order_id']."', '".$arrShip['first_name']."', '".$arrShip['last_name']."', '".$arrShip['address']."', '".$arrShip['zip_code']."', '".$arrShip['city']."', '".$arrShip['state']."', '".$arrShip['email']."', '".$arrShip['mobile']."', '".date('Y-m-d H:i:s')."')";
        $con = $this->conn->getConnection();
    
        $shipping = $con->query($sql);
        $id = mysqli_insert_id($con);
        return $id;
    }
    function updateShipping($arr,$id){
        $sql = "UPDATE  shipping SET ";
        $i=0;
        foreach($arr as $key => $val){
            if($i > 0)
                $sql .= ", ";
            $sql .=$key."= '".$val."'";
            $i++;
        }
        $sql .= " WHERE id=".   $id;
        $con = $this->conn->getConnection();
        $shipping = $con->query($sql);
    }
}
?>