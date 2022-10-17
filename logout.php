<?php
require_once('classes/general/session.php'); 
$session->removeToken();
header('Location: login.php');
exit();
?>