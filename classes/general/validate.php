<?php

class Validate{
    
    public function checkExists($field){
        return isset($_POST[$field]);
    }
    
    public function checkNotEmpty($field){
        return empty($_POST[$field]);
    }

    public function checkEmpty($field){
        return !empty($_POST[$field]);
    }

    public function checkValidEmail($field){
        return !filter_var($_POST[$field], FILTER_VALIDATE_EMAIL);
    }

    public function checkAlphNumeric($field){
        return !preg_match("/^[a-zA-Z-' ]*$/",$_POST[$field]);
    }

    public function checkNumeric($field){
        return !is_numeric($_POST[$field]);
    }

    public function checkMaxLength($field, $length){
        return strlen($_POST[$field]) > $length;
    }

    public function checkMinLength($field, $length){
        return strlen($_POST[$field]) < $length;
    }

    public function checkLength($field, $length){
        return !strlen($_POST[$field]) == $length;
    }

    public function checkFileExists($field){
        return isset($_FILES[$field]);
    }

    public function checkFileUploaded($field){
        return !file_exists($_FILES[$field]["tmp_name"]);
    }

    public function checkImageType($field){
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg"
        );
        $file_extension = pathinfo($_FILES[$field]["name"], PATHINFO_EXTENSION);
        return ! in_array($file_extension, $allowed_image_extension);
    }


    public function checkImageSize($field, $size){
        return ($_FILES[$field]["size"] > ($size * 1024 * 1024));
    }
     
}