<?php
    include 'config/com.php';
    session_start();

if(isset($_SESSION['sid'])){
  $sid = $_SESSION['sid'];
  $sql = "SELECT * FROM register_table inner join usr_table on usr_table.id = register_table.u_id WHERE s_id = '$sid'";
  $cresult = $mysqli->query($sql);


}else{
  echo "string";exit;
}








		include 'view/dealer1_view.php';
