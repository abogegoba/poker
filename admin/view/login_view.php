
<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration var1.0</title>
        <meta name="Description" content="" />
        <meta name="copyright" content="Copyright &copy; Novartis All rights reserved." />

        <link rel="stylesheet" href="css/common.css" type="text/css" />
        <link rel="stylesheet" href="css/home.css" type="text/css" />

    </head>
<body id="admin_login">

<div id="header">
<h1 id="title">Administration v1.0</h1>
</div>

<div id="content">

<h2 class="category">ログイン</h2>
<div class="content" id="login">
<div class="error_message">
<p><?php if($error == TRUE){?>ログイン情報が正しくありません。 <?php }?></p>
</div>

<form name="form_login" action="login.php" method="post" id="login">
<table id="login">
<tr>
<th>ログインID</th>
<td>
<input type="text" name="login-user_id" size="30" style="height:15" class="login_text" value="">
</td>
</tr>
<tr>
<th>パスワード</th>
<td>
<input type="password" name="login-password" size="30" style="height:15" class="login_text" value="">
</td>
</tr>
</table>
<input type="submit" name="action-value" value="ログイン">
</form>

</div>
</div>
<div id="footer">
<p>Administration v1.0</p>
</div>
<!-- <SCRIPT type="text/javascript" src="http://www31.tracer.jp/VL/Trace?c=bt10215&p=test&tp=1"></SCRIPT>
-->
</body>
</html>
