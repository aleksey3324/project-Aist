<?php

  require '../lib/phpmailer/PHPMailerAutoload.php';

  $name = $_POST['name'];
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

  if(!ctype_alpha($name) && !preg_match("/[А-Яа-я]/", $name)) {
    echo 'Ошибка имени';
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Ошибка почты';
    exit();
  }
  else if(!$comment) {
    echo 'Ошибка коммента';
    exit();
  }

  echo $name;

  $mail = new PHPMailer;
  $mail->CharSet = 'utf-8';

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'aist.r.ecc@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
  $mail->Password = 'rix9HdvqQLxxixzpGZkb'; // Ваш пароль от почты с которой будут отправляться письма
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

  $mail->setFrom('aist.r.ecc@mail.ru'); // от кого будет уходить письмо?
  $mail->addAddress('aist.r.ecc@gmail.com');     // Кому будет уходить письмо 

  $mail->isHTML(true);                                  

  $mail->Subject = 'Обратная связь';
  $mail->Body    = '' . "Прислал - ". $name . "<br>". "Email - ". $email . "<br>". "Комментарий:". "<br>". $comment;
  $mail->AltBody = '';

  $mail->send();

?>