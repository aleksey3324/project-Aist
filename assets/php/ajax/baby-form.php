<?php
  require '../classes/Db.php';

  $_db = null;

  $numberOfChildren = $_POST['numberOfChildren'];
  $strCheckedGroup = $_POST['strCheckedGroup'];
  $name = $_POST['name'];
  $phone = (int) str_replace(['+', '(', ')','-', ' '], '',$_POST['phone']);

  if ($numberOfChildren == '') exit();
  else if ($strCheckedGroup == '') exit();
  else if (!ctype_alpha($name) && !preg_match("/[А-Яа-я]/", $name)) {
    echo 'Ошибка имени';
    exit();
  }
  else if (strlen($phone) != 12) {
    echo 'Ошибка телефона';
    exit();
  }

  $_db = Db::getInstanse();

  $sql = "INSERT INTO `register-form`(`count`, `baby-group`, `name`, `phone`) VALUES (?, ?, ?, ?)";

  $query = $_db->prepare($sql);

  $query->execute([$numberOfChildren, $strCheckedGroup, $name, $phone]);
