
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href='/../../template/css/news.css'>
  </head>
  <body>
    <?php foreach($newsList as $newsItem): ?>
    <div class="post">
      <div class="id">
        <?php echo $newsItem['id'];?>
      </div>
      <div class="title">
        <?php echo $newsItem['name'];?>
      </div>
      <div class="short">
        <?php echo $newsItem['short'];?>
      </div>
    </div>
  <?php endforeach;?>
  </body>
</html>
