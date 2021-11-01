<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
    <head>
        <meta http-equiv="content-language" content="ja" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration</title>
        <meta name="Description" content="" /> 
        <link rel="stylesheet" href="css/common.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </head>
    <body id="admin_members">

        <div id="header">
            <h1 id="title">Administration</h1>
        </div>

        <div id="navigation">
            <a href="../home/item.php">ホーム</a> - <a href="#"><span id="current_position">抽出</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">抽出</h1>
            <div class="back_link">
                <a href="../home/item.php">ホームへ戻る</a>
            </div>

            <h2 class="category">抽出</h2>

            <div class="content">
                <div id="search_details">
                    <form name="searchbox" action="list.php" method="post">
                        <table>
                            <tr>
                                <th>日付洗濯</th>
                                <td>
                                    <input type="text" size="4" name="checkoutday_yyyy" id="" value="" class="">年
                                    <select name="checkoutday_mm">
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
                                    <select name="checkoutday_dd">
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
                        <input type="submit"  name="actionsearch"  value="吐き出し"/>
                    </form>
                </div>
            </div>
        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">抽出検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>

  
    </body>
</html>
