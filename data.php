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


  public function getUserId($userLogin): int
  {
    $res = $this->db->query('SELECT `id` FROM `users` WHERE `login` = :login', ['login' => $userLogin]);
    return $res[0]['id'];
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

  public function getCartCount(string $login): array
  {
    return $this->db->query(
      'SELECT count(`count`) as `count` FROM `getCart` WHERE `login` = :login',
      ['login' => $login]
    );
  }

  public function getCartAmount(string $login): int
  {
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

  public function getFlowers(): array
  {
    return $this->db->query('SELECT `name` FROM `flowers`');
  }

  public function getPhoneQueries($sortBy = 'id', $orderBy = 'desc')
  {
    return $this->db->query("SELECT * FROM `phone_queries` ORDER BY $sortBy $orderBy");
  }

  public function getOrders($sortBy = 'id', $orderBy='desc') {
    return $this->db->query("SELECT * FROM `getOrders` ORDER BY $sortBy $orderBy");
  }

  public function handleNewOrder(
    $name,
    $phone,
    $email,
    $address,
    $flat,
    $date,
    $startTime,
    $endTime,
    $isAnon,
    $recName,
    $recPhone,
    $paymentMethod,
    $amount,
    $userId
  ) {
    $query = 'INSERT INTO `orders`(
        `name`,`phone`,`email`,`address`,`flat`,`date`, `startTime`, 
        `endTime`,`isAnonym`,`recName`,`recPhone`,`payment`,`amount`, `userId`)
        VALUES (:name, :phone, :email, :address, :flat, :date, 
        :startTime, :endTime, :isAnon, :recName, :recPhone, :payment, :amount, :userId)';
    $params = [
      'name' => $name,
      'phone' => $phone,
      'email' => $email,
      'address' => $address,
      'flat' => $flat,
      'date' => $date,
      'startTime' => $startTime,
      'endTime' => $endTime,
      'isAnon' => $isAnon,
      'recName' => $recName,
      'recPhone' => $recPhone,
      'payment' => $paymentMethod,
      'amount' => $amount,
      'userId' => $userId
    ];
    $this->db->query($query, $params);
  }

  public function clearCart($userId) {
    $this->db->query('DELETE FROM `user_cart` WHERE `user` = :id', ['id' => $userId]);
  }
}
