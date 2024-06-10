<?php
include_once('DB.php');
class ProductModel{
    public $conn;
    function __construct(){
        $this->conn = new DB();
    }
    function getProduts(){
        $sql = "SELECT * FROM product";
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        return $products;
       
    }
    function getProdutById($id){
        $sql = "SELECT * FROM product WHERE id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        return $products;
       
    }
}
?>