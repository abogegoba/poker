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




<h2 class="category">登録済みお知らせ一覧</h2>

<form name='fm2' action="list.php" method="post" >
<input type="hidden" name="data-sim_id" id="sim_id" value="" />
<input type="hidden" name="action-edit" id="action-edit" value="edit" disabled='disabled' />
<input type="hidden" name="action-pager" id="action-pager" value="pager" disabled='disabled' />
<input type="hidden" name="data-pager_val" id="pager_val" value="" />
<input type="hidden" name="data-pager_cur" id="pager_cur" value="1" />
<div class="content">


    <!--ページネーションstart-->
    
            
    
     
    <!--ページネーションend-->
<table class="type07">
	<thead>
	<tr>
		<th scope="cols">ヴィラージュ月次管理</th>
		<th scope="cols">3月</th>
                <th scope="cols">4月</th>
                <th scope="cols">5月</th>
                <th scope="cols">6月</th>
                <th scope="cols">7月</th>
                <th scope="cols">8月</th>
                <th scope="cols">9月</th>
                <th scope="cols">10月</th>
                <th scope="cols">11月</th>
                <th scope="cols">12月</th>
                <th scope="cols">1月</th>
                <th scope="cols">2月</th>
                
	</tr>
	</thead>
        
	<tbody>
	<tr>
		<th scope="row">稼働率</th>
		<td>内容出力</td>
	</tr>
	<tr>
		<th scope="row">稼働日数</th>
		<td>内容出力</td>
	</tr>
	<tr>
		<th scope="row">平均宿泊単価</th>
		<td>内容出力</td>
	</tr>
	<tr>
		<th scope="row">キャンセル件数</th>
		<td><?php echo $row['num'];?></td>件
	</tr>
	<tr>
		<th scope="row">売上高</th>
		<td>内容出力</td>
	</tr>
	<tr>
		<th scope="row">キャンセル売上高</th>
		<td>内容</td>
	</tr>
	<tr>
		<th scope="row">売上高合計</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">家賃</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">水道光熱費</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">雑費</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">運用代行</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">清掃回数</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">清掃費</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">初期分割費</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">保険料</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">費用合計</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">売上総利益</th>
		<td>内容</td>
	</tr>
        <tr>
		<th scope="row">初期費用合計利益率</th>
		<td>内容</td>
	</tr>
        
        
	</tbody>
        
</table>
 
    
    

<div class="selected_operation">
<input type="submit" name="action" id="" value="入力した項目を保存" />
</div>



</div>
</form>

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


