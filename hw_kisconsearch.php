<?php
  include $_SERVER['DOCUMENT_ROOT']."/hanwha/db.php";
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
    <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='/hanwha/img/favicon.ico'>
    <link rel="stylesheet" type="text/css" href="/hanwha/css/style.css" />
  </head>
  <body>
  <!-- <div id="grid"> -->
    <div id="header">
      <h1><a id="title1" href="index.php">플랜트지원팀 / 견적파트</a></h1>
      <h2>
        <ul>
        <?=$list?>
        </ul>
      </h2>
    </div>
    <div id="board_area">
     <h3>KISCON 실적조회(2010년~2020년)</h3>
       
          <table class="list-table">
            <thead>
                <tr>
                    <th width="40">번호</th>
                      <th width="50">도급</th>
                      <th width="150">공사명</th>
                      <th width="40">구분</th>
                      <th width="100">발주자명</th>
                      <th width="50">공종</th>
                      <th width="100">세부공종</th>
                      <th width="50">지역</th>
                      <th width="80">계약일</th>
                      <th width="80">착공일</th>
                      <th width="80">준공일</th>
                      <th width="50">금액(억)</th>
                      <th width="200">업체명</th>
                  </tr>
              </thead>
      <div id="search_box">
        <form action="/hanwha/page/board/search_result_kiscon.php" method="get">
          <select name="catgo">
            <option value="공사명">공사명</option>
            <option value="발주자명">발주자명</option>
            <option value="지역">지역</option>
            <option value="상호">업체명</option>
          </select>
          <input type="text" name="search" size="40" required="required" /> <button>검색</button>
        </form>
      </div>
  </div>
<!-- </div>  -->
  </body>
</html>