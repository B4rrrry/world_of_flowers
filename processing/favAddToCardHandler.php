<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
$db = Db::getInstance();
$data = new Data();

if ($db->query(
    'INSERT INTO `user_cart`(`boquet`, `count`, `user`) VALUES(:boquet, :prodCount, :user)',
    [
        'boquet' => $_POST['itemId'], 
        'prodCount' => 1, 
        'user' => $data->getUserId($_SESSION['User']['Login'])
    ]
)) {
    echo '<p class="product__price">Успешно добавлен в корзину</p>';
}