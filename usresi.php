<?php
    include 'config/com.php';
    session_start();


if(isset($_SESSION['sid'])){
  $sid = $_SESSION['sid'];
  // $usql = "SELECT * FROM register_table where s_id = '$sid'";
  // $ures = $mysql->query($usql);

}else{
  exit;
}








		include 'view/dealer1_view.php';
