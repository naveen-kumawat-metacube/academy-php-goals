<?php
require_once ('classes/general/session.php');

if($_POST){
    $validationErrors = [];

    require_once ('classes/general/validate.php');
    require_once ('classes/db/DBClass.php');

    $validate = new Validate();

    if($validate->checkExists('email')){
        if($validate->checkNotEmpty('email')){
            $validationErrors["email"][] = "Please enter email address.";
        }
        if($validate->checkValidEmail('email')){
            $validationErrors["email"][] = "Please enter valid email address.";
        }
    }

    if($validate->checkExists('password')){
        if($validate->checkNotEmpty('password')){
            $validationErrors["password"][] = "Please enter password.";
        }
    }

    if(empty($validationErrors)){
        $db = new DBClass;
        
        $result = $db->query("SELECT * FROM admins WHERE email LIKE '{$_POST['email']}' AND password = '".md5($_POST['password'])."'");

        if($db->numRows($result)){
            $admin = $db->fetchArray($result);
            $session->setToken(md5(time()).'-'.md5($admin['id']));
            $session->setLoginUser($admin);
            header('Location: index.php');
        }
    }else{
        $session->setSession("loginFormErrors", $validationErrors);
    }
}