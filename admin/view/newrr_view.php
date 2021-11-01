<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration</title>
        <meta name="Description" content="" />
        <link rel="stylesheet" href="css/common.css" type="text/css" />
        <link rel="stylesheet" href="css/home.css" type="text/css" />
    </head>

<body id="admin_members">
<div id="header">
<h1 id="title">Administration</h1>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">新規登録</span></a>
</div>

<div id="content">
<h1 id="content_title">新規ルーム登録</h1>
<div class="back_link">
<a href="index.php">ホームへ戻る</a>
</div>

<h2 class="category">csvでインポート</h2>
<form action="newrr.php"  name="mainform" method="post" enctype="multipart/form-data" id="niceform">               
    <table>
        <tr>
            <th>ListCSVファイル</th>
            <td>
                <input type="hidden" name="file_name-csv" value="" />
                <input type="file" name="file-csv" size="50">
            </td>
        </tr>
    </table>
    <input type="hidden" name="msg_flg" value="0" />
    <input type="submit" id="submit_button" name="action-import" value="インポート実行" class="important_button" />
</form>

<h2 class="category">新規ルーム登録</h2>
<div class="error_message">			
<p></p>
</div>
<div class="content">
    
    

<form action="newrr.php" name="form1" method="post" enctype="multipart/form-data">
    
<?php if(isset($result)){ ?>
    <?php while ($data = mysql_fetch_assoc($result)){ ?>
    <table class="wide">
    <tr>
    <th>HOTELID</th>
    <td>
    <div class="error_message"></div>
        <input type="text" name="hotel_id" id="" style="ime-mode: active;" 
               value="<?php if(isset($data['hotel_id'])){ echo $data['hotel_id'];}?>" class="" size="50" />
    </td>
    </tr>
    <tr>
    <th>ルームNo.</th>
    <td>
        <input type="text" name="room_num" id="" style="ime-mode: active;" 
               value="<?php if(isset($data['room_num'])){ echo $data['room_num'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>
    <tr>
    <th>ルームタイプ名</th>
    <td>
        <input type="text" name="room_type" id="" style="ime-mode: active;" 
               value="<?php if(isset($data['room_type'])){echo $data['room_type'];}?>" class="" size="50"/>
    <div class="error_message"></div>
    </td>
    </tr>
    <tr>
    <th>最大収容人数</th>
    <td>
        <input type="text" name="max_num" id="" style="ime-mode: active;" 
               value="<?php if(isset($data['max_num'])){echo $data['max_num'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>
    <tr>
    <th>Key暗唱番号</th>
    <td>
        <input type="text" name="key_num" id="" style="ime-mode: active;" 
               value="<?php if(isset($data['key_num'])){echo $data['key_num'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>
    </table>
    <div class="submit_confirm">
    <input type="submit" name="update" value="上記の内容で編集する" />
    </div>
    <input type="hidden" name="update" value="update">
    <?php } ?>
<?php }else{?>
<table class="wide">
<tr>
<th>HOTELID</th>
<td>
<div class="error_message"></div>
    <input type="text" name="hotel_id" id="" style="ime-mode: active;" 
           value="<?php if(isset($data['name'])){ echo $data['name'];}?>" class="" size="50" />
</td>
</tr>
<tr>
<th>ルームNo.</th>
<td>
    <input type="text" name="room_num" id="" style="ime-mode: active;" 
           value="<?php if(isset($data['namekana'])){ echo $data['namekana'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>
<tr>
<th>ルームタイプ名</th>
<td>
    <input type="text" name="room_type" id="" style="ime-mode: active;" 
           value="<?php if(isset($data['tel'])){echo $data['tel'];}?>" class="" size="50"/>
<div class="error_message"></div>
</td>
</tr>
<tr>
<th>最大収容人数</th>
<td>
    <input type="text" name="max_num" id="" style="ime-mode: active;" 
           value="<?php if(isset($data['mail'])){echo $data['mail'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>
<tr>
<th>Key暗唱番号</th>
<td>
    <input type="text" name="key_num" id="" style="ime-mode: active;" 
           value="<?php if(isset($data['adminid'])){echo $data['adminid'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>
</table>
<div class="submit_confirm">
<input type="submit" name="action-save" value="上記の内容で登録する" />
</div>
<input type="hidden" name="confirm" value="confirm">
<?PHP }?>
</form>
</div>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">新規ホテル登録</span></a>
</div>
<div id="footer">
<p>Administration</p>
</div>
</body>
</html>