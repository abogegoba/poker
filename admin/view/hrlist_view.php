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
                    <form name="searchbox" action="hrlist.php" method="post">
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
            
                <form action="newhr.php" name="form1" method="post" enctype="multipart/form-data">
                <?php while ($data = mysql_fetch_assoc($result)){ ?>
                <table class="wide">

                <tr>
                <th>HOTELID</th>
                <td>
                <div class="error_message"></div>
                    <input type="text" name="hotel_id" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['hotel_id'])){ echo $data['hotel_id'];}?>" class="" size="50" />
                </td>
                </tr>

                <tr>
                <th>HOTEl名</th>
                <td>
                    <input type="text" name="hotel_name" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['hotel_name'])){ echo $data['hotel_name'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>

                <tr>
                <th>物件名</th>
                <td>
                    <input type="text" name="property_name" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['property_name'])){echo $data['property_name'];}?>" class="" size="50"/>
                <div class="error_message"></div>
                </td>
                </tr>


                <tr>
                <th>通称</th>
                <td>
                    <input type="text" name="alias" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['alias'])){echo $data['alias'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>

                <tr>
                <th>駐車場数</th>
                <td>
                    <input type="text" name="parkings" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['parkings'])){echo $data['parkings'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>


                <tr>
                <th>階数</th>
                <td>
                    <input type="text" name="ranks" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['ranks'])){echo $data['ranks'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>



                <tr>
                <th>フロアー部屋数</th>
                <td>
                    <input type="text" name="floor_rooms" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['floor_rooms'])){echo $data['floor_rooms'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>


                <tr>
                <th>郵便番号</th>
                <td>
                <input type="text" name="postal_code" id="" style="ime-mode: active;" 
                       value="<?php if(isset($data['postal_code'])){echo $data['postal_code'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>

                <tr>
                <th>住所</th>
                <td>
                    <input type="text" name="address" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['address'])){echo $data['address'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>

                <tr>
                <th>最大収容人数</th>
                <td>
                    <input type="text" name="max_count" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['max_count'])){echo $data['max_count'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>

                <tr>
                <th>担当者</th>
                <td>
                    <input type="text" name="rep_name" id="" style="ime-mode: active;" 
                           value="<?php if(isset($data['rep_name'])){echo $data['rep_name'];}?>" class="" size="50" />
                <div class="error_message"></div>
                </td>
                </tr>


                </table>
                <?php }?>
                <div class="submit_confirm">
                <input type="submit" name="edit" value="上記の内容で編集する。" />
                </div>
                


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
