<?php
session_start();
$hakujitsu = "時には誰かを知らず知らずのうちに傷つけてしまったり";
$_SESSION['hakujitsu'] = $hakujitsu;
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
        <p>セッションに値を保存しました。次のページに移動してみましょう</p>
        &raquo; <a href="page02.php">page02へ</a>
        </pre>
    </main>

</body>

</html>