<?php

require_once("getData.php");

$getData = new getData(); 
$getUserDatas =  $getData->getUserData();
$getPostDatas =  $getData->getPostData(); 
// var_dump($getUserDatas);
// var_dump($getPostDatas);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="main">
    <div class="header clearfix">
        <div class="header-logo clearfix">
            <img src="img/logo.png" alt="">
        </div>
        <div class="header-right clearfix">
        <div class="header-name"> 
           <p class="name"> ようこそ <?php echo $getUserDatas["last_name"]; ?><?php echo $getUserDatas["first_name"]; ?>さん</p>
        </div>
        <div class="loginTime"><p class="lastRogin">最終ログイン日：<?php echo $getUserDatas["last_login"]; ?></p></div>
        </div>
    </div>
        <div class="contents">
            <table>
                <tr>
                    <td class="tblttl">記事ID</td>
                    <td class="tblttl">タイトル</td>
                    <td class="tblttl">カテゴリ</td>
                    <td class="tblttl">本文</td>
                    <td class="tblttl">投稿日</td>
                </tr>
                    <?php foreach($getPostDatas as $keys => $val){?>
                        <tr>
                        <td class="tbllist"><?php echo $val['id'];?></td>
                        <td class="tbllist"><?php echo $val['title'];?></td>
                        <td class="tbllist"><?php
                        if($val['category_no'] == 1){
                            $val['category_no'] = '食事';
                            echo $val['category_no'];

                        }else if($val['category_no'] == 2){
                            $val['category_no'] = '旅行';
                            echo $val['category_no'];

                        }else{
                            $val['category_no'] = 'その他';
                            echo $val['category_no'];
                        }
                        ?>
                    </td>
                        <td class="tbllist"><?php echo $val['comment'];?></td>
                        <td class="tbllist"><?php echo $val['created'];?></td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
        <div class="footer">
            <p class="footer-txt">Y&I group.inc</p>
        </div>
</div>
</body>
</html>