<?php
$value = '変数に保存した値です';
setcookie('save_message','Cookieに保存した値です',time() + 60 * 60 * 24 * 14);
?>

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
            <a href="page02.php">page02へ</a>
        </pre>
    </main>

</body>

</html>
