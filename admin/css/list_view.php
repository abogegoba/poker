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




<h2 class="category">購入者情報一覧</h2>

<form name='fm2' action="list.php" method="post" >
<input type="hidden" name="data-sim_id" id="sim_id" value="" />
<input type="hidden" name="action-edit" id="action-edit" value="edit" disabled='disabled' />
<input type="hidden" name="action-pager" id="action-pager" value="pager" disabled='disabled' />
<input type="hidden" name="data-pager_val" id="pager_val" value="" />
<input type="hidden" name="data-pager_cur" id="pager_cur" value="1" />
<div class="content">

<div style="height:100%; width:100%; overflow-y:scroll;">
    <!--ページネーションstart-->

                <h2 class="category">商品購入情報検索</h2>

                <div class="content">
                    <div id="search_details">
                        <form name="searchbox" action="purchase_list.php" method="post">
                            <table>
                                <tr>
                                    <th>購入ID</th>
                                    <td>
                                        <input type="text" name="reservid" value="" size="20" />
                                        <div class="error_message">
                                            <p></p>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <th>商品名検索</th>
                                    <td>
                                        <select name="hotelid">
                                        <option value=""> </option>
                                        <option label="アクリルUVプリント" value="12">アクリルUVプリント</option>
                                        <option label="キャンパスフォトプリント" value="13">キャンパスフォトプリント</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ステータス検索</th>
                                    <td>
                                        <select name="hotelid">
                                        <option value=""> </option>
                                        <option label="注文" value="注文">注文</option>
                                        <option label="デザイン確認済み" value="デザイン確認済み">デザイン確認済み</option>
                                        <option label="作成中" value="作成中">作成中</option>
                                        <option label="発送済み" value="発送済み">発送済み</option>
                                        <option label="クレーム品" value="クレーム品">クレーム品</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>購入者氏名</th>
                                    <td>
                                        <input type="text" name="family_name" value="" size="20" />
                                    </td>
                                </tr>


                            </table>
                            <input type="submit"  name="actionsearch"  value="検索"/>
                        </form>
                    </div>
                </div>

<form action="list.php" name="linkform" method="post">

     <font class='vintage'><?php echo $row?> 件</font>
    <!--ページネーションend-->
<table class="wide">
    <thead class="scrollHead">
        <tr>
          <th>管理No</th>
          <th>注文日</th>
          <th>お名前</th>

          <th>商品名</th>
          <th>商品タイプ</th>
          <th>オプション</th>
          <th>オプション料金</th>
          <th>合計料金</th>

          <th>購入商品データ</th>
          <th>商品ステータス</th>
          <th>支払いステータス</th>
          <th></th>
        </tr>
    </thead>
<?php while ($listdata = mysqli_fetch_assoc($result)){?>
    <tbody class="scrollBody">
        <tr>
            <td><?php echo $listdata['customer_management_no'];?></td>
            <td><?php echo $listdata['customer_buy_date'];?></td>
            <td><?php echo $listdata['customer_name'];?></td>
            <td>アクリルフォト</td>
            <td><?php echo $listdata['itemki'];?></td>
            <td><?php echo $listdata['optionit'];?></td>
            <td><?php echo $listdata['option_fee'];?></td>
            <td><?php echo $listdata['totalfee'];?></td>

            <td>
              <a href="gazo.php?key=<?php echo $listdata['customer_purchase_products_id'];?>&id=<?php echo $listdata['customer_management_no'];?>"><img src="../create/uploadscrop/<?php echo $listdata['customer_purchase_products_data'];?>" style="width:50px"></a>
            </td>
            <td>
            <select name="hotelid[]">
            <option label="<?php echo $listdata['customer_status'];?>" value="<?php echo $listdata['customer_status'];?>"selected><?php echo $listdata['customer_status'];?></option>
            <option label="注文" value="注文" >注文</option>
            <option label="デザイン確認済み" value="デザイン確認済み">デザイン確認済み</option>
            <option label="作成中" value="作成中">作成中</option>
            <option label="発送済み" value="発送済み">発送済み</option>
            <option label="クレーム品" value="クレーム品">クレーム品</option>
            </select>
          　</td>
            <td>
            <select name="stha[]">
            <option label="<?php echo $listdata['feest'];?>" value="<?php echo $listdata['feest'];?>"selected><?php echo $listdata['feest'];?></option>
            <option label="クレカ支払い済み" value="クレカ支払い済み" >クレカ支払い済み</option>
            <option label="振込支払いまち" value="振込支払いまち">振込支払いまち</option>
            <option label="振込支払済み" value="振込支払済み">振込支払済み</option>
            </select>
          　</td>
          <td>
            <a href="purchase_list.php?key=<?php echo $listdata['customer_purchase_products_id'];?>">詳細情報</a>
          </td>
        </tr>
    </tbody>
<?php }?>

</table>
 </div>


<input type="hidden" name="update" value="update">
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
