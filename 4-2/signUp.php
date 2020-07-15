<?php
require_once('db_connect.php');
$err = array();
if (isset($_POST["signUp"])) {
    if (!empty($_POST)) {

        // ログイン名が入力されていない場合の処理
        if (empty($_POST["name"])) {
            $err['name'] = "名前が未入力です。";
        }
        // パスワードが入力されていない場合の処理
        if (empty($_POST["password"])) {
            $err['pass'] = "パスワードが未入力です。";
        }
    }
   if (isset($_POST['name'], $_POST['password']) && $_POST['name'] !== '' && $_POST['password'] !== ''){
        $name = $_POST['name'];
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, password) VALUES (:name, :password)"; 
        $pdo = db_connect();
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password_hash);
        $stmt->execute();
        $message= '登録しました。';

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
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
    <div class="signUpbox">
    <div class="clearfix">
    <div class="aaa">ユーザー登録画面</div>
    </div>
    <?php
    echo "<ul>";
    foreach($err as $err_message){
        echo "<li>"; 
        echo $err_message;
        echo "</li>"; 
    }
    echo "</ul>";
    if(isset($message)){
        echo $message;

    }
    ?>
    <form method="POST" action="">
        <input type="text" name="name" id="name" placeholder="ユーザー名" class="inputhight" value="<?php if (!empty($_POST['name']) ){ echo $_POST['name']; } ?>">
        <br>
        <input type="password" name="password" id="password" placeholder="パスワード" class="inputhight" value="<?php if (!empty($_POST['password']) ){ echo $_POST['password']; } ?>"><br>
        <input type="submit" value="新規登録" id="signUp" name="signUp" class="signUpSubmit">
    </form>
    </div>
</body>
</html>