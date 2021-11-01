<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<title>Administration</title>
<meta name="Description" content="" />

<link rel="stylesheet" href="css/common.css" type="text/css" />
<link rel="stylesheet" href="css/home.css" type="text/css" />

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery-ui-i18n.min.js"></script>




</head>
<script type="text/javascript">
<!--
function changepage (page) {
document.forms["linkform"].page.value = page;
document.forms["linkform"].submit();
}
-->
</script>
<body id="admin_members">

<div id="header">
<h1 id="title">Administration</h1>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">一覧</span></a>
</div>

<div id="content">
<h1 id="content_title">一覧</h1>


<div class="content">




<h2 class="category">画像データ一覧</h2>

<form name='fm2' action="list.php" method="post" >
<input type="hidden" name="data-sim_id" id="sim_id" value="" />
<input type="hidden" name="action-edit" id="action-edit" value="edit" disabled='disabled' />
<input type="hidden" name="action-pager" id="action-pager" value="pager" disabled='disabled' />
<input type="hidden" name="data-pager_val" id="pager_val" value="" />
<input type="hidden" name="data-pager_cur" id="pager_cur" value="1" />
<div class="content">


<div style="height:100%; width:100%; overflow-y:scroll;">

  <h2 class="category">アップロード 元画像</h2>


    <?php

    if(is_readable($dir_path)){ // ? ファイルが読み込み可能かどうか
        $ch_dir = dir($dir_path); //ディレクトリクラス
        //ディレクトリ内の画像を一覧表示
        $ln_path = $ch_dir -> path . "/" .$filename;
        if (@getimagesize($ln_path)){ //画像かどうか？
          echo "<a href = \"gazo.php?d=" .urlencode(mb_convert_encoding($ln_path, "UTF-8")). "\" target = \"_blank\" >";
          echo "<img src = \"" .$ln_path. "\" height=\"100\"></a> ";
        }

    $ch_dir -> close();
    }else{
    echo "<p>" .htmlspecialchars($dir_path)."　は読み込みが許可されていません。";
    }
     ?>

</div>

<div style="height:100%; width:100%; overflow-y:scroll;">

  <h2 class="category">アップロード 加工画像</h2>


    <?php

    if(is_readable($dir_pathth)){ // ? ファイルが読み込み可能かどうか
        $ch_dir = dir($dir_pathth); //ディレクトリクラス
        //ディレクトリ内の画像を一覧表示

        $ln_path = $ch_dir -> path . "/" .$filename;
        $ln_path .= ".png";
        
        if (@getimagesize($ln_path)){ //画像かどうか？
          echo "<a href = \"gazo.php?d=" .urlencode(mb_convert_encoding($ln_path, "UTF-8")). "\" target = \"_blank\" >";
          echo "<img src = \"" .$ln_path. "\" class=\"egohir\"></a> ";

      }
    $ch_dir -> close();
    }else{
    echo "<p>" .htmlspecialchars($dir_path)."　は読み込みが許可されていません。";
    }
     ?>

</div>
</div>

<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">新規登録</span></a>
</div>
<div id="footer">
<p>Administration</p>
</div>

    <script type="text/javascript">
$(function(){
　$("#datepicker").datepicker({;
　　numberOfMonths: 3,
　　showButtonPanel: true
　});
});
</script>

</body>
</html>
