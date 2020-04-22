<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 class="font-weight-normal">PHP</h1>
    </header>

    <main>
        <h2>Practice</h2>
        <pre>
            <?php
            $age= '３';

            $age = mb_convert_kana($age, 'n','UTF-8');

            if (is_numeric($age)){
                echo $age . '歳';
            }else{
                echo '※　年齢が数字ではありません';
            }
            ?>
        </pre>
    </main>

</body>

</html>