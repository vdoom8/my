<?php
$tel = $_POST['phone']; 
$email = $_POST['email']; 
$formid = $_POST['formid'];
$tour = $_POST['tour'];
$message = 'Отримана заявка з форми 2-Лендінгу: '.$formid.' тел.'.$tel.' email: '.$email.'  на тур '.$tour;
// Отправляем

mail('moreturovcv@gmail.com', 'Заявка!', $message );

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Дякуємо!</title>
	<style type="text/css">
		body { background: #fff; font-family: 'Roboto Slab', serif; }
		.main { text-align: center; font-size: 40px; font-weight: bold; color: #000; margin-top: 150px; }
		.check { font-size: 22px; font-weight: normal; width: 800px; margin: 30px auto; }
	</style>
	<script type="text/javascript">
		setTimeout('location.replace("/")', 5000);
	</script> 
	<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">

	<!-- Google Analytics counter -->
	
	<!-- Google Analytics counter -->
</head>
<body>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->

	<div class="main">
		<p>Дякуємо! Ваша заявка успішно відправлено! <br> Ми зв'яжемося з вами найближчим часом! <br> Ви повернетеся на сайт через 5 секунд </p>
	</div>
	</body>
</html>