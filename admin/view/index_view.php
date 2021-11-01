
<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration v1.0</title>
        <meta name="Description" content="" />

        <link rel="stylesheet" href="css/common.css" type="text/css" />
        <link rel="stylesheet" href="css/home.css" type="text/css" />
    </head>
    <body id="admin_top">

        <div id="header">
            <h1 id="title">Administration v1.0</h1>
        </div>

        <div id="content">
            <dl>
                <dt><a href="login.php" id="logout">■ログアウト</a></dt>
                <dd>
                    ログアウトしてブラウザを閉じます。<br>
                        操作終了時は、必ずログアウトしてください。
                </dd>
            </dl>

        <h2 class="category">権限登録</h2>

        <div class="content">
                <dl class="topmenu">
                    <dt><a href="masterlist.php">■権限一覧</a></dt>
                    <dd>
                        アクセス一覧を権限別に表示します。
                    </dd>

                    <dt><a href="masterregister.php">■権限登録</a></dt>
                    <dd>
                        新規でアクセス権限を付与できます。
                    </dd>
                </dl>
        </div>





        <h2 class="category">顧客管理</h2>
        <div class="content">
                <dl class="topmenu">

                    <dt><a href="purchase_list.php">■注文情報一覧</a></dt>
                    <dd>
                        顧客一覧を表示します。
                    </dd>

                    <dt><a href="list.php">■商品ステータス管理</a></dt>
                    <dd>
                        商品の準備状況の管理ができます。
                    </dd>


                </dl>
        </div>

        

        <!-- <h2 class="category">入金状況確認</h2>
        <div class="content">
                <dl class="topmenu">

                    <dt><a href="list.php">■入金</a></dt>
                    <dd>
                        商品ごとの入金ステータスが確認できます。
                    </dd>


                </dl>
        </div> -->

        <h2 class="category">新商品登録</h2>
        <div class="content">
                <dl class="topmenu">

                    <dt><a href="list.php">■商品登録</a></dt>
                    <dd>
                        開発中(フェーズ2)
                    </dd>


                </dl>
        </div>

        </div>
        <div id="footer">
            <p>Administration v1.0</p>
        </div>
    </body>
</html>
