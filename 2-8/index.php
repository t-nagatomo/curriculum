<?php

$fruit = ["apple" => "りんご","orange" => "みかん","peach" => "もも",];

foreach ($fruit as $key => $value) {
    echo "$key" . "といったら" . "$value" . "<br>";
}


echo '<br>';
echo '<br>';


echo "1. トランザクション"."<br>";
echo "・関連する複数の処理や操作を一つの処理単位にまとめて管理する方式。"."<br><br>";

echo "2. 排他ロック"."<br>";
echo "・データベースシステムなどで記憶領域への同時アクセスを制限するロックのこと。"."<br><br>";

echo "3. チューニング"."<br>";
echo "・調整すること。 "."<br><br>";