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
          $xmlTree = simplexml_load_file('https://h2o-space.com/feed');
          foreach($xmlTree->channel->item as $item):
            ?>
            ・<a href="<?php print($item->link); ?>"><?php print($item->title); ?></a>
          <?php endforeach; ?>


        </pre>
    </main>

</body>

</html>