<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
$db = Db::getInstance();
$data = new Data();

$db->query(
  'DELETE FROM `user_fav` WHERE `boquet` = :bId AND `user` = :userId',
  [
    'bId' => $_POST['bId'],
    'userId' => $data->getUserId($_SESSION['User']['Login'])
  ]
);
