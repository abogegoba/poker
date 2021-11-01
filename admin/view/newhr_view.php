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
<h1 id="content_title">新規ホテル登録</h1>
<div class="back_link">
<a href="index.php">ホームへ戻る</a>
</div>


<h2 class="category">csvでインポート</h2>
<form action="newhr.php"  name="mainform" method="post" enctype="multipart/form-data" id="niceform">               
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


<h2 class="category">新規ホテル登録(1件ずつ)</h2>
<div class="error_message">			
<p></p>
</div>
<div class="content">

<form action="newhr.php" name="form1" method="post" enctype="multipart/form-data">
    
<table class="wide">

<tr>
<th>HOTELID</th>
<td>
<div class="error_message"></div>
    <input type="text" name="hotel_id" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['name'])){ echo $castdata['name'];}?>" class="" size="50" />
</td>
</tr>

<tr>
<th>HOTEl名</th>
<td>
    <input type="text" name="hotel_name" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['namekana'])){ echo $castdata['namekana'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>

<tr>
<th>物件名</th>
<td>
    <input type="text" name="property_name" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['tel'])){echo $castdata['tel'];}?>" class="" size="50"/>
<div class="error_message"></div>
</td>
</tr>


<tr>
<th>通称</th>
<td>
    <input type="text" name="alias" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['mail'])){echo $castdata['mail'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>

<tr>
<th>駐車場数</th>
<td>
    <input type="text" name="parkings" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['adminid'])){echo $castdata['adminid'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>


<tr>
<th>階数</th>
<td>
    <input type="text" name="ranks" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['id'])){echo $castdata['id'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>



<tr>
<th>フロアー部屋数</th>
<td>
    <input type="text" name="floor_rooms" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>


<tr>
<th>郵便番号</th>
<td>
<input type="text" name="postal_code" id="" style="ime-mode: active;" 
       value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>

<tr>
<th>住所</th>
<td>
    <input type="text" name="address" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>

<tr>
<th>最大収容人数</th>
<td>
    <input type="text" name="max_count" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>

<tr>
<th>担当者</th>
<td>
    <input type="text" name="rep_name" id="" style="ime-mode: active;" 
           value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message"></div>
</td>
</tr>


</table>
<div class="submit_confirm">
<input type="submit" name="action-save" value="上記の内容で登録する" />
</div>
<input type="hidden" name="confirm" value="confirm">


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