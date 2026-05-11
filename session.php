<?php

session_start();

if(!isset($_SESSION['usename'])){
    header("Location: auth/login.php");
    exit;

}

?>