<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
//include_once 'lib/inc_mysql.php';
//$obj= new db; // dbクラスのオブジェクト作成（インスタンス化）

$db_link = new mysqli('mysql708.db.sakura.ne.jp', 'egoba', 'souichi7', 'egoba_unsodb');
//  $db_link = mysqli_connect('127.0.0.1','root', 'P@ssw0rd', 'unsodb');
//  $db_link = new mysqli('localhost:8889','root', 'souichi7', 'shidb');

if( mysqli_connect_errno($db_link) ) {
	echo mysqli_connect_errno($db_link) . ' : ' . mysqli_connect_error($db_link);exit;
}

mysqli_set_charset( $db_link, 'utf8');




//var_dump($hkey);exit;
if (isset($_POST['msg_flg'])) {
    $errflg = 0;
    $uploadfile = 'data/'.$uploaddir . basename($_FILES['file-csv']['name']);
    $import_error = "";
    if ($_FILES['file-csv']['name'] == ""){
            $import_error .= "<b>ファイルを選択してください。</b><br>";
            $errflg = 1;
    }else{
        if (strcasecmp(substr(strrchr($uploadfile, '.'), 1) , "csv")){
                $import_error .= "<b>インポートできるファイルはCSVファイルのみです。</b><br>";
                $errflg = 1;
        }else{
            if (!move_uploaded_file($_FILES['file-csv']['tmp_name'], $uploadfile)) {
                $import_error .= "<b>ファイルのアップロードに失敗しました。</b><br>";
                $errflg = 1;
            }
        }
    }
    
  
      
  
    if($errflg != 1){

        $csv  = array();
        $fp   = fopen($uploadfile , "r");

        while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
          $csv[] = $data;
        }

        for ($index = 1; $index < count($csv); $index++) {


            $name            = $csv[$index][0];
            $booking_id      = $csv[$index][1];
            $cash_recovery   = $csv[$index][2];
            $item_1          = $csv[$index][4];
            $item_2          = $csv[$index][5];
            $remarks         = $csv[$index][6];
            $rep             = $csv[$index][7];

            
            
               //新規予約リストを作成
               $sql = "insert IGNORE into antable
                       (hotel_name,
                        booking_id,
                        cash_recovery,
                        item_1,
                        item_2,
                        remarks,
                        rep
                        )values(
                        '$name',
                        '$booking_id',
                        '$cash_recovery',
                        '$item_1',
                        '$item_2',
                        '$remarks',           
                        '$rep')";
//                echo '<pre>';
//                var_dump($db_link, $sql);
            $res = mysqli_query( $db_link, $sql);

            
//            exit;

        }
    mysqli_close($db_link);
    }
  
  
    
}


  include 'view/csvimport_view.php';


