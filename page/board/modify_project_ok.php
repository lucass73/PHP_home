<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

$sql = mq("update bid_project set pj ='".$_POST['pj']."',PlantType='".$_POST['PlantType']."',typebid='".$_POST['typebid']."',BCD='".$_POST['BCD']."',client='".$_POST['client']."',projectperiod='".$_POST['projectperiod']."',location='".$_POST['location']."' where id='".$_POST['id']."'");
echo "<script>alert('수정되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=/hw_project.php" /> 
