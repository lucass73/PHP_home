<?php
  include $_SERVER['DOCUMENT_ROOT']."/db.php";
  $sql=mq("SELECT * FROM topic");
  $list = '';
    while($row = $sql->fetch_array()) {
      $list = $list."<li><a id=title2 href=\"/{$row['hostaddress']}.php\">{$row['title']}</a></li>";
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>한화건설/플랜트지원팀</title>
    <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='/img/favicon.ico'>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
  </head>
  <body>
   <!-- <div id="grid"> -->
    <div id="header">
      <h1><a id="title1" href="/index.php">플랜트지원팀 / 견적파트</a></h1>
      <h2>
        <ul>
        <?=$list?>
        </ul>
      </h2>
    </div>
    <div id="board_area">
     <h3>신규 입찰프로젝트 추가</h3>
        <form action="write_project_ok.php" method="POST" enctype="multipart/form-data">
          <table class="list-table">
            <thead>
                <tr>
                      <th width="350">프로젝트명</th>
                      <th width="100">PlantType</th>
                      <th width="100">입찰방식</th>
                      <th width="70">B.C.D</th>
                      <th width="120">발주처</th>
                      <th width="300">프로젝트기간</th>
                      <th width="400">공사위치</th>
                  </tr>
              </thead>

            <tbody>
              <tr>
              <td><textarea name="pj" id="" cols="50"></textarea></td>
              <td><textarea name="PlantType" id="" cols="" placeholder="화공/정유,발전,LNG,산업설비..."></textarea></td>
              <td><textarea name="typebid" id="" cols="" placeholder="종심제,경쟁입찰,투자비산출..."></textarea></td>
              <td><textarea name="BCD" id="" cols="" placeholder="yyyy-mm-dd"></textarea></td>
              <td><textarea name="client" id="" cols=""></textarea></td>
              <td><textarea name="projectperiod" id="" cols="40"></textarea></td>
              <td><textarea name="location" id="" cols="60"></textarea></td>
              </tr>
            </tbody>
          </table>
          <div class="bt_se">
            <button type="submit">프로젝트 입력</button>
          </div>
    </form>
    </div>
<!-- </div>  -->
  </body>
</html>