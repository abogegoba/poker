<?php
//謎のキャッシュ消去用
header('Expires: Tue, 1 Jan 2019 00:00:00 GMT');
header('Last-Modified:' . gmdate( 'D, d M Y H:i:s' ) . 'GMT');
header('Cache-Control:no-cache,no-store,must-revalidate,max-age=0');
header('Cache-Control:pre-check=0,post-check=0',false);
header('Pragma:no-cache');
// 設定系ぶちここみファイル

    header('Content-Type: text/html; charset=UTF-8');

    //ローカル
		$mysqli = new mysqli('localhost:8889','root', 'root', 'mpoker_master');

		// $mysqli = new mysqli('mysql737.db.sakura.ne.jp','mpoker', 'egoba1031', 'mpoker_master');


    if( $mysqli->connect_errno ) {
    	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
      echo "DBエラーサイト管理者にご連絡ください";exit;
    }
