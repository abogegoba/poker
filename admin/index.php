<?php
session_start();

if($_SESSION['adminlogin'] == null){

    header('Location: login.php');
    exit;

}

include 'view/index_view.php';
