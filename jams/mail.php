<?php

$subject = trim($_POST['subject']);



//Проверка поля ИМЯ



    $username = trim($_POST['name']);

    if (isset($_POST['name'])) {

   $body_name = "Имя: $username<br>";

}



//Проверка поля ТЕЛЕФОН



    $telephone = trim($_POST['tel']);

      if (isset($_POST['tel'])){

  $body_telephone = "Номер телефона: $telephone<br>";

}

//Проверка поля ТЕЛЕФОН



    $email = trim($_POST['mail']);

         if (isset($_POST['mail'])){

 $body_email = "Электронная почта: $email<br>";

}

    



    $country = trim($_POST['country']);

         if (isset($_POST['country'])){

 $body_country = "Город: $country<br>";

}	



//Проверка наличия ТЕКСТА сообщения



        $message = trim($_POST['message']);

               if (isset($_POST['message'])){ 

        $body_message = "Сообщение:\n $message";

}

  





//Если ошибок нет, отправить email

if (!isset($hasError)) {

    echo "<p class='thanks center beliy' style='color:#fff;'>Дякуємо, Ваша заявка успішно відправлена </p>";

  

    $body = "

    <h4>$subject</h4>

    $body_name

    $body_telephone

    $body_email

	$body_message

	$body_country

    ";

    mail_utf8('sumchaneadm@gmail.com', $email, 'Сообщение с сайта', $body);

}



function mail_utf8($to, $from, $subject, $message)

{

    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

    $headers = "MIME-Version: 1.0\r\n";

    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $headers .= "a268364@panoramasumy.com";

    return mail($to, $subject, $message, $headers);

}

?>