<?

if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
// if (isset($_POST['ref'])) {$ref = $_POST['ref'];}
if (isset($_POST['utm'])) {$utm = $_POST['utm'];}
$ref = $_SERVER["HTTP_REFERER"]; 

// $jsonq_ar=json_decode(urldecode($utm));

// $parameters="\r\nUTM-метки: \r\n";
// foreach($jsonq_ar as $key => $value)
// {
// $parameters .= "$key = $value\r\n";
// }
// tur.disckont@yandex.ru
$address = "zerakul87@mail.ru";
$sub = 'Заявка';

$mes = "Имя:" ." " .$name.
"\nТелефон:" ." " .$phone.
"\nE-mail:" ." " .$email.
"\nReferal:" ." " .$ref.
"\nUTM".$utm;


$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:ТУРЫ-В-ДОМИНИКАНУ");

