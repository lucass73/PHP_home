<?php

include('db.php');

$sql = mq("update subconlist set 공종='".$_POST['공종']."',업체명='".$_POST['업체명']."',사업자등록번호='".$_POST['사업자등록번호']."',한화건설등록여부='".$_POST['한화건설등록여부']."',연락담당자='".$_POST['연락담당자']."',전화번호='".$_POST['전화번호']."',휴대전화='".$_POST['휴대전화']."',이메일='".$_POST['이메일']."',특이사항='".$_POST['특이사항']."' where id='".$_POST['id']."'");
echo "<script>alert('수정되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=hw_company.php" /> 
