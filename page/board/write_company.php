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
     <h3>신규 협력업체 정보 입력</h3>
        <form action="write_company_ok.php" method="post" enctype="multipart/form-data">
          <table class="list-table">
            <thead>
                <tr>
                    <th width="80">공종</th>
                    <th width="150">업체명</th>
                    <th width="150">사업자번호</th>
                    <th width="200">등록여부</th>
                    <th width="200">연락담당자</th>
                    <th width="120">전화번호</th>
                    <th width="100">휴대번호</th>
                    <th width="100">이메일</th>
                    <th width="300">특이사항</th>
                </tr>
            </thead> 

            <tbody>
              <tr>
                <td><textarea name="type" id="" cols="15"></textarea></td>
                <td><textarea name="company" id="" cols="20"></textarea></td>
                <td><textarea name="register" id="" cols="25"></textarea></td>
                <td><textarea name="subcon" id="" cols="28"></textarea></td>
                <td><textarea name="person" id="" cols="25"></textarea></td>
                <td><textarea name="linenumber" id="" cols="22"></textarea></td>
                <td><textarea name="mobile" id="" cols="22"></textarea></td>
                <td><textarea name="email" id="" cols="22"></textarea></td>
                <td><textarea name="etc" id="" cols="45"></textarea></td>
              </tr>
            </tbody>
          </table>
        <div class="bt_se">
            <button type="submit">업체정보 입력</button>
        </div>
        </form>
  </div>
<!-- </div>  -->
  </body>
</html>