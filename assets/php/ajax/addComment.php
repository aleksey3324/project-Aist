<?php
  require '../classes/Db.php';

  $_db = null;

  $avtor = $_POST['avtor'];
  $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));


  if (!ctype_alpha($avtor) && !preg_match("/[А-Яа-я]/", $avtor)) {
    echo 'Ошибка автора';
    exit();
  }
  else if ($comment == '') {
    echo 'Ошибка коммента';
    exit();
  }

  $_db = Db::getInstanse();

  $sql = 'INSERT INTO `reviews`(`avtor`, `comment`) VALUES (?, ?)';

  $query = $_db->prepare($sql);

  $query->execute([$avtor, $comment]);
?>

