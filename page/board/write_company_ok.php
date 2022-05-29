<?php

include $_SERVER['DOCUMENT_ROOT']."/db.php";

$sql = mq("INSERT INTO subconlist(type,company,register,subcon,person,linenumber,mobile,email,etc) VALUES('".$_POST['type']."','".$_POST['company']."','".$_POST['register']."','".$_POST['subcon']."','".$_POST['person']."','".$_POST['linenumber']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['etc']."')");

echo "<script>alert('업체등록이 완료되었습니다.');</script>"; 
?>
<meta http-equiv="refresh" content="0 url=/hw_company.php" /> 
