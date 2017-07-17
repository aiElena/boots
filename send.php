<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$what = $_POST['what'];
$email = $_POST['email'];
$to = "ai.alexandrova@yandex.ru";
$subject = "Заявка";
	$message = "Message,\n Письмо.<br>
Пользователь:".htmlspecialchars($what)."<br>
Имя:".htmlspecialchars($name)."<br>
Телефон:".htmlspecialchars($phone)."<br>
Адрес:".htmlspecialchars($email);
$headers = "From: TZ_Alexandrova<ai.alexandrova@yandex.ru>\r\nContent-type: text/html;
charset=UTF-8\r\n";
mail($to, $subject, $message, $email, $headers);

header('Location:thanks.html');

exit();

?>
