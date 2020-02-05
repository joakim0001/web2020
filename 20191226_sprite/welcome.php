<!DOCTYPE html>
<html lang="ko">
<head>

	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
	<?
	$name = $_GET["name"];
	$email = $_GET["email"];
	?>


	이름:<?echo $name;?>님 반갑습니다.<br>
	이메일:<?echo $email;?>
</body>
</html>