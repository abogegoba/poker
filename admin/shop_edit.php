<?php
include_once '../lib/inc_mysql.php';
$obj= new db; // dbクラスのオブジェクト作成（インスタンス化）
include_once 'lib/forminputcheck.php';
session_start();


if(isset($_GET['s_id'])  || isset($_POST['s_id'])){
    
    //s_first_fee.normal_fee,    
if(isset($_GET['s_id'])){
$sid = $_GET['s_id'];
}elseif(isset ($_POST['s_id'])){
    $sid = $_POST['s_id'];
}
$sql="select sm.s_name,
             sm.s_type,
             sm.s_id,
             sm.s_pssword,
             sm.s_company,
             sm.s_open_id,
             sm.s_close_id,
             sm.s_phonenum,
             sm.s_mailaddress,
             sm.s_address,
             sm.s_url,
             sm.s_lat,
             sm.s_lng,
             cm.c_name,
             ad.ad_pr,
             ad.ad_main_img,
             ad.ad_sab1_img,
             ad.ad_sab2_img,
             ad.ad_sab3_img,
             pm.p_id,
             cm.c_id,
             sm.s_holiday
      from   shop_master sm
      left outer join application_detail ad
           on sm.s_id = ad.s_id
      left outer join prefectures_master pm
           on sm.p_id = pm.p_id
      left outer join city_master cm
           on sm.c_id = cm.c_id
      where s_flg = true and sm.s_id = ".$sid
      ;


    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)){
        $shopdata = $row;
    }

    }  else {
        header('Location: index.php');
        exit;
    }



//都道府県SQL_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/
$prsql = "SELECT * FROM prefectures_master ORDER BY p_id";
$prefectures = mysql_query($prsql);

///_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/

///_/_/_/_/_/_/_/_/_/_/_/_/_
$csql = "SELECT * FROM city_master ORDER BY c_id";
$cresult = mysql_query($csql);
///_/_/_/_/_/_/_/_/_/_/_/_/_


