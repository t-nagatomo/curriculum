<?php

// $age =18;

// if($age >=20){
//     echo "お酒が飲めるぞ！";
// } else {
//     echo "お酒は二十歳になってから！";
// }

// $is_student = true;

// if($is_student){
//     echo 'あなたは学生です。';
// }

// $age =22;   //変数は上書きされる

// if ($age < 25 && $is_student) {
//     echo '学割パックが使えるよ';
// } elseif ($age < 25) {
//     echo '若者応援割引が使えるよ';
// }


// //switch文

// $blood = "B";

// switch ($blood) {
//     case 'A':
//         print 'A型です';
//         break;
//     case 'B':
//         print 'B型です';
//         break;
//     case 'O':
//         print 'O型です';
//         break;
//     case 'AB':
//         print 'AB型です';
//         break;

//     default:
//         print 'A/B/O/ABから選択してください。';
//         break;
// }

// //swich文終わり


// //三項演算子
// $name = "";

// echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';

// // (===での比較は 型まで比較)

// $string = '1'; //文字列
// $int = 1;      //数字
// if (1 === $string) {
//   echo '変数stringはint型です。';
// } else {
//   echo '変数stringはstring型です。'; //こっちが出力
// }

// if (1 === $int) {
//   echo '変数stringはint型です。'; //こっちが出力
// } else {
//   echo '変数stringはstring型です。';
// }


$name = 'taro';
$password = 'pass';

if ($name =='taro' && $password =='pass') {
    echo 'ログイン成功です。';
}elseif($name == 'taro'  && $password !== 'pass'){
    echo 'パスワードが間違っています。';

}elseif($name !== 'taro' && $password == 'pass' ){
    echo '名前が間違っています。';

}else{
    echo '入力情報が間違っています ';
}


echo '<br>';
echo '<br>';


echo "1. IDE（統合開発環境）"."<br>";
echo "・IDE（Integrated Development Environment／統合開発環境）とは、ソースコードを記述するエディタ、ソースコードからプログラムを生成するコンパイラ、コードの不正を発見・修正するデバッガなどのプログラム開発ツールをひとまとめにした開発環境"."<br><br>";

echo "2. JOIN（データベースにおいて）"."<br>";
echo "・結合すること。"."<br><br>";

echo "3. コンフリクト"."<br>";
echo "・同じ物を同時に使おうとして、ぶつかっちゃった状態"."<br><br>";