<?php 
	if (isset($_POST['submit'])) {
		
		$userName = $_POST['name'];
		$userEmail = $_POST['email'];
		$userPhone = $_POST['tel'];
		$message = $_POST['text-field'];
		$userName = htmlspecialchars($userName);
		$userEmail = htmlspecialchars($userEmail);
		$userPhone = htmlspecialchars($userPhone);
		$message = htmlspecialchars($message);
		$userName = urldecode($userName);
		$userEmail = urldecode($userEmail);
		$userPhone = urldecode($userPhone);
		$message = urldecode($message);
		$userName = trim($userName);
		$userEmail = trim($userEmail);
		$userPhone = trim($userPhone);
		$message = trim($message);


		$to = "ya.maestro25@yandex.ru";
		$subject = "Письмо с сайта";
		$headers = "От: ".$userName.": ".$userEmail.", ".$userPhone."\r\n"; 

		if (mail($to, $subject, $headers, $message)) {
			echo "сообщение успешно отправлено";
		} else {
			echo "при отправке сообщения возникли ошибки";
			echo "<h1>$message</h1>"

		}
		
	
		header("Location: index.html");

	}
 ?>