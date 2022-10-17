<?php
session_start();

if(empty($_SESSION["token"])){
    header("Location: login.php");
}

