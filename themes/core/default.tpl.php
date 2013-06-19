<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
  <header id="header">
    <?=$header?>
  </header>
  <div id="main" role="main">
  <article id="main" role="main">
    <?=$main?>
  </article>
      <div id="debug" role="debug">
        <?=get_debug()?>
      </div>
  </div>
  </article>
  <footer id="footer">
    <?=$footer?>
  </footer>
</body>
</html>
