<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

$sql = mq("update subconlist set type='".$_POST['type']."',company='".$_POST['company']."',register='".$_POST['register']."',subcon='".$_POST['subcon']."',person='".$_POST['person']."',linenumber='".$_POST['linenumber']."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',etc='".$_POST['etc']."' where id='".$_POST['id']."'");
echo "<script>alert('수정되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=/hw_company.php" /> 
