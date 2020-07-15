<?php
require_once('db_connect.php');
// セッション開始
session_start();
// $_POSTが空ではない場合
// つまり、ログインボタンが押された場合のみ、下記の処理を実行する
$err = array();
if (!empty($_POST)) {
    // ログイン名が入力されていない場合の処理
    if (empty($_POST["name"])) {
        $err['name'] = "名前が未入力です。";
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["pass"])) {
        $err['pass'] = "パスワードが未入力です。";
    }
    // 両方共入力されている場合
    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        //ログイン名とパスワードのエスケープ処理
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            // 入力された値と引っ張ってきた値が同じか判定しています。
            if (password_verify($pass, $row['password'])) {
                // セッションに値を保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違ってた時の処理
                $err['password'] = "パスワードに誤りがあります。";
            }
        } else {
            //ログイン名がなかった時の処理
            $err['userandpass'] = "ユーザー名かパスワードに誤りがあります。";
        }
    }
}
?>
<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>ログインページ</title>
    </head>
    <body>
    <div class="loginbox">
    <div class="logintitle clearfix">
        <div class="aaa">ログイン画面</div>
        <div class="bbb"><a href="signUp.php">新規ユーザー登録</a></div>
        </div>
        <?php
    echo "<ul>";
    foreach($err as $message){
        echo "<li>"; 
        echo $message;
        echo "</li>"; 
    }
    echo "</ul>";
    ?>
        <form method="post" action="">
            <input type="text" name="name" placeholder="ユーザー名" size="15" class="inputhight" value="<?php if (!empty($_POST['name']) ){ echo $_POST['name']; } ?>"><br>
            <input type="text" name="pass" placeholder="パスワード" size="15" class="inputhight" value="<?php if (!empty($_POST['pass']) ){ echo $_POST['pass']; } ?>"><br>
            <input type="submit" value="ログイン" class="loginsubmit">
        </form>
    </div>
    </body>
</html>