<?php

$recepient = "@yandex.ru";
$siteName = "flyseepylots";
$pagetitle = "Заявка с сайта \"$siteName\"";

if (isset($_POST["sendDataForm"])) {
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$textaria = $_POST["message"]
	$message = "Имя: $name \nТелефон: $phone \nПочта: $email \nСообщение: $textaria";

	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

	alert('Спасибо за сообщение '.$name.'');
}


if(isset($_POST['change_visual'])) {
	$change = $_POST;
	if ($change) {
		echo '
		<style>
			html, body {
				background-color: #fff!important;
			}
			section {
				background-color: #fff!important;
			}
			h1,h2,h3,h4,h5,h6{
				 color: #000!important;
				 font-weight: 600;
			}

			p,span,label,input {
			    font-size: 25px!important;
			    font-weight: 600!important;
			    color: #000!important;
			}

			.color-text {
    			color: #000!important;
			}

			ul, ol {
				font-size: 22px!important;
				counter-reset: #000!important;
			}
			.reset_style {
				display: block;
				width: 100%;
				height: 100%;	
			}
			.change {
				display: none;
			}


		</style>
		';
	}
	if (isset($change['reset'])) {
		unset($change);
	}
}
?>