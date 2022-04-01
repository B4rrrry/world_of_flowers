<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';

$db = Db::getInstance();
$data = new Data();

$db->query(
  'DELETE FROM `user_cart` WHERE `boquet` = :id AND `user` = :userId',
  [
    'id' => $_POST['itemId'],
    'userId' => $data->getUserId($_SESSION['User']['Login'])
  ]
);