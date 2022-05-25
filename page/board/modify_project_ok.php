<?php

include $_SERVER['DOCUMENT_ROOT']."/hanwha/db.php";

$sql = mq("update bid_project set 프로젝트명='".$_POST['프로젝트명']."',PlantType='".$_POST['PlantType']."',입찰방식='".$_POST['입찰방식']."',BCD='".$_POST['BCD']."',발주처='".$_POST['발주처']."',프로젝트기간='".$_POST['프로젝트기간']."',공사위치='".$_POST['공사위치']."' where id='".$_POST['id']."'");
echo "<script>alert('수정되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=/hanwha/hw_project.php" /> 
