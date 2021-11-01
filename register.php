<?php
    include 'config/com.php';
    session_start();

		$ssql = "select * from sex_table";
		$sex = $mysqli->query($ssql);

		$sql = "select * from age_table";
		$age = $mysqli->query($sql);




    if(isset($_SESSION['error']) and $_SESSION["error"] != ""){
      $errormes = $_SESSION['error'];
    }



		if(isset($_POST['email'])){
      $error  = false;
      $email  = $_POST['email'];
      $pass   = $_POST['pass'];
      $repass = $_POST['repass'];
      $pname  = $_POST['pname'];
      $sex    = $_POST['sex'];
      $age    = $_POST['age'];

      // エラーチェック　start
      if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $email)){
           $error = TRUE;
           echo "1";exit;
       }
      if(!preg_match("/^[a-zA-Z0-9]+$/", $pass)){
           $error = TRUE;
           echo "2";exit;
       }
       if(!preg_match("/^[a-zA-Z0-9]+$/", $repass)){
            $error = TRUE;
            echo "3";exit;
       }
       if($pass != $repass){
            $error = TRUE;
            echo "4";exit;
       }
       if($pname == "" or $sex == "" or $age == ""){
         $error = TRUE;
       }
       if($error == TRUE){
         $_SESSION['error'] = "入力内容をご確認ください";
         header('Location: register.php');
       }else{

         $sql = "insert IGNORE into usr_table
                 (mail,
                 passwd,
                  name,
                  sex,
                  age,
                  usr_status
                  )values(
                  '$email',
                  '$pass',
                  '$pname',
                  '$sex',
                  '$age',
                  '0'
                  )";
                  $res = $mysqli->query($sql);
                  $mysqli->close();
                  header('Location: userdashboard.php');

        }






		}



		include 'view/register_view.php';
