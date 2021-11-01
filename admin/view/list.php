<?php
session_start();
$error = false;
$mysqli = new mysqli('127.0.0.1','root', 'root', 'nolda');
// $mysqli = new mysqli('mysql138.phy.lolipop.lan','LAA1301394', 'Egoba1031', 'LAA1301394-nolda');
if( $mysqli->connect_errno ) {
	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
}



// 完成済みのSELECT文を実行する
$sqlc = "SELECT count(*) as a FROM customer_data";
$cresult = $mysqli->query($sqlc);
$r = mysqli_fetch_assoc($cresult);
$row = $r['a'];

$sql   = "SELECT * FROM customer_data";
$result = $mysqli->query($sql);
$listdata = mysqli_fetch_assoc($result);
// var_dump($sql);exit;
// exit;

if(isset($_POST['update'])){
	$list1 = $_POST;

	var_dump($list1);exit;

	$count = count( $list1['hotelid'] );

	$i = 0;
	$id = 1;
	while( $i < $count ) {
		$hotelid = $list1['hotelid'][$i];
		$stha = $list1['stha'][$i];
		$sqlu = "update customer_data set
		customer_status = '$hotelid',
		feest = '$stha'
		where customer_management_no = '$id'";
		$res = $mysqli->query($sqlu);


	    ++$i;
			++$id;
	}



}




include 'view/list_view.php';