if(isset($_POST['s_id']) || isset($_FILES['name'])){
    $inputdata = $_POST;

$sid               = $inputdata['s_id'];
$spssword          = $inputdata['s_password'];
$company           = $inputdata['s_company'];
$name              = $inputdata['s_name'];
$holiday           = $inputdata['s_holiday'];
$mailaddress       = $inputdata['s_mailaddress'];
$phonenum          = $inputdata['s_phonenum'];
$url               = $inputdata['s_url'];
$site_design       = $inputdata['site_design'];
$pid               = $inputdata['p_id'];
$address           = $inputdata['s_address'];
$cid               = $inputdata['c_id'];
$open              = $inputdata['s_open_id'];
$close             = $inputdata['s_close_id'];
$lat               = $inputdata['s_lat'];
$lng               = $inputdata['s_lng'];
$adpr              = $inputdata['ad_pr'];



//オートコミットをオフに設定
$sql = "SET AUTOCOMMIT=0" ;
mysql_query($sql) ;
//トランザクション開始
$sql = "BEGIN" ;
mysql_query($sql) ;
//ad_prと画像名は別テーブル。



$sql = "update shop_master set
                    s_pssword = '$spssword',
                    s_company = '$company',
                    s_name = '$name',
                    s_mailaddress = '$mailaddress',
                    s_phonenum = '$phonenum',
                    s_url = '$url',
                    p_id = '$pid',
                    s_holiday = '$holiday',
                    s_address = '$address',
                    c_id = '$cid',
                    s_open_id = '$open',
                    s_close_id = '$close',
                    s_lat =  '$lat',
                    s_lng = '$lng',
                    site_design = '$site_design'
                where s_id = '$sid'";
                    


$result_flag = mysql_query($sql);

if (is_uploaded_file($_FILES["ad_main_img"]["tmp_name"])) {
    //ファイル形式の統一を避けるためあらかじめ拡張子を取得しておく。
    $filename = $_FILES["ad_main_img"]["name"];
    $kakucyoushi =  preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
    $newname = date("YmdHis").$sid.".".$kakucyoushi;
}else{
    $newname = $shopdata['ad_main_img'];
}

if (is_uploaded_file($_FILES["ad_sab1_img"]["tmp_name"])) {
    //ファイル形式の統一を避けるためあらかじめ拡張子を取得しておく。
    $filename = $_FILES["ad_sab1_img"]["name"];
    $kakucyoushi =  preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
    $newname1 = "sab1".date("YmdHis").$sid.".".$kakucyoushi;

}else{
    $newname1 = $shopdata['ad_sab1_img'];
}

if (is_uploaded_file($_FILES["ad_sab2_img"]["tmp_name"])) {
    //ファイル形式の統一を避けるためあらかじめ拡張子を取得しておく。
    $filename = $_FILES["ad_sab2_img"]["name"];
    $kakucyoushi =  preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
    $newname2 = "sab2".date("YmdHis").$sid.".".$kakucyoushi;

}else{
    $newname2 = $shopdata['ad_sab2_img'];
}

if (is_uploaded_file($_FILES["ad_sab3_img"]["tmp_name"])) {
    //ファイル形式の統一を避けるためあらかじめ拡張子を取得しておく。
    $filename = $_FILES["ad_sab3_img"]["name"];
    $kakucyoushi =  preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
    $newname3 = "sab3".date("YmdHis").$sid.".".$kakucyoushi;
}else{
    $newname3 = $shopdata['ad_sab3_img'];
}



$sql = "update application_detail set
                     ad_pr = '$adpr',
                     ad_main_img = '$newname',
                     ad_sab1_img = '$newname1',
                     ad_sab2_img = '$newname2',
                     ad_sab3_img = '$newname3'
                    where s_id = '$sid'";
                    

$as_flag = mysql_query($sql);

if ($result_flag and $as_flag) {
//コミット
$sql = "COMMIT" ;
mysql_query($sql) ;
if(isset($_FILES["ad_main_img"]["tmp_name"])){
    move_uploaded_file($_FILES["ad_main_img"]["tmp_name"], "../images/" . $newname);
            $file1  = "../images/".$newname;                        //　元画像ファイル
            $file2  = "../images/mini/".$newname;                   //　画像保存先
            $file3  = "../images/main/".$newname; 
            $in     = ImageCreateFromJPEG($file1);                        //　元画像ファイル読み込み
            $size   = GetImageSize($file1);                            //　元画像サイズ取得
            $width  = 253;                                //　生成する画像サイズ（横）
            $height = 157;                                //　生成する画像サイズ（縦）
            $width2 = 813;
            $height2= 396;
            $out    = ImageCreateTrueColor($width, $height);                    //　画像生成
            $out2    = imagecreatetruecolor($width2, $height2);
            ImageCopyResampled($out, $in, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);    //　サイズ変更・コピー
            ImageCopyResampled($out2, $in, 0, 0, 0, 0, $width2, $height2, $size[0], $size[1]);    //　サイズ変更・コピー
            ImageJPEG($out, $file2); 
            ImageJPEG($out2, $file3); //　画像保存
            ImageDestroy($in);
            ImageDestroy($out); 
            ImageDestroy($out2); 
}

if(isset($_FILES["ad_sab1_img"]["tmp_name"])){
    move_uploaded_file($_FILES["ad_sab1_img"]["tmp_name"], "../images/" . $newname1);
}

if(isset($_FILES["ad_sab2_img"]["tmp_name"])){
    move_uploaded_file($_FILES["ad_sab2_img"]["tmp_name"], "../images/" . $newname2);
}

if(isset($_FILES["ad_sab3_img"]["tmp_name"])){
    move_uploaded_file($_FILES["ad_sab3_img"]["tmp_name"], "../images/" . $newname3);
}

//insertに成功したら確認ページへ
header('Location: comp.php');
     exit;
} else {
//ロールバック
$sql = "ROLLBACK" ;
mysql_query($sql) ;
echo "失敗" ;
}

}

include 'view/shop_edit_view.php';
