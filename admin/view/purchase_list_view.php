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
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">予約検索</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">商品購入情報検索</h1>
            <div class="back_link">
                <a href="index.php">ホームへ戻る</a>
            </div>



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
                                    <option label="12" value="12">アクリルUVプリント</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>ステータス検索</th>
                                <td>
                                    <select name="hotelid">
                                    <option value=""> </option>
                                    <option label="12" value="注文">注文</option>
                                    <option label="13" value="13">デザイン確認済み</option>
                                    <option label="13" value="13">作成中</option>
                                    <option label="13" value="13">発送済み</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>購入者氏名</th>
                                <td>
                                    <input type="text" name="family_name" value="" size="20" /><br />
                                </td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><input type="text" name="mailaddress" id="" value="" class="" size="50" /></td>
                            </tr>

                            <tr>
                                <th>購入日</th>
                                <td>
                                    <input type="text" size="4" name="reserv_time_yyyy" id="" value="" class="">年
                                    <select name="reserv_time_mm">
                                        <option value=""> </option>
                                        <option label="01" value="1">01</option>
                                        <option label="02" value="2">02</option>
                                        <option label="03" value="3">03</option>
                                        <option label="04" value="4">04</option>
                                        <option label="05" value="5">05</option>
                                        <option label="06" value="6">06</option>
                                        <option label="07" value="7">07</option>
                                        <option label="08" value="8">08</option>
                                        <option label="09" value="9">09</option>
                                        <option label="10" value="10">10</option>
                                        <option label="11" value="11">11</option>
                                        <option label="12" value="12">12</option>

                                    </select>月
                                    <select name="reserv_time_dd">
                                        <option value=""> </option>
                                        <option label="01" value="1">01</option>
                                        <option label="02" value="2">02</option>
                                        <option label="03" value="3">03</option>
                                        <option label="04" value="4">04</option>
                                        <option label="05" value="5">05</option>
                                        <option label="06" value="6">06</option>
                                        <option label="07" value="7">07</option>
                                        <option label="08" value="8">08</option>
                                        <option label="09" value="9">09</option>
                                        <option label="10" value="10">10</option>
                                        <option label="11" value="11">11</option>
                                        <option label="12" value="12">12</option>
                                        <option label="13" value="13">13</option>
                                        <option label="14" value="14">14</option>
                                        <option label="15" value="15">15</option>
                                        <option label="16" value="16">16</option>
                                        <option label="17" value="17">17</option>
                                        <option label="18" value="18">18</option>
                                        <option label="19" value="19">19</option>
                                        <option label="20" value="20">20</option>
                                        <option label="21" value="21">21</option>
                                        <option label="22" value="22">22</option>
                                        <option label="23" value="23">23</option>
                                        <option label="24" value="24">24</option>
                                        <option label="25" value="25">25</option>
                                        <option label="26" value="26">26</option>
                                        <option label="27" value="27">27</option>
                                        <option label="28" value="28">28</option>
                                        <option label="29" value="29">29</option>
                                        <option label="30" value="30">30</option>
                                        <option label="31" value="31">31</option>
                                    </select>日


                                    <div class="error_message">
                                        <p></p>
                                    </div>
                                 </td>
                            </tr>

                            
                        </table>
                        <input type="submit"  name="actionsearch"  value="検索"/>
                        <input type="hidden" name="searchbox">
                    </form>
                </div>
            </div>

            <?php if(isset($result)){ ?>
            <h2 class="category">購入者情報</h2>
            <div class="content">

                <form name="formmain" id="formmain" action="member_search.php" method="post">

                <div class="view_num">
                     <?php echo $row;?>件を表示
                </div>

                <table class="wide">
                    <thead class="scrollHead">
                        <tr>
                        <th>管理No</th>
                        <th>注文日</th>
                        <th>お名前</th>
                        <th>郵便番号</th>
                        <th>住所</th>
                        <th>メールアドレス</th>
                        <th>電話番号</th>
                        <th>購入商品ID</th>
                        <th>購入商品データ</th>
                        <th>ステータス</th>
                        <th>ステータス更新日時</th>
                        </tr>
                    </thead>
                <?php while ($listdata = mysqli_fetch_assoc($result)){?>
                    <tbody class="scrollBody">
                        <tr>
                            <td><?php echo $listdata['customer_management_no'];?></td>
                            <td><?php echo $listdata['customer_buy_date'];?></td>
                            <td><?php echo $listdata['customer_name'];?></td>
                            <td><?php echo $listdata['customer_postal_code'];?></td>
                            <td><?php echo $listdata['customer_address'];?></td>
                            <td><?php echo $listdata['customer_email_address'];?></td>
                            <td><?php echo $listdata['customer_phone_number'];?></td>
                            <td><?php echo $listdata['customer_management_no'];?></td>
                            <td><?php echo $listdata['customer_purchase_products_data'];?></td>
                            <td><?php echo $listdata['customer_status'];?></td>
                            <td><?php echo $listdata['customer_status_update'];?></td>
                        </tr>
                    </tbody>
                <?php }?>

                </table>
                </form>



            </div>

            <?php }?>
        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">購入者検索検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>


    </body>
</html>
