<!DOCTYPE HTML>
<html >
<head>
<meta charset="UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<title>店舗&nbsp;管理&nbsp;Administration</title>
<meta name="Description" content="" />

<link rel="stylesheet" href="css/common.css" type="text/css" />
<link rel="stylesheet" href="css/home.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
        
        $(document).ready(function(){

                // 全て選択
                $(".select_all").click(function() {
                        $("input[type=checkbox]",".delete_checkbox").attr("checked", true ); //チェックを入れる
                        return false;
                });

                // 全て選択解除
                $(".select_none").click(function() {
                        $("input[type=checkbox]",".delete_checkbox").attr("checked", false); //チェックを外す
                        return false;
                });

                // 削除
                $("#button_delete").click(function() {
                        if (!$(".delete_checkbox:checked").length) return false;
                        return confirm('選択された項目を削除します。よろしいですか？');
                });

               
              

        });
        
        </script>
</head>

<body id="admin_members">
<div id="header">
<h1 id="title">店舗&nbsp;管理&nbsp;Administration</h1>
</div>
<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">ブログ一覧<span></a>
</div>

<div id="content">
<h1 id="content_title">ブログ一覧</h1>


<div class="content">




<h2 class="category">登録済みお知らせ一覧</h2>

<form name='fm2' action="blog_list.php" method="post" >
<input type="hidden" name="data-sim_id" id="sim_id" value="" />
<input type="hidden" name="action-edit" id="action-edit" value="edit" disabled='disabled' />
<input type="hidden" name="action-pager" id="action-pager" value="pager" disabled='disabled' />
<input type="hidden" name="data-pager_val" id="pager_val" value="" />
<input type="hidden" name="data-pager_cur" id="pager_cur" value="1" />
<div class="content">



<div class="select">
[<a href="#" class="select_all">全て選択</a>]
[<a href="#" class="select_none">全て選択解除</a>]
</div>
<table class="wide">
<tr>
<th>投稿者</th>
<th>タイトル</th>
<th>本文</th>
<th>投稿画像</th>
<th>投稿日</th>
<th></th>
<th></th>
</tr>

<?php while ($castdata = mysql_fetch_assoc($result)){?>
<tr>
<td><?php echo $castdata['name'];?></td>
<td><?php echo $castdata['b_title'];?></td>
<td><?php echo $castdata['body'];?></td>

<td class="operation"><?php if(!empty($castdata['b_img'])){?>[<a href="../upimages/blog/<?php echo $castdata['b_img']?>" class="link_edit" >画像</a>]<?php }?></td>

<td><?php echo $castdata['inserttime'];?></td>
<td class="operation">[<a href="blog_edit.php?b_id=<?php echo $castdata['b_id']?>" class="link_edit" ca_id="<?php echo $castdata['b_id']?>">編集</a>]</td>
<td class="operation"><input class="delete_checkbox" type="checkbox" name="check-delete_checkbox[]" value="<?php echo $castdata['b_id']?>" /></td>
</tr>

<?php }?>

</table>
<div class="select">
[<a href="#" class="select_all">全て選択</a>]
[<a href="#" class="select_none">全て選択解除</a>]
</div>
<div class="selected_operation">
<input type="submit" name="action-delete" id="button_delete" value="選択した項目を 削除" />
</div>



</div>
</form>

</div>
</div>

<div id="navigation">
<a href="index.php">ホーム</a> - <a href=""><span id="current_position">ブログ一覧</span></a>
</div>
<div id="footer">
<p>店舗&nbsp;管理&nbsp;Administration</p>
</div>
</body>
</html>


