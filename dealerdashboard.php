<?php
include 'config/com.php';
session_start();

if(isset($_SESSION['data'])){
  $data = $_SESSION['data'];
  $email = $data['email'];
  $pass = $data['pass'];

  $sql = "SELECT * FROM shop_table where s_mail = '$email' and s_passwd ='$pass'";
  $cresult = $mysqli->query($sql);

  $r = mysqli_fetch_all($cresult);
  $sid = $r[0][0];

  $_SESSION['sid'] =  $sid;



}else{
  header("Location:dealerlogin.php");
}



include 'view/dealerdashboard_view.php';
