<?php
// db_connect.phpの読み込み
require_once("db_connect.php");
// function.phpの読み込み
require_once("function.php");
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// 提出ボタンが押された場合
$err = array();
if (isset($_POST["post"])) {
    if (empty($_POST["title"])) {
        $err['title'] =  "タイトルが未入力です。<br>";
     }
        
    if (empty($_POST["date"])) {
        $err['date'] = "日付が未入力です。<br>";
    }
    if (empty($_POST["stock"])){
        $err['stock'] = "在庫数が未入力です<br>";
    }
    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitleとcontentを格納
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);
        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date,stock) VALUES (:title, :date, :stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 本文をバインド
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="registerbox">
    <div class="aaa">本 登録画面</div>
    <div class="clearfix"></div>
    <?php
    echo "<ul>";
    foreach($err as $message){
        echo "<li>"; 
        echo $message;
        echo "</li>"; 
    }
    echo "</ul>";
    ?>
    <form method="POST" action="">
        <input type="text" name="title" id="title" placeholder="タイトル" class="inputhight" value="<?php if (!empty($_POST['title']) ){ echo $_POST['title']; } ?>">
        <br>
        <input type="text" name="date" id="date" placeholder="発売日" class="inputhight" value="<?php if (!empty($_POST['date']) ){ echo $_POST['date']; } ?>"><br>
        <p>在庫数</p>
        <select name="stock" class="inputhight select" value="<?php if (!empty($_POST['stock']) ){ echo $_POST['stock']; } ?>">
        <option value="">選択してください</option>
        <?php for($i =1; $i <= 30; $i++) :?>
            <option value="<?php  echo $i ;?>"> <?php echo $i ;?></option>
        <?php endfor; ?>
        </select><br>
        <input type="submit" value="登録" id="post" name="post" class="registersubmit">
    </form>
    </div>
</body>
</html>