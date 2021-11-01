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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery-ui-i18n.min.js"></script>

    </head>
    
        
<body id="admin_members">
<div id="header">
<h1 id="title">Administration</h1>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">稼働データ</span></a>
</div>

<div id="content">
<h1 id="content_title"><?php echo $name;?>稼働データ</h1>
<div class="back_link">
<a href="index.php">ホームへ戻る</a>
</div>
<h2 class="category">新規登録</h2>

<a href=<?php echo '\"{'.$auth_url.'}\"'?>>認証してテストメールを送信</a>
<div class="error_message">			
<p></p>
</div>

    

<div class="content">
                <dl class="topmenu">
                    <a href="index.php">■TOP</a>&#xA0;
                    <a href="data.php?key=1">■本部</a>	&#xA0;
                    <a href="data.php?key=11">■オブリ</a>	&#xA0;
                    <a href="data.php?key=12">■ヴィラージュ</a>&#xA0;
                    <a href="data.php?key=13">■ラハイナ</a>&#xA0;
                    <a href="data.php?key=14">■吉塚</a>&#xA0;
                    <a href="data.php?key=15">■スパジオ</a>&#xA0;
                    <a href="data.php?key=16">■駅南</a>&#xA0; 
                    <a href="data.php?key=17">■堅粕</a>
                    <a href="data.php?key=101">■旅籠</a>
                </dl>
        </div>



  


</div>


<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">稼働データ</span></a>
</div>
<div id="footer">
<p>Administration</p>
</div>
</body>
    <script type="text/javascript">
$(function(){
　$("#datepicker").datepicker({;
　　numberOfMonths: 1,
　　showButtonPanel: true
　});
});
</script>
</html>


