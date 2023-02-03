<?php
namespace App\repository;

use App\models\Order;
use \PDO;
class OrderRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
    }

    public function addOrder(int $order): int
    {
        $query = $this->pdo->prepare('INSERT INTO `order` VALUES (null, ?)');
        $query->bindValue(1, $order,PDO::PARAM_INT);
        $query->execute();
        return $order;
    }

    public function findAll(): array
    {
        $query = $this->pdo->query('SELECT * FROM `order`');
        $data = $query->fetchAll(PDO::FETCH_CLASS, Order::class);
        return $data;
    }

    public function findByUserId(int $id): mixed
    {
        $query = $this->pdo->prepare('SELECT * FROM `order` WHERE order.user_id = :id ORDER BY order.id');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_CLASS, Order::class);
        return $data;
    }
}

