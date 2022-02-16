<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$db = Db::getInstance();

$db->query(
    'INSERT INTO `phone_queries`(`clientName`, `clientPhone`) VALUES(:name, :phone)',
    ['name' => htmlspecialchars($_POST['name']), 'phone' => htmlspecialchars($_POST['phone'])]
);

echo 'Мы получили Вашу заявку и скоро свяжемся с Вами!';