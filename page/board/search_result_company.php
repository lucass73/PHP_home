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
      <?php
          /* 검색 변수 */
        $catagory = $_GET['catgo'];
        $search_con = $_GET['search'];
      ?>
    
      <h3>협력업체리스트</h3>
      <h3><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h3>

          <table class="list-table">
            <thead>
                <tr>
                    <th width="40">번호</th>
                      <th width="80">공종</th>
                      <th width="150">업체명</th>
                      <th width="150">사업자번호</th>
                      <th width="200">등록여부</th>
                      <th width="200">연락담당자</th>
                      <th width="120">전화번호</th>
                      <th width="100">휴대번호</th>
                      <th width="100">이메일</th>
                      <th width="300">특이사항</th>
                      <th width="70">수정/삭제</th>
                  </tr>
              </thead>
              <?php
              
                $sql2 = mq("select * from subconlist where $catagory like '%$search_con%' order by id ");  
                while($board = $sql2->fetch_array()){
                  $etc=$board["etc"]; 
                  if(strlen($etc)>20)
                  { 
                    $etc=str_replace($board["etc"],mb_substr($board["etc"],0,20,"utf-8")."...",$board["etc"]);
                  }
                  /* $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                  $rep_count = mysqli_num_rows($sql3);*/
              ?>
            <tbody>
              <tr>
                <td><?php echo $board['ID']; ?></td>
                <td><?php echo $board["type"]?></td>
                <td>
                  <a href='/page/board/read_company.php?id=<?=$board['ID']?>'><?php echo $board["company"]; ?>
                  </a></td>
                <td><?php echo $board["register"]?></td>
                <td><?php echo $board["subcon"]?></td>
                <td><?php echo $board["person"]?></td>
                <td><?php echo $board["linenumber"]?></td>
                <td><?php echo $board["mobile"]?></td>
                <td><?php echo $board["email"]?></td>
                <td><?php echo $etc?></td>
                <td><a href="/page/board/modify_company.php?id=<?=$board['ID']?>">수정</a>
                <a href="/page/board/delete_company_ok.php?id=<?=$board['ID']?>">삭제</a></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>

  <div id="search_box">
    <form action="/page/board/search_result_company.php" method="get">
      <select name="catgo">
        <option value="type">공종</option>
        <option value="company">업체명</option>
        <option value="person">담당자</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
<!-- </div>  -->
  </body>
</html>