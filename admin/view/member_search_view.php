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
            <a href="../home/index.php">ホーム</a> - <a href="#"><span id="current_position">予約検索</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">予約検索</h1>
            <div class="back_link">
                <a href="../home/index.php">ホームへ戻る</a>
            </div>

            <p><input type="submit" onclick="location.href='./member_register.php'; return false;" value="新規予約登録" /></p>

            <h2 class="category">予約検索</h2>

            <div class="content">
                <div id="search_details">
                    <form name="searchbox" action="member_search.php" method="post">
                        <table>
                            <tr>
                                <th>予約ID</th>
                                <td>
                                    <input type="text" name="reservid" value="" size="20" />
                                    <div class="error_message">
                                        <p></p>
                                    </div>

                                </td>
                            </tr>
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
                            <tr>
                                <th>予約サイト(完全一致)</th>
                                <td>
                                    <select name="ota">
                                        <option value=""> </option>
                                        <option label="01" value="1">BOOKING/COM</option>
                                        <option label="02" value="2">02</option>
                                        <option label="03" value="3">03</option>
                                        <option label="04" value="4">04</option>
                                        <option label="05" value="5">05</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>氏名</th>
                                <td>
                                    姓：<input type="text" name="family_name" value="" size="20" /><br />
                                    名：<input type="text" name="first_name" value="" size="20" />
                                </td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><input type="text" name="mailaddress" id="" value="" class="" size="50" /></td>
                            </tr>                                                        
                            
                            <tr>
                                <th>予約日</th>
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
                            <tr>
                                <th>チェックイン日</th>
                                <td>
                                    <input type="text" size="4" name="checkinday_yyyy" id="" value="" class="">年
                                    <select name="checkinday_mm">
                                        <option value=""> </option>
                                        <option label="01" value="01">01</option>
                                        <option label="02" value="02">02</option>
                                        <option label="03" value="03">03</option>
                                        <option label="04" value="04">04</option>
                                        <option label="05" value="05">05</option>
                                        <option label="06" value="06">06</option>
                                        <option label="07" value="07">07</option>
                                        <option label="08" value="08">08</option>
                                        <option label="09" value="09">09</option>
                                        <option label="10" value="10">10</option>
                                        <option label="11" value="11">11</option>
                                        <option label="12" value="12">12</option>

                                    </select>月
                                    <select name="checkinday_dd">
                                        <option value=""> </option>
                                        <option label="01" value="01">01</option>
                                        <option label="02" value="02">02</option>
                                        <option label="03" value="03">03</option>
                                        <option label="04" value="04">04</option>
                                        <option label="05" value="05">05</option>
                                        <option label="06" value="06">06</option>
                                        <option label="07" value="07">07</option>
                                        <option label="08" value="08">08</option>
                                        <option label="09" value="09">09</option>
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
                    </form>
                </div>
            </div>

            <?php if(isset($inputdata)){ ?>
            <h2 class="category">予約者情報</h2>
            <div class="content">
            
                <form name="formmain" id="formmain" action="member_search.php" method="post">

                <div class="view_num">
                     <?php echo $row;?>件目を表示
                </div>
                
                <table class="wide">
                    <tr>
                        <th>予約ID</th>
                        <th>ホテルID</th>
                        <th>予約サイト</th>
                        <th>氏名</th>
                        <th>予約日</th>
                        <th>チェックイン日</th>
                        <th>人数</th>
                        <th>宿泊代金</th>
                        <th>案内メール</th>
                        <th class="operation">内容編集</th>
                    </tr>
                    <?php while ($data = mysql_fetch_assoc($result)){ ?>
                    <tr>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['reservid'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['h_id'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['reservation_sight_name'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['designation'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['application_date'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['check_in_date'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['beat_number'];?>人
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['charge_sum'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php if($data['hoge'] == TRUE){echo '送信済み';}else{echo '未送信';}?>
                        </td>
                        <td class="operation" onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            [<a href="details.php?key=edit">詳細</a>]
                        </td>
                    </tr>
                    <?php }?>
                    
                </table>
                </form>
                
                <table style="border: none;">
                    <tr>
                        <td style="border: none;">
                            <form action="./mailmagazine/mail_type_select.php" method="post">
                            <input type="hidden" name="ml-m_id" value="" />
                            <input type="hidden" name="ml-mailaddress" value="" />
                            <input type="hidden" name="ml-storeid" value="" />

                            <input type="hidden" name="ml-family_name" value="" />
                            <input type="hidden" name="ml-first_name" value="" />
                            <input type="hidden" name="ml-sex_code" value="0" />
                                                        <input type="hidden" name="ml-birth_mm" value="" />
                            <input type="hidden" name="ml-cibav_purchase_num_from" value="" />
                            <input type="hidden" name="ml-cibav_purchase_num_to" value="" />

                            <input type="hidden" name="ml-purchasepoints_from" value="" />
                            <input type="hidden" name="ml-purchasepoints_to" value="" />
                            
                            <input type="hidden" name="ml-eyepoints_from" value="" />
                            <input type="hidden" name="ml-eyepoints_to" value="" />

                            <input type="hidden" name="ml-insert_time_from_yyyy" value="" />
                            <input type="hidden" name="ml-insert_time_from_mm" value="" />
                            <input type="hidden" name="ml-insert_time_from_dd" value="" />
                            <input type="hidden" name="ml-insert_time_to_yyyy" value="" />
                            <input type="hidden" name="ml-insert_time_to_mm" value="" />
                            <input type="hidden" name="ml-insert_time_to_dd" value="" />
                            <input type="hidden" name="ml-clm_type" value="0" />
                            
                            <input type="submit"   name="action-mail_input" value="検索結果にメールを配信する" class="" />
                            </form>
                        </td>
                    </tr>
                </table>
                
            </div>
            
            <?php }?>
        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">予約検索検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>

  
    </body>
</html>
