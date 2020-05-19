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
        <h2>PHP</h2>
        <pre>
            <?php
            $file = file_get_contents('https://h2o-space.com/feed/json/');
            $json = json_decode($file);

            foreach($json->items as $item):

            ?>
        ・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            <?php endforeach; ?>   
    </pre>
    </main>

</body>

</html>