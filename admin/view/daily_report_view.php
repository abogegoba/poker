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
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
             
<script src="js/jquery.handsontable.full.js"></script>
<link rel="stylesheet" media="screen" href="css/jquery.handsontable.full.css">

</script>


    </head>
    <body id="admin_members">

        <div id="header">
            <h1 id="title">Administration</h1>
        </div>

        <div id="example1"></div>
        <script>
        $("#example1").handsontable({
  
        contextMenu: {
            items: {
                'row_above': {name: '１行挿入(上)'},
                'row_below': {name: '１行挿入(下)'},
                'hsep1': '---------',
                'col_left':  {name: '１列挿入(左)'},
                'col_right': {name: '１列挿入(右)'},
                'hsep2': '---------',
                'remove_row': {name: '行削除'},
                'remove_col': {name: '列削除'},
                'hsep3': '---------',
                'undo': {name: '戻る'},
                'redo': {name: '進む'},
                'hsep4': '---------',
                'make_read_only': {name: '読み取り専用'},
                'alignment': {name: '文字'}
            }

        },
        colWidths: 100,
        rowHeaders: true,
        colHeaders: true,
        fixedRowsTop: 2,
        fixedColumnsLeft: 2,
        fillHandle: true, //possible values: true, false, "horizontal", "vertical"
        afterChange: function (change, source) {
            // 初回アクセス時
            if (source === 'loadData') {
                return;
            }            
            // データに変更があった場合
            if (change[0][2] != change[0][3]) {
                alert("こんにちは");
                // 変更データを格納
                var data = {
                    'row' : change[0][0],
                    'col' : change[0][1],
                    'data': change[0][3]
                }
                $.ajax({
                    url: "daily_report.php",
                    method: "POST",
                    data: data
                }).done(function (data) {
                    alert("こんにちは");
                }).fail(function(jqXHR, textStatus, errorThrown){
                    /* 失敗処理 */
                    alert("失敗");
                });
            }
        }

        });
    
        var data = [
        ["バージョン", "コードネーム", "リリース", "パッケージ数", "コードネーム", "リリース", "パッケージ数", "コードネーム", "リリース", "パッケージ数", "パッケージ数", "コードネーム", "リリース", "パッケージ数", "パッケージ数", "コードネーム", "リリース", "パッケージ数"],
        [1.1, "buzz", 1996, 474, "buzz", 1996, 474, "buzz", 1996, 474],
        [1.2, "rex", 1996, 848, "buzz", 1996, 474, "buzz", 1996, 474],
        [1.3, "bo", 1997, 974, "buzz", 1996, 474, "buzz", 1996, 474],
        [2.0, "hamm", 1998, 1500, "buzz", 1996, 474, "buzz", 1996, 474],
        [2.1, "slink", 1999, 2250, "buzz", 1996, 474, "buzz", 1996, 474],
        [2.2, "potato", 2000, 3900, "buzz", 1996, 474, "buzz", 1996, 474],
        [3.0, "woody", 2002, 8500, "buzz", 1996, 474, "buzz", 1996, 474],
        [3.1, "sarge", 2005, 15400, "buzz", 1996, 474, "buzz", 1996, 474],
        [4.0, "etch", 2007, 18000, "buzz", 1996, 474, "buzz", 1996, 474],
        [5.0, "lenny", 2009, 28000, "buzz", 1996, 474, "buzz", 1996, 474],
        [6.0, "squeeze", 2011, 29000, "buzz", 1996, 474, "buzz", 1996, 474],
        [7.0, "wheezy", "2013予定", ""]
        ];

        $("#example1").handsontable("loadData", data);
        
        
        </script>

    </body>
</html>
