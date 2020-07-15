<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// PDOのインスタンスを取得
$pdo = db_connect();
try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY id ASC"; 
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>メイン</title>
</head>
<body>
<div class="zaikobox">
    <div class="title">在庫一覧画面</div>
    <div class="registerLogoutBox clearfix">
        <div class="register"><a href="create_post.php">新規登録</a><br /></div>
        <div class="logout"><a href="logout.php">ログアウト</a><br /></div>
    </div>
    <table>
        <tr>
            <td class="silver">タイトル</td>
            <td class="silver">発売日</td>
            <td class="silver">在庫数</td>
            <td class="silver"></td>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><a href="delete_post.php?id=<?php echo $row['id']; ?>" class="red">削除</a>
            </tr>
        <?php } ?>
    </table>
   </div>
</body>
</html>