<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
    <head>
        <meta http-equiv="content-language" content="ja" />
        
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration</title>
        <meta name="Description" content="" />
        <meta name="copyright" content="Copyright &copy; Novartis All rights reserved." />

        <link rel="stylesheet" href="css/common.css" type="text/css" />

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
    $("#delete_button").click(function() {
        if (!$(".delete_checkbox:checked").length) return false;
        return confirm('選択された項目を削除します。よろしいですか？');
    });

});

</script>
    </head>
    <body id="admin_members">

        <div id="header">
            <h1 id="title">Administration</h1>
        </div>

        <div id="navigation">
            <a href="../home/index.php">ホーム</a> - <a href="#"><span id="current_position">ルームリスト</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">ルームリスト</h1>
            <div class="back_link">
                <a href="../home/index.php">ホームへ戻る</a>
            </div>

            <p><input type="submit" onclick="location.href='./newrr.php'; return false;" value="新規ルーム登録" /></p>

            <h2 class="category">ルームリスト</h2>

            <div class="content">
                <div id="search_details">
                    <form name="searchbox" action="rrlist.php" method="post">
                        <table>
                            <tr>
                                <th>ホテル名検索</th>
                                <td>
                                    <select name="hotelid">
                                    <option value=""> </option>
                                    <option label="12" value="12">(RH2)ヴィラージュ</option>
                                    <option label="13" value="13">(SH)ラハイナ</option>
                                    <option label="14" value="14">(RH5)吉塚</option>
                                    <option label="15" value="15">(RH4)スパジオ</option>
                                    <option label="16" value="16">(RH3)駅南</option>
                                    <option label="17" value="17">(RH7)堅粕</option>
                                    <option label="19" value="19">(MET)メトロポリタン</option>
                                    <option label="20" value="20">(RH8)グランシエロ</option>
                                    <option label="21" value="21">(BIOS)スパジオ2</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="submit"  name="actionsearch"  value="検索"/>
                    </form>
                </div>
            </div>

            <?php if(isset($hotelid)){ ?>
            <h2 class="category">ホテル情報</h2>
            <div class="content">
            
                <form name="formmain" id="formmain" action="member_search.php" method="post">

                <div class="view_num">
                     <?php echo $row;?>件目を表示
                </div>
                
                <table class="wide">
                    <tr>
                        <th>HOTELID</th>
                        <th>ルームNo</th>
                        <th>ルームタイプ名</th>
                        <th>最大収容人数</th>
                        <th>Key暗唱番号</th>
                        <th class="operation">内容編集</th>
                    </tr>
                    <?php while ($data = mysql_fetch_assoc($result)){ ?>
                    <tr>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['hotel_id'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['room_num'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['room_type'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['max_num'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['key_num'];?>
                        </td>
                        
                        <td>
                            [<a href="newrr.php?hid=<?php echo $data['hotel_id'];?>&rnum=<?php echo $data['room_num'];?>">詳細/編集</a>]
                        </td>
                    </tr>
                    <?php }?>
                    
                </table>
                </form>
                
                
            </div>
            
            <?php }?>
        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">ルームリスト検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>

  
    </body>
</html>
