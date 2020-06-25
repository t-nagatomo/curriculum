<?php

$x = 3.2;
echo ceil($x);


$x = 4.4;
echo floor($x);


$x = 5.6;
echo round($x);


echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
// 半径が2の円の面積の計算
circleArea(3);



echo mt_rand(1, 50);

$str = "testtest";
echo strlen($str); //8文字

$str = "yoneyama";
echo strpos($str, "n");

$str = "yoneyama";
echo substr($str, -4, 2);

$str = "yoneyama";
echo str_replace("yone", "YONE", $str);


$name = "testさん";
$limit_number = 20;


printf("%sの時間和残り%d分です",$name,$limit_number);


$limit_hour = 20;
$limit_minute = 3;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);



$limit_hour = 6;
$limit_minute = 5;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;


?>