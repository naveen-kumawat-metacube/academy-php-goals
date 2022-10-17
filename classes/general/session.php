<?php
session_start();

class Session{
    
    public function setSession($key, $value){
        $_SESSION[$key] = $value;
    }

    public function setToken($token){
        $_SESSION['token'] = $token;
    }
    
    public function getToken(){
        return $_SESSION['token'];
    }

    public function removeToken(){
        unset($_SESSION['token']);
    }

    public function authRequired()
    {
        if(!isset($_SESSION['token'])){
            header('Location: login.php');
            exit();
        }
    }

    public function setLoginUser($user){
        return $_SESSION['loginUser'] = array(
            'name' => $user['full_name'],
            'email' => $user['email'],
            'mobile' => $user['mobile'],
            'address' => $user['address'],
            'status' => $user['status'],
        );
    }

    public function getLoginUser(){
        return $_SESSION['loginUser'];
    }

    public function getLoginUserInfo($field){
        return $_SESSION['loginUser'][$field];
    }

    public function setFlash($type, $message){
        if(!isset($_SESSION[$type])){
            $_SESSION[$type] = [$message];
        }else{
            array_push($_SESSION[$type], $message);
        }
    }

    public function flash(){
        if(isset($_SESSION["success"]) && !empty($_SESSION["success"])){
            foreach ($_SESSION["success"] as $key => $message) {
                echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
                unset($_SESSION["success"][$key]);
            }
        }

        if(isset($_SESSION["error"]) && !empty($_SESSION["error"])){
            foreach ($_SESSION["error"] as $key => $message) {
                echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';
                unset($_SESSION["error"][$key]);
            }
        }
    }

}

$session = new Session();