<?php
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$massege = $_POST['massage'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n"; 

$success=mail("evko_artem@mail.ru",$subject,$message, $headers);
echo $success;
?>