<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
      お名前： <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
      
      <!-- htmlのタグを認識させない ＊2つパラメータが必要（何を,どのように) 2つ目は基本(ENT_QUOTES) -->
      <!-- $_GET,$_POSTはmethodの指定によって変える必要がある $_REQUESTは POSTでもGETでもにん-->
    </pre>
  </main>
</body>

</html>