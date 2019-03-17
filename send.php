<?php 

if(isset($_POST['submit'])){
    $to = "shikmebel_house@mail.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
    $first_name = $_POST['first_name'];
    $subject = "УРА!!! Кто-то оставил свой телефон на сайте!";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " оставил свой номер:" . "\n\n" . $_POST['number'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers2 = "From:" . $to;
  
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
  echo "<br /><br /><a href='#' onclick='history.back();'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<!--
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://epicblog.net/index.php");}
window.setTimeout("changeurl();",3000);
</script-->
