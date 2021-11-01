<?php
session_start();
$error = false;
// $mysqli = new mysqli('127.0.0.1','root', 'root', 'nolda');
$mysqli = new mysqli('mysql138.phy.lolipop.lan','LAA1301394', 'Egoba1031', 'LAA1301394-nolda');
if( $mysqli->connect_errno ) {
	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}

if($_SESSION['adminlogin'] == null){
    header('Location: login.php');
    exit;
}
$sql = "SELECT * FROM master ";
$result = $mysqli->query($sql);



include 'view/masterlist_view.php';
