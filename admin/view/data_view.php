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
    <script>
        $(function(){
 
    //個別印刷ボタンをクリックした時
   $('.print-btn').on('click', function(){
     //プリントしたいエリアの取得
     var printPage = $(this).closest('.print-page').html();
 
        //プリント用の要素「#print」を作成
       $('body').append('<div id="print"></div>');
       $('#print').append(printPage);
 
        //「#print」以外の要素に非表示用のclass「print-off」を指定
        $('body > :not(#print)').addClass('print-off');
      window.print();
 
     //window.print()の実行後、作成した「#print」と、非表示用のclass「print-off」を削除
     $('#print').remove();
     $('.print-off').removeClass('print-off');
   });
 
 //一括印刷ボタンをクリックした時
   $('.print-all').on('click', function(){
     window.print();
 });
 
});
        </script>
        
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
<?php echo $insertday;?>
potntial ADR ・・・ ¥12,000
<div class="error_message">			
<p></p>
</div>
<div class="content">

    <div class="wrapper">
<div class="print-page">
<div class="area">

<table class="sample_04">
<tbody>
<tr>
    <th>項目</th>
<th>17年&#xA0;4月</th>
<th>17年&#xA0;5月</th>
<th>17年&#xA0;6月</th>
<th>17年&#xA0;7月</th>
<th>17年&#xA0;8月</th>
<th>17年&#xA0;9月</th>
<th>17年&#xA0;10月</th>
<th>17年&#xA0;11月</th>
<th>17年&#xA0;12月</th>
<th>18年&#xA0;1月</th>
<th>18年&#xA0;2月</th>
<th>18年&#xA0;3月</th>


</tr>

<tr>
    <td>稼働日数</td>
<td><?php echo $sum[4]['kadonisu'];?></td>
<td><?php echo $sum[5]['kadonisu'];?></td>
<td><?php echo $sum[6]['kadonisu'];?></td>
<td><?php echo $sum[7]['kadonisu'];?></td>
<td><?php echo $sum[8]['kadonisu'];?></td>
<td><?php echo $sum[9]['kadonisu'];?></td>
<td><?php echo $sum[10]['kadonisu'];?></td>
<td><?php echo $sum[11]['kadonisu'];?></td>
<td><?php echo $sum[12]['kadonisu'];?></td>
<td><?php echo $sum[1]['kadonisu'];?></td>
<td><?php echo $sum[2]['kadonisu'];?></td>
<td><?php echo $sum[3]['kadonisu'];?></td>

</tr>


<tr>
    <td>売上</td>
<td>¥&#xA0;<?php echo $sum[4]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[5]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[6]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[7]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[8]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[9]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[10]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[11]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[12]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[1]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[2]['rieki'];?></td>
<td>¥&#xA0;<?php echo $sum[3]['rieki'];?></td>
</tr>

<tr>
    <td>予約数</td>
<td><?php echo $sum[4]['yoyakuken'];?></td>
<td><?php echo $sum[5]['yoyakuken'];?></td>
<td><?php echo $sum[6]['yoyakuken'];?></td>
<td><?php echo $sum[7]['yoyakuken'];?></td>
<td><?php echo $sum[8]['yoyakuken'];?></td>
<td><?php echo $sum[9]['yoyakuken'];?></td>
<td><?php echo $sum[10]['yoyakuken'];?></td>
<td><?php echo $sum[11]['yoyakuken'];?></td>
<td><?php echo $sum[12]['yoyakuken'];?></td>
<td><?php echo $sum[1]['yoyakuken'];?></td>
<td><?php echo $sum[2]['yoyakuken'];?></td>
<td><?php echo $sum[3]['yoyakuken'];?></td>
</tr>

<tr>
    <td>キャンセル</td>
<td><?php echo $sum[4]['kyansel'];?></td>
<td><?php echo $sum[5]['kyansel'];?></td>
<td><?php echo $sum[6]['kyansel'];?></td>
<td><?php echo $sum[7]['kyansel'];?></td>
<td><?php echo $sum[8]['kyansel'];?></td>
<td><?php echo $sum[9]['kyansel'];?></td>
<td><?php echo $sum[10]['kyansel'];?></td>
<td><?php echo $sum[11]['kyansel'];?></td>
<td><?php echo $sum[12]['kyansel'];?></td>
<td><?php echo $sum[1]['kyansel'];?></td>
<td><?php echo $sum[2]['kyansel'];?></td>
<td><?php echo $sum[3]['kyansel'];?></td>
</tr>

<tr>
    <td>稼働率</td>
<td><?php echo $sum[4]['kadoritu'];?>%</td>
<td><?php echo $sum[5]['kadoritu'];?>%</td>
<td><?php echo $sum[6]['kadoritu'];?>%</td>
<td><?php echo $sum[7]['kadoritu'];?>%</td>
<td><?php echo $sum[8]['kadoritu'];?>%</td>
<td><?php echo $sum[9]['kadoritu'];?>%</td>
<td><?php echo $sum[10]['kadoritu'];?>%</td>
<td><?php echo $sum[11]['kadoritu'];?>%</td>
<td><?php echo $sum[12]['kadoritu'];?>%</td>
<td><?php echo $sum[1]['kadoritu'];?>%</td>
<td><?php echo $sum[2]['kadoritu'];?>%</td>
<td><?php echo $sum[3]['kadoritu'];?>%</td>

</tr>

<tr>
    <td>ADR</td>
<td>¥&#xA0;<?php echo $sum[4]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[5]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[6]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[7]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[8]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[9]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[10]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[11]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[12]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[1]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[2]['adr'];?></td>
<td>¥&#xA0;<?php echo $sum[3]['adr'];?></td>

</tr>
<!--<tr>
    <td>Rate Yield</td>
<td><?php echo $sum[4]['ry'];?>%</td>
<td><?php echo $sum[5]['ry'];?>%</td>
<td><?php echo $sum[6]['ry'];?>%</td>
<td><?php echo $sum[7]['ry'];?>%</td>
<td><?php echo $sum[8]['ry'];?>%</td>
<td><?php echo $sum[9]['ry'];?>%</td>
<td><?php echo $sum[10]['ry'];?>%</td>
<td><?php echo $sum[11]['ry'];?>%</td>
<td><?php echo $sum[12]['ry'];?>%</td>
<td><?php echo $sum[1]['ry'];?>%</td>
<td><?php echo $sum[2]['ry'];?>%</td>
<td><?php echo $sum[3]['ry'];?>%</td>

</tr>

<tr>
    <td>Rev PAR</td>
<td><?php echo $sum[4]['rp'];?></td>
<td><?php echo $sum[5]['rp'];?></td>
<td><?php echo $sum[6]['rp'];?></td>
<td><?php echo $sum[7]['rp'];?></td>
<td><?php echo $sum[8]['rp'];?></td>
<td><?php echo $sum[9]['rp'];?></td>
<td><?php echo $sum[10]['rp'];?></td>
<td><?php echo $sum[11]['rp'];?></td>
<td><?php echo $sum[12]['rp'];?></td>
<td><?php echo $sum[1]['rp'];?></td>
<td><?php echo $sum[2]['rp'];?></td>
<td><?php echo $sum[3]['rp'];?></td>

</tr>-->


</tbody>
</table>
<div class="print-btn">印刷</div>
</div>
</div>

</div>
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
                    <a href="data.php?key=19">■メトロポリタン</a>
                    <a href="data.php?key=101">■旅籠</a>
                    <a href="data.php?key=102">■旅籠プライベート</a>
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


