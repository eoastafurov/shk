<?php 
require_once "SendMailSmtpClass.php"; // подключаем класс


$mailSMTP = new SendMailSmtpClass('shashkovsite@gmail.com', 'shashkov', 'ssl://smtp.gmail.com', 465, "utf-8");
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'порт', 'кодировка письма');

$name = $_POST['first_name'];
$phone = $_POST['number'];


  $from = array(
    "заявка shikmebel_house@mail.ru", // Имя отправителя
    "shikmebel_house@mail.ru" // почта отправителя
  );
// кому

$to = 'shikmebel_house@mail.ru';

// отправляем письмо
  $result =  $mailSMTP->send($to, 'Заявочка', $name . '<br>Номер или Email: ' . $phone . '<br>', $from);
  // $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Отправитель письма');
 
  if($result){
      echo "Done";
  }else{
     echo "Error: " . $result;
  }

?>
