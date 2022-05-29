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

     <h3>입찰프로젝트 리스트</h3>
     <h3><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h3>
          <table class="list-table">
            <thead>
                <tr>
                    <th width="40">번호</th>
                      <th width="400">프로젝트명</th>
                      <th width="100">PlantType</th>
                      <th width="100">입찰방식</th>
                      <th width="70">B.C.D</th>
                      <th width="120">발주처</th>
                      <th width="300">프로젝트기간</th>
                      <th width="300">공사위치</th>
                      <th width="70">수정/삭제</th>
                  </tr>
              </thead>
              <?php
              
                  $sql2 = mq("select * from bid_project where $catagory like '%$search_con%' order by id ");  
                  while($board = $sql2->fetch_array()){
                    $pj=$board["pj"]; 
                    if(strlen($pj)>30)
                    { 
                      $pj=str_replace($board["pj"],mb_substr($board["pj"],0,30,"utf-8")."...",$board["pj"]);
                    }
                    /* $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                    $rep_count = mysqli_num_rows($sql3);*/
                ?>
            <tbody>
              <tr>
                <td><?php echo $board['ID']; ?></td>
                <td>

              <a href='/page/board/read.php?id=<?php  echo $board["id"]; ?>'><?php echo $pj; ?>
              </a></td>
                <td><?php echo $board["PlantType"]?></td>
                <td><?php echo $board["typebid"]?></td>
                <td><?php echo $board["BCD"]?></td>
                <td><?php echo $board["client"]?></td>
                <td><?php echo $board["projectperiod"]?></td>
                <td><?php echo $board["location"]; ?></td>
                <td><a href="/page/board/modify_project.php?id=<?=$board['ID']?>">수정</a>
                <a href="/page/board/delete_project_ok.php?id=<?=$board['ID']?>">삭제</a></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>

  <div id="search_box">
    <form action="/board/page/board/search_result_project.php" method="get">
      <select name="catgo">
        <option value="pj">프로젝트명</option>
        <option value="typebid">입찰방식</option>
        <option value="client">발주처</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
<!-- </div>  -->
  </body>
</html>