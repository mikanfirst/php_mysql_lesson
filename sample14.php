<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
<?php
$news = file_get_contents('../../news_date/news.txt');
// $news .= "2021-11-15 にゅーすを追加しました\n";
// ↓入力した値を上に表示させたい場合
$news = "2021-11-15 にゅーすを追加しました\n" . $news;
file_put_contents('../../news_date/news.txt', $news);
print($news);
?>

<?php
$news = "2021-11-20 自動ファイル更新\n" . $news
$news = file_put_contents('../../news_date/news.txt', $news);
print($news);

<!-- readfile('../../news_data/news.txt'); -->

</pre>
  </main>
</body>

</html>