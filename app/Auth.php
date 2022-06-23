<?php
namespace App;

class Auth extends DB{
    
    public function __construct(){
        parent::__construct();
    }

    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE user_email='$email' AND password='$password'";
        $stmt = $this->db->prepare($sql);
        

        $stmt->execute();
        $row = $stmt->fetch();

        if (!empty($row)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['user_nama'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['alamat'] = $row['user_alamat'];
            $_SESSION['no_hp'] = $row['user_hp'];
        }else{
            $_SESSION['error'] = "Login Error";
        }
    }

    public function logout(){
        session_destroy();
    }
}