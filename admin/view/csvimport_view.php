<!DOCTYPE >

    <head>
        <meta http-equiv="content-language" content="ja" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <title>Administration</title>
        <meta name="Description" content="" />
        <meta name="copyright" content="Copyright &copy; CIBA VISION All rights reserved." />

        <link rel="stylesheet" href="css/common.css" type="text/css" />
    </head>


    <body id="clinic_members"   onload="init()" >

        <div id="header">
            <h1 id="title">Administration</h1>
        </div>

        <div id="navigation">
            <a href="../home/item.php">ホーム</a> - <a href="./clinic_member_import.php"><span id="current_position">list一括登録</span></a>
        </div>

        <div id="content">
            <h1 id="content_title">List一括登録</h1>
            <div class="back_link">
                <a href="../home/item.php">ホームへ戻る</a>
            </div>
            
            <h2 class="category">CSVファイルのインポート</h2>
            CSVファイル(.csv)を選択して、「インポート実行」をクリックしてください。<br /><br />
            <?php if(isset($errflg)){echo $import_error;}?><br>
            <div class="content">
				
                <form action="csvimport.php"  name="mainform" method="post" enctype="multipart/form-data" id="niceform">
					<input type="hidden" name="msg_flg" value="0" />
                    <table>
                        <tr>
                            <th>CSVファイル</th>
                            <td>
				<input type="hidden" name="file_name-csv" value="" />
                                <input type="file" name="file-csv" size="50">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" id="submit_button" name="action-import" value="インポート実行" class="important_button" />
					<input type="hidden" name="import_error" value="">
					<input type="hidden" name="entry_cnt" value="">
					<input type="hidden" name="error_cnt" value="">
					<input type="hidden" name="error_row" value="">
                </form>
            </div>
             
        </div>
        <div id="navigation">
            <a href="../home/item.php">ホーム</a> - <a href="./clinic_member_import.php"><span id="current_position">List一括登録</span></a>
        </div>
        <div id="footer">
            <p>Administration</p>
        </div>
    </body>
</html>