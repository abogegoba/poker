<?php
include_once '../lib/inc_mysql.php';
$obj= new db; // dbクラスのオブジェクト作成（インスタンス化）
session_start();
$error = FALSE;
    if(isset($_SESSION['adminlogin'])){
    
    //s_first_fee.normal_fee
    $sql="select *
          from   shop_master
          where s_flg = true ";
    
    $result = mysql_query($sql);
    

    }  else {
        header('Location: login.php');
        exit;
    }

if(isset($_POST['check-delete_checkbox']) ){
    
//オートコミットをオフに設定
$sql = "SET AUTOCOMMIT=0" ;
mysql_query($sql) ;
//トランザクション開始
$sql = "BEGIN" ;
mysql_query($sql) ;
//ad_prと画像名は別テーブル。

$deldate = $_POST['check-delete_checkbox'];

foreach ($deldate as $key => $value){

    $sql = "update shop_master set
                    s_flg = false
                where s_id = '$value' ";
    $as_flag = mysql_query($sql);
    
    if ($as_flag) {
        //コミット
        $sql = "COMMIT";
        mysql_query($sql);
    }else {
    
    //ロールバック
    $sql = "ROLLBACK" ;
    mysql_query($sql) ;
    $error = true;
    exit;
    }   

}

header('Location: shop_list.php');
        exit;
}

include 'view/shop_list_view.php';
