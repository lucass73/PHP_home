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

     <h3>KISCON 실적조회(2010년~2020년)</h3>
     <h3><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h3>
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
              <?php
              
                $sql2 = mq("SELECT * FROM contlisttbl where $catagory like '%$search_con%' order by id ");  
                while($board = $sql2->fetch_array()){
                  $constname=$board["constname"]; 
//                  if(strlen($constname)>20)
//                  { 
//                    $constname=str_replace($board["constname"],mb_substr($board["constname"],0,20,"utf-8")."...",$board["constname"]);
//                  }
                  /* $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                  $rep_count = mysqli_num_rows($sql3);*/
                ?>
            <tbody>
              <tr>
                <td><?php echo $board['id']; ?></td>
                <td><?php echo $board["contracttype"]?></td>
                <td>
                  <a href='/page/board/read.php?id=<?php  echo $board["id"]; ?>'><?php echo $constname; ?>
                  </a></td>
                <td><?php echo $board["clienttype"]?></td>
                <td><?php echo $board["client"]?></td>
                <td><?php echo $board["const_type"]?></td>
                <td><?php echo $board["const_detail"]?></td>
                <td><?php echo $board["area"]?></td>
                <td><?php echo $board["cont_date"]?></td>
                <td><?php echo $board["const_start_date"]?></td>
                <td><?php echo $board["const_fin_date"]?></td>
                <td><?php echo $board["cont_amount(100m_won)"]?></td>
                <td><?php echo $board["company"]?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>

      <div id="search_box">
        <form action="/page/board/search_result_kiscon.php" method="get">
          <select name="catgo">
            <option value="constname">공사명</option>
            <option value="client">발주자명</option>
            <option value="area">지역</option>
            <option value="company">업체명</option>
          </select>
          <input type="text" name="search" size="40" required="required" /> <button>검색</button>
        </form>
      </div>
  </div>
<!-- </div>  -->
  </body>
</html>