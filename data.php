<?php

session_start();
require_once 'db.php';

class Data
{
  private $db;

  public function __construct()
  {
    $this->db = Db::getInstance();
  }

  public function getProducts(): array
  {
    return $this->db->query('SELECT * FROM `boquets`');
  }

  public function getHitProducts(): array
  {
    return $this->db->query('SELECT `id`, `name`, `photo`, `price` FROM `boquets` WHERE `isHit` = 1');
  }

  public function getNewProducts(): array
  {
    return $this->db->query('SELECT `id`, `name`, `photo`, `price` FROM `boquets` WHERE `isNew` = 1');
  }

  public function getProductData(int $id): array
  {
    $query = 'SELECT `id`, `name`, `price`, `photo` FROM `boquets` WHERE id = :id';
    $params = ['id' => $id];
    return $this->db->query($query, $params);
  }

  public function getProductContent(int $id): array
  {
    $query = 'SELECT * FROM getProductContent WHERE id = :id';
    $params = ['id' => $id];
    return $this->db->query($query, $params);
  }

  public function getCart(string $login): ?array
  {
    return $this->db->query(
      'SELECT `name`, `price`, `photo`, `count` FROM `getCart` WHERE `login` = :login',
      ['login' => $login]
    );
  }

  public function getCartCount(string $login) {
    return $this->db->query(
      'SELECT count(`count`) as `count` FROM `getCart` WHERE `login` = :login',
      ['login' => $login]
    );
  }

  public function getCartAmount(string $login) {
    $prodPrices = $this->db->query(
      'SELECT `price` FROM `getCart` WHERE `login` = :login',
      ['login' => $login]
    );

    $amount = 0;

    foreach ($prodPrices as $item) {
      $amount += $item['price'];
    }

    return $amount;
  }
}
