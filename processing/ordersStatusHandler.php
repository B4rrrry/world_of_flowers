<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
$db = Db::getInstance();
var_dump($_POST);
$db->query(
  'UPDATE `orders` SET status = :value WHERE id = :id',
  [
    'value' => htmlspecialchars(trim($_POST['status'])),
    'id' => htmlspecialchars(trim($_POST['id']))
  ]
);
