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
// file_put_contents ファイルに内容を書き込むファンクション
$success = file_put_contents('../../news_date/news.txt', '2021-11-9 ホームページをリニューアルしました');
if ($success) {
  print('ファイルへの書き込みが完了しました');
} else {
  print('書き込みに失敗しました。フォルダの権限などを確認してください。');
}
?>
</pre>
  </main>
</body>

</html>