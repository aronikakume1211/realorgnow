<?php
include_once('DB.php');
class UserModel{
    public $conn;
    function __construct(){
        $this->conn = new DB();
    }

    function login($userArr){
        $sql = "SELECT * FROM user WHERE email='".$userArr['email']."' and password='".md5($userArr['password'])."'";
        $con = $this->conn->getConnection();
        $user = $con->query($sql);
        return $user;
    }
    function register($email,$password){
        $sql = "INSERT INTO user (email,password) VALUES ('".$email."','".md5($password)."')";
        $con = $this->conn->getConnection();
        $userQry = $con->query($sql);
        $id = mysqli_insert_id($con);
        return $id;
    }
    function getUserById($id){
        $sql = "SELECT * FROM user WHERE id=".$id;
        $con = $this->conn->getConnection();
        $userQry = $con->query($sql);
        $user = mysqli_fetch_assoc($userQry);
        return $user;
    }
    function getUserByEmail($email){
        $sql = "SELECT * FROM user WHERE email='".$email."'";
        $con = $this->conn->getConnection();
        $userQry = $con->query($sql);
        $user = mysqli_fetch_assoc($userQry);
        return $user;
    }

}
?>