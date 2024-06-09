<?php
include_once('DB.php');
class CarddetailsModel{
    public $conn;
    function __construct(){
        $this->conn = new DB();
    }
    
    function getCardById($id){
        $sql = "SELECT * FROM card_details WHERE id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        return $products;
       
    }
    function addCard($arr){

        $sql = "INSERT INTO card_details (order_id, card_number, cvv, exp_month, exp_year) VALUES ('".$arr['order_id']."','".$arr['card_number']."','".$arr['cvv']."','".$arr['exp_month']."','".$arr['exp_year']."')";
        echo $sql;
        $con = $this->conn->getConnection();
        $carddetail = $con->query($sql);
        $id = mysqli_insert_id($con);
        return $id;
    }
    function getCardByOrderId($id){
        $sql = "SELECT * FROM card_details WHERE order_id=".$id;
        $con = $this->conn->getConnection();
        
        $products = $con->query($sql);
        $row = mysqli_num_rows($products);
        return $row;
       
    }
    function updateCardByOrderId($arr,$id){
        $sql = "UPDATE  card_details SET ";
        $i=0;
        foreach($arr as $key => $val){
            if($i > 0)
                $sql .= ", ";
            $sql .=$key."= '".$val."'";
            $i++;
        }
        $sql .= " WHERE order_id=".   $id;
        echo $sql;
        $con = $this->conn->getConnection();
        $shipping = $con->query($sql);
    }
    function addCardByOrderId($arr){
        $str_key = '(';
        $str_val = '(';
        $i = 0;
        foreach($arr as $key => $val){
            if($i > 0){
                $str_key .= ", ";
                $str_val .= ", ";
            }
            $str_key.= $key;
            $str_val.= "'".$val."'";
            //$sql .=$key."= '".$val."'";
            $i++;
        }
        $str_key .= ')';
        $str_val .= ')';
        $insertquery = "INSERT INTO card_details ".$str_key." VALUES ".$str_val;
        //echo $insertquery;exit;
        $con = $this->conn->getConnection();
        $carddetail = $con->query($insertquery);
        $id = mysqli_insert_id($con);
        return $id;
    }
}
?>