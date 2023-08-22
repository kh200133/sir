<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

// 관리자 - 기본환경설정에 있는 관리자 이메일로 전송합니다.
// 추가적인 보안이 필요하시면 리퍼러등 다른 추가적인 방법을 사용해주세요.

$name = $_POST['ety_name'];
$email = $_POST['ety_phone'];
$tel = $_POST['ety_email'];
$con = $_POST['ety_content'];

if($name && $email && $tel && $con)
{
	$subject = '홈페이지에 문의가 등록되었습니다.';
	$cf_name = $config['cf_admin_email_name'];
	$to = $config['cf_admin_email'];

	$content = "
	담당자 : $name
	담당자 이메일 : $email
	전화번호 : $tel
	문의내용 : $con
	".G5_TIME_YMDHIS;
	mailer($cf_name, $config['cf_admin_email'], $to, $subject, $content);
}

?>