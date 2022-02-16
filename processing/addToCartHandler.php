<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
$db = Db::getInstance();
$res = $db->query('SELECT `id` FROM `users` WHERE `login` = :login', ['login' => $_SESSION['User']['Login']]);

if ($db->query(
    'INSERT INTO `user_cart`(`boquet`, `count`, `user`) VALUES(:boquet, :prodCount, :user)',
    ['boquet' => $_POST['itemId'], 'prodCount' => 1, 'user' => $res[0]['id']]
)) {
    echo 'Товар успешно добавлен в корзину!';
}