<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        お名前：<input type="text" name="name"><br>
        ご希望商品：<input type="radio" name= "award" value="A賞">A賞
        <input type="radio" name= "award" value="B賞">B賞
        <input type="radio" name= "award" value="C賞">C賞<br>
        個数：<select name="count">
        <?php for ($i = 1; $i <= 10; $i ++){ ?>
            <option value="<?php echo $i ;?>"><?php echo $i; ?></option>
        
        <?php }?>
        </select><br>

        <input type="submit" value="送信">
    </form>
</body>
</html>