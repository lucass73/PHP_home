<?php
  include $_SERVER['DOCUMENT_ROOT']."/db.php";
  $sql=mq("SELECT * FROM topic");
  $list = '';
    while($row = $sql->fetch_array()) {
      $list = $list."<li><a id=title2 href=\"{$row['hostaddress']}.php\">{$row['title']}</a></li>";
    } 
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>한화건설/플랜트지원팀</title>
    <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='/img/favicon.ico'>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <div id="header">
      <h1><a id="title1" href="index.php">플랜트지원팀 / 견적파트</a></h1>

      <h2>
        <ul>
          <?=$list?>
        </ul>
      </h2>
    </div>
    <div id="content">
        <h2>견적업무 DB</h2>
        <p>
          한화건설/플랜트사업본부/플랜트지원팀 견적파트 Database 활용 웹사이트!!
        </p>
        <br><br>
        <form action="/make_create.php" method="POST">
          <p><input type="text" name="title" placeholder="추가항목 이름"></p>
          <p><input type="text" name="hostaddress" placeholder="PHP 파일명"></p>
          <p><input type="submit"></p>
        </form>
    </div>

  </body>
</html>