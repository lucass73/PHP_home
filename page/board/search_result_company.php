<?php
  include $_SERVER['DOCUMENT_ROOT']."/hanwha/db.php";
  $sql=mq("SELECT * FROM topic");
  $list = '';
    while($row = $sql->fetch_array()) {
      $list = $list."<li><a id=title2 href=\"/hanwha/{$row['hostaddress']}.php\">{$row['title']}</a></li>";
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
      <h1><a id="title1" href="/hanwha/index.php">플랜트지원팀 / 견적파트</a></h1>
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
                  $특이사항=$board["특이사항"]; 
                  if(strlen($특이사항)>20)
                  { 
                    $특이사항=str_replace($board["특이사항"],mb_substr($board["특이사항"],0,20,"utf-8")."...",$board["특이사항"]);
                  }
                  /* $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                  $rep_count = mysqli_num_rows($sql3);*/
              ?>
            <tbody>
              <tr>
                <td><?php echo $board['ID']; ?></td>
                <td><?php echo $board["공종"]?></td>
                <td>
                  <a href='/hanwha/page/board/read_company.php?id=<?=$board['ID']?>'><?php echo $board["업체명"]; ?>
                  </a></td>
                <td><?php echo $board["사업자등록번호"]?></td>
                <td><?php echo $board["한화건설등록여부"]?></td>
                <td><?php echo $board["연락담당자"]?></td>
                <td><?php echo $board["전화번호"]?></td>
                <td><?php echo $board["휴대전화"]?></td>
                <td><?php echo $board["이메일"]?></td>
                <td><?php echo $특이사항?></td>
                <td><a href="/hanwha/page/board/modify_company.php?id=<?=$board['ID']?>">수정</a>
                <a href="/hanwha/page/board/delete_company_ok.php?id=<?=$board['ID']?>">삭제</a></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>

  <div id="search_box">
    <form action="/hanwha/page/board/search_result_company.php" method="get">
      <select name="catgo">
        <option value="공종">공종</option>
        <option value="업체명">업체명</option>
        <option value="담당자">담당자</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
<!-- </div>  -->
  </body>
</html>