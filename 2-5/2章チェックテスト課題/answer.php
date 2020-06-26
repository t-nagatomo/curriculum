<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$number = $_POST['number'];
$lang = $_POST['lang'];
$comand = $_POST['comand'];
$ans = $_POST['ans'];
$ans = explode(",",$ans);
// var_dump($ans);
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function kotae1(){
    global $number;
    global $ans;
    // var_dump($number);
    if($number == $ans[0]){
       echo  '正解！';
    }else{
        echo '残念・・・';
    }
}
function kotae2(){
    global $lang;
    global $ans;
    if($lang == $ans[1]){
        echo  '正解！';
     }else{
         echo '残念・・・';
     }
}
function kotae3(){
    global $comand;
    global $ans;
    if($comand == $ans[2]){
        echo  '正解！';
     }else{
         echo '残念・・・';
     }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
  <title></title>
</head>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo kotae1($number); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo kotae2($lang); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo kotae3($comand); ?>
</body>
</html>