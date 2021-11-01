<?php
session_start();
if(isset($_SESSION['newshop']) ){
    unset($_SESSION['newshop']);
}


include 'view/comp_view.php';