<?php

class Helper{
    
    public function showErrorMessage($formName, $field){
        if(isset($_SESSION[$formName][$field])){
            echo '<span class="error alert-danger">'.implode('<br/>', $_SESSION[$formName][$field]).'</span>';
            unset($_SESSION[$formName][$field]);
        }
    }
}

$helper = new Helper();