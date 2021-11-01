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
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">登録者リスト</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">登録者リスト</h1>
            <div class="back_link">
                <a href="index.php">ホームへ戻る</a>
            </div>



            <h2 class="category">登録者リスト</h2>
            <div class="content">

                <form name="formmain" id="formmain" action="member_search.php" method="post">



                <table class="wide">
                    <tr>
                        <th>ID</th>
                        <th>パスワード</th>
                        <th>氏名</th>
                        <th>権限レベル</th>
                        <th class="operation">内容編集</th>
                    </tr>
                    <?php while ($data = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['id'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['pass'];?>
                        </td>

                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['name'];?>
                        </td>
                        <td onmouseover="this.style.backgroundColor='skyblue'"onmouseout="this.style.backgroundColor=''">
                            <?php echo $data['Lebel'];?>
                        </td>

                        <td>
                            [<a href="masterregister.php?id=<?php echo $data['id'];?>">編集</a>]
                        </td>
                    </tr>
                    <?php }?>

                </table>
                </form>


            </div>


        </div>
        <div id="navigation">
            <a href="index.php">ホーム</a> - <a href="#"><span id="current_position">ルームリスト検索</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>


    </body>
</html>
