<?php

class Db
{
  private static $instance;
  private $pdo;

  private function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost; port=3307; dbname=flowers', 'root', '');
    $this->pdo->exec('SET NAMES UTF8');
  }

  public function query(string $sql, array $params = []): ?array
  {
    $sth = $this->pdo->prepare($sql);
    $result = $sth->execute($params);

    if (false === $result) {
      return null;
    }

    return $sth->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getInstance(): self
  {
    if (self::$instance === null) {
      self::$instance = new self();
    }

    return self::$instance;
  }
}
