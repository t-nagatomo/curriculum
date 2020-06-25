<?php

function getVolumeArea($length, $width, $height){
  $area =  $length * $width * $height;
  return $area;
}


echo "縦=5cm、横=10cm、高さ=8cmの<br>";
echo "直方体の体積は「" . getVolumeArea(5,10,8) . "」です。";


echo '<br>';
echo '<br>';


echo "1.  ハッシュ化"."<br>";
echo "・元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。 パスワードの保管などでよく用いられる手法。"."<br><br>";

echo "2.  総合テスト"."<br>";
echo "・ステム開発におけるプログラムの検証作業の中でも、構築したシステムが全体として予定通りの機能を満たしているかどうかを確認するテストのこと。"."<br><br>";

echo "3.  デバッグ"."<br>";
echo "・コンピュータのプログラムの誤り"."<br><br>";