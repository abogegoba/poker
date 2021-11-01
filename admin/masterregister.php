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
if(isset($_GET['id'])){

  $id = $_GET['id'];
	$sql  = "SELECT * FROM master WHERE id = ";
	$sql .= $id;
	$result = $mysqli->query($sql);


}

if(isset($_POST['confirm'])){

	$id = $_POST["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$authority = $_POST["authority"];

	//新規予約リストを作成
	$sql = "insert IGNORE into master
					(id,
					pass,
					 name,
					 Lebel
					 )values(
					 '$id',
					 '$pass',
					 '$name',
					 '$authority')";
					 $res = $mysqli->query($sql);
					 $mysqli->close();


}elseif(isset($_POST['update'])){

	$id = $_POST["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$authority = $_POST["Lebel"];

	//新規予約リストを作成
	$sql = "UPDATE master SET
					id = '$id',
					pass = '$pass',
					name = '$name',
					Lebel = '$authority'
					where
					id = '$id'";
					 $res = $mysqli->query($sql);
					 $mysqli->close();
					 header('Location: masterlist.php');

}


include 'view/masterregister_view.php';
