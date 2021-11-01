<?php
include_once '../lib/inc_mysql.php';
$obj= new db; // dbクラスのオブジェクト作成（インスタンス化）
include_once 'lib/forminputcheck.php';
include_once 'lib/mkdir.php';
session_start();
$error = FALSE;


if(isset($_POST['s_id'])){
    $inputdata = $_POST;
    $_SESSION['newshop'] = $inputdata;
    $error = forminput_check($inputdata);
}


if($error == FALSE && isset($_POST['s_id'])){

    $sid         = $inputdata['s_id'];
    $spssword    = $inputdata['s_password'];
    $s_type      = $inputdata['type'];
    $s_url       = $inputdata['s_url'];
    $site_design = $inputdata['site_design'];

    if($inputdata['s_company'] == ""){
        $company = null;
    }else{
        $company  = $inputdata['s_company'];
    }


    if($inputdata['s_name'] == ""){
        $name = null;
    }else{
        $name = $inputdata['s_name'];
    }



    //オートコミットをオフに設定
    $sql = "SET AUTOCOMMIT=0" ;
    mysql_query($sql) ;

    //トランザクション開始
    $sql = "BEGIN" ;
    mysql_query($sql) ;
    //ad_prと画像名は別テーブル。

    $sql = "INSERT INTO shop_master
                        (s_id,
                        s_type,
                        s_pssword,
                        s_url,
                        site_design,
                        s_company,
                        s_name,
                        s_flg
                        ) values (
                        '$sid',
                        '$s_type',
                        '$spssword',
                        '$s_url',
                        '$site_design',
                        '$company',
                        '$name',
                         TRUE )";
    

    $result_flag = mysql_query($sql);
    
    $sql = "INSERT INTO application_detail
                        ( s_id
                        ) values (
                        '$sid')";
    

    $ad_flag = mysql_query($sql);

    if ($result_flag && $ad_flag) {
    //コミット
        $dir_name = '../temview/'.$site_design;
        $new_dir  = '../'.$s_url;
        //temview
        $mk = dir_copy($dir_name, $new_dir);

        $sql = "COMMIT";
        mysql_query($sql);
        //insertに成功したら確認ページへ
        header('Location: comp.php');
        exit;

    } else {
        //ロールバック
        $sql = "ROLLBACK" ;
        mysql_query($sql) ;
    }

}


include 'view/shop_new_view.php';
