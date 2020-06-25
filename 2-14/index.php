<?php


$fruit = ['apple','banana','lemon','tomato'];

echo count($fruit);

echo '<br>';
echo '<br>';


$member = ['saitou','toyoda','nagata','ishii','tanaka','suzuki'];

sort($member);
var_dump($member);


echo '<br>';
echo '<br>';


$numbers = [2,6,90,50,76,100,89];

sort($numbers);
var_dump($numbers);

echo '<br>';
echo '<br>';

$names =  ['saitou','toyoda','nagata','ishii','tanaka','suzuki'];
var_dump(in_array("toyoda", $names));

echo '<br>';
echo '<br>';


if(in_array("toyoda", $names)){
    echo '豊田さんいますよ';

}else{
    echo '豊田さんいませんよ';

}


echo '<br>';
echo '<br>';

$names = ['saitou','toyoda','nagata','ishii','tanaka','suzuki'];
$atstr = implode("@", $names);
var_dump($atstr);


echo '<br>';
echo '<br>';


$num =  [45,345,862,112,879,112];
$atstr = implode("-", $num);
var_dump($atstr);

echo '<br>';
echo '<br>';

$re_num = explode("-", $atstr);
var_dump($re_num);


echo '<br>';
echo '<br>';

$str = "5,2,4,3,5";
$array = explode(",",$str);
var_dump($array);