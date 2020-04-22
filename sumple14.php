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
            $news = file_get_contents('../news_data/news.txt');
            $news .= "2018-06-03 ニュースを追加しました";
            file_put_contents('../news_data/news.txt',$news);

            print($news);
           
            ?>
        </pre>
    </main>

</body>

</html>