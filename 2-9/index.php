<?php 


for ($i=1; $i <=100 ; $i++) { 
     if($i % 3  == 0 && $i % 5  == 0){
         echo 'FizzBuzz!!'. '<br>';

     }elseif($i % 3  == 0){
         echo 'Fizz!' . '<br>';

     }elseif($i % 5  == 0){
         echo 'Buzz!' . '<br>';
     }else{
         echo $i . '<br>';

     }
}

echo '<br>';
echo '<br>';


echo "1.  パフォーマンス"."<br>";
echo "・性能。"."<br><br>";

echo "2. スロークエリ"."<br>";
echo "・データベースにおいて、時間のかかっているSQL(遅いSQL)のこと。"."<br><br>";

echo "3. クエリログ"."<br>";
echo "・MySQL Server への接続・接続解除の情報、および実行された全ての SQL クエリを出力してくれるログ。"."<br><br>";