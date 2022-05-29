<?php
  include('db.php');
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
                <td><textarea name="공종" id="" cols="15"></textarea></td>
                <td><textarea name="업체명" id="" cols="20"></textarea></td>
                <td><textarea name="사업자등록번호" id="" cols="25"></textarea></td>
                <td><textarea name="한화건설등록여부" id="" cols="28"></textarea></td>
                <td><textarea name="연락담당자" id="" cols="25"></textarea></td>
                <td><textarea name="전화번호" id="" cols="22"></textarea></td>
                <td><textarea name="휴대전화" id="" cols="22"></textarea></td>
                <td><textarea name="이메일" id="" cols="22"></textarea></td>
                <td><textarea name="특이사항" id="" cols="45"></textarea></td>
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