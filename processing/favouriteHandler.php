<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
if (isset($_SESSION['User'])) {
  $data = new Data();
  $db = Db::getInstance();
  $db->query(
    'INSERT INTO `user_fav`(`user`, `boquet`) VALUES(:user, :boquet)',
    [
      'user' => $data->getUserId($_SESSION['User']['Login']),
      'boquet' => $_POST['favProdId']
    ]
  );
}
