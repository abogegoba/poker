<?php
include 'config/com.php';
session_start();


if(isset($_POST['searchbox'])){
	// var_dump($_POST);exit;

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
	$sqlc = "SELECT count(*) as a FROM customer_data";
	$cresult = $mysqli->query($sqlc);
	$r = mysqli_fetch_assoc($cresult);
	$row = $r['a'];

	$sql   = "SELECT * FROM customer_data";
	$result = $mysqli->query($sql);
	// $listdata = mysqli_fetch_assoc($result);
	// var_dump($sql);exit;
	// exit;
}










if(isset($_POST['update'])){
	$list1 = $_POST;
	// echo "<pre>";
	// var_dump($list1);exit;

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
header('Location: list.php');


}




include 'view/list_view.php';
