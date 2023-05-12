<?php
namespace App\repository;

use App\models\Order;
use \PDO;
class OrderRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Order::class);
    }

    public function addOrder(int $order): int
    {
        $query = $this->pdo->prepare('INSERT INTO `order` VALUES (null, ?)');
        $query->bindValue(1, $order,PDO::PARAM_INT);
        $query->execute();
        return $order;
    }

    public function findByUserId(int $id): mixed
    {
        $query = $this->pdo->prepare('SELECT * FROM `order` WHERE order.user_id = :id ORDER BY order.id');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_CLASS, Order::class);
        return $data;
    }

    public function getCountOrdersByUserId(int $id): int{
        $query = $this->pdo->prepare('SELECT COUNT(*) FROM `order` WHERE order.user_id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchColumn();
    }

    public function getOrderAmountByUserId(int $id): array{
        $query = $this->pdo->prepare('SELECT `order`.`id`, COUNT(`ticket`.`id`) AS ticketsAmount, SUM(`destination`.`unitPrice`) AS priceAmount
                                            FROM `order`
                                            INNER JOIN `ticket` ON `ticket`.`order_id` = `order`.`id`
                                            INNER JOIN `session` ON `session`.`id` = `ticket`.`session_id`
                                            INNER JOIN `destination` ON `destination`.`id` = `session`.`destination_id`
                                            WHERE `order`.`user_id` = :id
                                            GROUP BY `order`.`id`
                                            ORDER BY `order`.`id`');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}

