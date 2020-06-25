<?php

$testFile = "test.txt";
$contents = "こんにちは！";
if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "a");            //fopen($testFile, "a") 第一引数には、データを入れ、第二引数には w r aを入れる。
    // 対象のファイルに書き込む                w・・・書き込み（上書きされる）  r・・・読み込む  a・・・更新する度追加する  
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}



$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)){           //fget この関数は、ファイルを１行ずつ読み込む関数。
        // 改行コード込みで1行ずつ出力        whileを使うことによって繰り返す。
        echo $line.'<br>';
    }
    // ファイルを閉じる                      fclose  ファイルを開いた際には、最後に必ずこれを記述する。
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}