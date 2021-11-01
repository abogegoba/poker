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
<h1 id="content_title">新規登録</h1>
<div class="back_link">
<a href="index.php">ホームへ戻る</a>
</div>
<h2 class="category">新規登録</h2>
<div class="error_message">			
<p></p>
</div>
<div class="content">

<form action="salse_register.php" name="form1" method="post" enctype="multipart/form-data">
<table class="wide">




<tr>
<th>管理No<br />
<div class="description"></div>
</th>
<td>
    <input type="text" name="manamgement_no" id="" style="ime-mode: active;" value="<?php if(isset($castdata['name'])){ echo $castdata['name'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>宿泊日<br />
<div class="description"></div>
</th>
<td>
    <input type="text" name="lodgment_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['namekana'])){ echo $castdata['namekana'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>


<!--$sort-->

<tr>
<th>入金日
<div class="description">半角で入力してください。</div>
</th>
<td>
    <input type="text" name="payment_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['tel'])){echo $castdata['tel'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>キャンセル日時
<div class="description">半角で入力してください。</div>
</th>
<td>
    <input type="text" name="cancel_time" id="" style="ime-mode: active;" value="<?php if(isset($castdata['mail'])){echo $castdata['mail'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>予約者数
<div class="description">営業管理者を選択してくださあい</div>
</th>
<td>
<input type="text" name="reserver_num" id="" style="ime-mode: active;" value="<?php if(isset($castdata['adminid'])){echo $castdata['adminid'];}?>" class="" size="50" />
<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>国番号
<div class="description">半角で入力してください。</div>
</th>
<td>
<input type="text" name="country_code" id="" style="ime-mode: active;" value="<?php if(isset($castdata['id'])){echo $castdata['id'];}?>" class="" size="50" />
<div class="error_message">			
</div>
</td>
</tr>



<tr>
<th>該当ホテル
<div class="description">半角で入力してください。</div>
</th>
<td>
<input type="text" name="target_hotel" id="" style="ime-mode: active;" value="<?php if(isset($castdata['pass'])){echo $castdata['pass'];}?>" class="" size="50" />
<div class="error_message">			
</div>
</td>
</tr>


<tr>
<th>部屋番号<br/>
<div class="description"> 役職を選択してください.
<br/>
</div>
</th>
<td>
    <input type="text" name="room_number" id="" style="ime-mode: active;" value="<?php if(isset($castdata['mapoji'])){echo $castdata['mapoji'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>
<tr>
<th>予約者名<br />
<div class="description"> 担当エリアを選択してください。 <br/>
</div>
</th>
<td>
    <input type="text" name="reserver" id="" style="ime-mode: active;" value="<?php if(isset($castdata['area'])){echo $castdata['area'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>受信日
<div class="description">給与形態を選択してください。</div>
</th>
<td>
    <input type="text" name="receiving_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['salary'])){echo $castdata['salary'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>形状年月日
<div class="description">所在住所を入力してください。</div>
</th>
<td>
    <input type="text" name="appropriating_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['address'])){echo $castdata['address'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>入居日
<div class="description"></div>
</th>
<td>
    <input type="text" name="move_in_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>


<tr>
<th>退出日
<div class="description"></div>
</th>
<td>
    <input type="text" name="leaving_date" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>宿泊代
<div class="description"></div>
</th>
<td>
    <input type="text" name="lodgment_fare" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>手数料
<div class="description"></div>
</th>
<td>
    <input type="text" name="fee" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>ペナルティー
<div class="description"></div>
</th>
<td>
    <input type="text" name="penalty" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>売上高
<div class="description"></div>
</th>
<td>
    <input type="text" name="sales" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>運用手数料
<div class="description"></div>
</th>
<td>
    <input type="text" name="operation_fee" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>委託料
<div class="description"></div>
</th>
<td>
    <input type="text" name="entrustment_fee" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>予約時金額
<div class="description"></div>
</th>
<td>
    <input type="text" name="price_on_reservation" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>TEL
<div class="description"></div>
</th>
<td>
    <input type="text" name="tel" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>

<tr>
<th>MAIL
<div class="description"></div>
</th>
<td>
    <input type="text" name="mail" id="" style="ime-mode: active;" value="<?php if(isset($castdata['banck'])){echo $castdata['banck'];}?>" class="" size="50" />

<div class="error_message">			
</div>
</td>
</tr>




</table>
<div class="submit_confirm">
<input type="submit" name="action-save" value="上記の内容で登録する" />
</div>
<input type="hidden" name="action-confirm" value="confirm">
</form>
</div>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">新規登録</span></a>
</div>
<div id="footer">
<p>Administration</p>
</div>
</body>
</html>


