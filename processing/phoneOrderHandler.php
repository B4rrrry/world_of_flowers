<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$db = Db::getInstance();

$db->query(
  'INSERT INTO `phone_queries`(`clientName`, `clientPhone`, `date`, `status`) VALUES(:name, :phone, :date, :status)',
  [
    'name' => htmlspecialchars($_POST['name']),
    'phone' => htmlspecialchars($_POST['phone']),
    'date' => date('Y-m-d'),
    'status' => 'Не обработан'
  ]
);

echo 'Мы получили Вашу заявку и скоро свяжемся с Вами!';
