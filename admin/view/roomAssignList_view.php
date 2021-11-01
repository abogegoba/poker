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

    </head>
    <body id="admin_members">

        <div id="header">
            <h1 id="title">Administration</h1>
        </div>

        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">部屋割り</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">部屋割り</h1>
            <div class="back_link">
                <a href="index.php">ホームへ戻る</a>
            </div>
            
            <table id="main_table-1" class=" main_input" style="">
                <tbody>
                    <tr>
                    <td style="width:132px;" class="td_title main_input_td">部屋</td>
                    
                   <?php $i=0; foreach ($Calendar->days() as $days)  {  foreach ($days as $day) { ?>
                    
                    <td id="date-20171109" align="center" rowspan="1" class="td_title main_input_td" style="width:75px;text-align:center;background-color:#dedede;" title="2017/11/09の部屋割り表を開きます。">
                    <a id="" name="lnkDate" class="" style="display: block;" href="#" value="2017/11/09">
                        
                    <?php echo date('n/j', $day['time']);  echo '<br/>'.$day['weekname']; ?>
                    
                    </a>
                    </td>
                    <?php $i++; if($i > 14){ break;}?>
                   <?php }}?>
                    </tr>
                    
                    
                    <?php while ($listdata = mysql_fetch_assoc($data)){?>
                    <tr>
                        <td id="" style="max-width:132px;width:132px;" class="" title="202 ﾀｲﾌﾟC-3"><?php echo $listdata['room_num'];?> </td>
                        <td id="" name="disp_roomarea" class="" title="予約番号：1753580761_01 利用者氏名：koike ayumi 利用者カナ：ｋｏｉｋｅ　ａｙｕｍｉ 泊数：2/2">
                        <div id="" name="disp_roomarea_name" class="">
                        <span class="overflowtext" style="display:inline-block;max-width:70px;width:70px;">koike ayumi</span><div>1/2</div>
                        </div>
                        </td>
                    </tr>
                   <?php }?>
                    
                    
                    
                     
                </tbody>
            </table>


            <h2 class="category">部屋割り</h2>

            <div class="content">
                <div id="search_details">
                    
                    
                </div>
            </div>

            
        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">部屋割り検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>

  
    </body>
</html>
