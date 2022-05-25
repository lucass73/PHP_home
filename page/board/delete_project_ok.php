<?php

include $_SERVER['DOCUMENT_ROOT']."/hanwha/db.php";
$bro = $_GET['id'];
$sql = mq("delete from bid_project where id='$bro';");
echo "<script>alert('선택 업체가 삭제되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=/hanwha/hw_project.php" /> 
