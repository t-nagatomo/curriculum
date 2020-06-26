<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$numbers = [80,22,20,21];
$langages = ['PHP','Python','JAVA','HTML'];
$comands = ['join','select','insert','update'];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ans = [80,'HTML','select'];
 $ans = implode(',',$ans);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<h2>①ネットワークのポート番号は何番？</h2>
<?php foreach ($numbers as $number) :?>
    <input type="radio" name="number" class="a" value="<?php echo $number;?>"><?php echo $number; ?>
<?php endforeach ;?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($langages as $lang) :?>
    <input type="radio" name="lang" class="a" value="<?php echo $lang;?>"><?php echo $lang; ?>
<?php endforeach ;?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($comands as $comand) :?>
    <input type="radio" name="comand" class="a" value="<?php echo $comand;?>"><?php echo $comand; ?>
<?php endforeach ;?><br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="ans" value="<?php echo $ans; ?>">
<input type="submit" value="解答する">
</form>
</body>
</html>