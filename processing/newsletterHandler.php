<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$db = Db::getInstance();

if ($db->query(
    'INSERT INTO `newsletter`(`client_name`, `email`) VALUES(:name, :email)', 
    ['name' => $_POST['name'], 'email' => $_POST['email']]
)) {
    echo 'Вы успешно подписались на рассылку!';
} else {
    echo 'Вы успешно подписались на рассылку!';
}


