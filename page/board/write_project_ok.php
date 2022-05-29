<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

$sql_ = "INSERT INTO bid_project(pj,PlantType,typebid,BCD,client,projectperiod,location) VALUES('".$_POST['pj']."','".$_POST['PlantType']."','".$_POST['typebid']."','".$_POST['BCD']."','".$_POST['client']."','".$_POST['projectperiod']."','".$_POST['location']."');";

echo $sql_;

$sql = mq("INSERT INTO bid_project(pj,PlantType,typebid,BCD,client,projectperiod,location) VALUES('".$_POST['pj']."','".$_POST['PlantType']."','".$_POST['typebid']."','".$_POST['BCD']."','".$_POST['client']."','".$_POST['projectperiod']."','".$_POST['location']."')");

if($sql === false) {
    echo mysqli_error($sql);
}

echo "<script>alert('신규 입찰프로젝트 정보가 입력되었습니다.);</script>"; 
?>
<meta http-equiv="refresh" content="0 url=/hw_project.php" /> 
