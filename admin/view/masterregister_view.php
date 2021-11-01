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



<form action="masterregister.php" name="form1" method="post" enctype="multipart/form-data">

<?php if(isset($result)){ ?>
    <?php while ($data = mysqli_fetch_assoc($result)){ ?>
    <table class="wide">
    <tr>
    <th>ID</th>
    <td>
    <div class="error_message"></div>
        <input type="text" name="id" id="" style="ime-mode: active;"
               value="<?php if(isset($data['id'])){ echo $data['id'];}?>" class="" size="50" />
    </td>
    </tr>
    <tr>
    <th>パスワード</th>
    <td>
        <input type="text" name="pass" id="" style="ime-mode: active;"
               value="<?php if(isset($data['pass'])){ echo $data['pass'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>

    <tr>
    <th>氏名</th>
    <td>
        <input type="text" name="name" id="" style="ime-mode: active;"
               value="<?php if(isset($data['name'])){echo $data['name'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>

    <tr>
    <th>権限レベル</th>
    <td>
        <input type="text" name="Lebel" id="" style="ime-mode: active;"
               value="<?php if(isset($data['Lebel'])){echo $data['Lebel'];}?>" class="" size="50" />
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
    <th>ID</th>
    <td>
    <div class="error_message"></div>
        <input type="text" name="id" id="" style="ime-mode: active;"
               value="<?php if(isset($data['id'])){ echo $data['hotel_id'];}?>" class="" size="50" />
    </td>
    </tr>
    <tr>
    <th>パスワード</th>
    <td>
        <input type="text" name="pass" id="" style="ime-mode: active;"
               value="<?php if(isset($data['pass'])){ echo $data['room_num'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>

    <tr>
    <th>氏名</th>
    <td>
        <input type="text" name="name" id="" style="ime-mode: active;"
               value="<?php if(isset($data['name'])){echo $data['max_num'];}?>" class="" size="50" />
    <div class="error_message"></div>
    </td>
    </tr>

    <tr>
    <th>権限レベル</th>
    <td>
        <input type="text" name="authority" id="" style="ime-mode: active;"
               value="<?php if(isset($data['authority'])){echo $data['key_num'];}?>" class="" size="50" />
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
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">新規登録</span></a>
</div>
<div id="footer">
<p>Administration</p>
</div>
</body>
</html>
