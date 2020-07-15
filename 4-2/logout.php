<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>ログアウト</title>
</head>
    <body>
    <div class="logoutbox">
     <div class="logoutTitle">ログアウト画面</div>
    <div>ログアウトしました</div>
    <p>ログイン画面に戻るには→<a href="login.php"><label class="blue">こちら</label></a>をクリック</p>
    </body>
</html>
