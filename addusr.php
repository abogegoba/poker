<?php
    include 'config/com.php';
    session_start();


if(isset($_SESSION['sid'])){
  $sid = $_SESSION['sid'];
  if(isset($_POST['eg'])){


      $usr = $_POST['usrda'];
      $chip = $_POST['chip'];


       $sql = "SELECT id FROM usr_table where name = '$usr' or id = '$usr'";
       $cresult = $mysqli->query($sql);
       $data = mysqli_fetch_assoc($cresult);

       $id = $data['id'];

       if($id !=  NUll){
         $resql = "insert IGNORE into register_table
                 (s_id,
                  u_id,
                  chip_num
                  )values(
                  '$sid',
                  '$id',
                  '$chip'
                  )";
                  $res = $mysqli->query($resql);
                  $mysqli->close();
                  header('Location: dealer1.php');exit;
       }else{
         echo "失敗";

       }






  }else{

  }

  // $usql = "SELECT * FROM register_table where s_id = '$sid'";
  // $ures = $mysql->query($usql);



}else{
  exit;
}








		include 'view/addusr_view.php';
