<?php
session_start();
$error = false;
// $mysqli = new mysqli('127.0.0.1','root', 'root', 'nolda');
$mysqli = new mysqli('mysql138.phy.lolipop.lan','LAA1301394', 'Egoba1031', 'LAA1301394-nolda');
if( $mysqli->connect_errno ) {
	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}

$sqlc = "SELECT count(*) as a FROM customer_data";
$cresult = $mysqli->query($sqlc);
$r = mysqli_fetch_assoc($cresult);
$row = $r['a'];


if(isset($_GET['key'])){
$id = $_GET['key'];

$sql = "select * from customer_data where customer_purchase_products_id = '$id'";
$result = $mysqli->query($sql);

}
elseif(isset($_POST['searchbox']))
{

  if($_POST['reservid'] != ''){
		$shop_id = $_POST['reservid'];
		$sql = "select * from customer_data where customer_management_no = '$shop_id'";
		$result = $mysqli->query($sql);
	}
	if($_POST['hotelid'] != ''){
		$shop_id = $_POST['hotelid'];
		$sql = "select * from customer_data where customer_status = '$shop_id'";
		$result = $mysqli->query($sql);
	}
	if($_POST['family_name'] != ''){
		$shop_id = $_POST['family_name'];
		$sql = "select * from customer_data where customer_name = '$shop_id'";

		$result = $mysqli->query($sql);
	}
	if($_POST['mailaddress'] != ''){
		$shop_id = $_POST['mailaddress'];
		$sql = "select * from customer_data where customer_email_address = '$shop_id'";

		$result = $mysqli->query($sql);
	}
	if($_POST['reserv_time_yyyy'] != ''){
		$shop_id  = $_POST['reserv_time_yyyy'];
		$shop_id .='-';
		$shop_id .=$_POST['reserv_time_mm'];
		$shop_id .=$_POST['reserv_time_dd'];
		$sql = "select * from customer_data where customer_buy_date like = '$shop_id'";
		$result = $mysqli->query($sql);
	}

}else{
// 完成済みのSELECT文を実行する


$sql    = "SELECT * FROM customer_data";
$result = $mysqli->query($sql);

}


// $listdata = mysqli_fetch_assoc($result);
//
// echo "<pre>";
// var_dump($row,$listdata);




include 'view/purchase_list_view.php';
