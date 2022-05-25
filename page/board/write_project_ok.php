<?php

include $_SERVER['DOCUMENT_ROOT']."/hanwha/db.php";

$sql = mq("INSERT INTO bid_project(프로젝트명,PlantType,입찰방식,BCD,발주처,프로젝트기간,공사위치) VALUES('".$_POST['프로젝트명']."','".$_POST['PlantType']."','".$_POST['입찰방식']."','".$_POST['BCD']."','".$_POST['발주처']."','".$_POST['프로젝트기간']."','".$_POST['공사위치']."')");

echo "<script>alert('신규 입찰프로젝트 정보가 입력되었습니다.);</script>"; 
?>
<meta http-equiv="refresh" content="0 url=/hanwha/hw_project.php" /> 
