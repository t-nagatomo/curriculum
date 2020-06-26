<?php
$y = 0;
for ($i=1; $i > 0; $i++) { 
    $x = rand(1,6);
    $y = $y + $x;
    echo $i.'回目 ＝'.$x.'<br>';
    if ($y >=40) {
        echo '合計'.$i.'回でゴールしました';
        break;
    }
}

date_default_timezone_set('Asia/Tokyo');
// date_default_timezone_set('America/Los_Angeles');
echo '<br>';
if (date("H") >= 6 and date("H") <= 11) {
    echo '<br>';
    echo "今".date("H")."時台です。<br>";
    echo "おはようございます。";
  } elseif (date("H") >= 12 and date("H") <= 17) {
      echo '<br>';
      echo "今".date("H")."時台です<br>";
      echo "こんにちは。";
  } else {
    echo '<br>';
    echo "今".date("H")."時台です。<br>";
    echo "こんばんは。";
  }
?>