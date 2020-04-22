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
            foreach($_POST['reserve'] as $reserve){
                echo htmlspecialchars($reserve,ENT_QUOTES).' ';
            }
            ?>
        </pre>
    </main>

</body>

</html>