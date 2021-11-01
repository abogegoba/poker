<?php
    include 'config/com.php';
    session_start();

if(isset($_SESSION['sid'])){

  if(isset($_GET['id']) and $_GET['id']){
    $id = $_GET['id'];
    $sid = $_SESSION['sid'];
    $sql = "SELECT * FROM register_table inner join usr_table on usr_table.id = register_table.u_id WHERE s_id = '$sid' and id = '$id'";
    $cresult = $mysqli->query($sql);
    $data = mysqli_fetch_assoc($cresult);
    var_dump($data);




  }


}else{
  echo "string";exit;
}








		include 'view/dealer2_view.php';
