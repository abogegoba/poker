<?php
session_start();
$dir_path = "../create/uploads";
$dir_pathth = "../create/uploadscrop";

if(isset($_GET['key'])){
  $filename = $_GET['key'];
}
if(isset($_GET['id'])){
  $_SESSION['id'] = $_GET['id'];
}

if (is_dir($dir_path)){

}else{
echo 'DIR 画像がないよ';
}


if(isset($_GET['d'])){
  if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
  }
  $fpath = $_GET['d'];
  $fname = $id.'.png';
  

//画像のダウンロード
header('Content-Type: application/octet-stream');
header('Content-Length: '.filesize($fpath));
header('Content-disposition: attachment; filename="'.$fname.'"');
readfile($fpath);
}



include 'view/gazo_view.php';
