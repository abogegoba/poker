<?php
include 'config/com.php';
session_start();





if($_POST){
    $id = $_POST['login-user_id'];
    $pass = $_POST['login-password'];

     if(!preg_match("/^[a-zA-Z0-9]+$/", $id)){
          $error = TRUE;
      }


     if(!preg_match("/^[a-zA-Z0-9]+$/", $pass)){
          $error = TRUE;
      }

    if ($error != TRUE){
        $sql = "SELECT count(*) as cnt FROM master where id = '$id' and pass = '$pass'";
        $result = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($result);

        if($row['cnt'] == 1){
         $_SESSION['adminlogin'] = TRUE;
         header('Location: index.php');
         exit;
        }else{
            $error = TRUE;

        }

    }


}




include 'view/login_view.php';
