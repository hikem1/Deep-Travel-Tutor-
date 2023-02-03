<?php
namespace App\repository;

use App\models\Destination;
use \PDO;
class DestinationRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
    }

    public function addDestination(Destination $destination): Destination
    {
        $query = $this->pdo->prepare('INSERT INTO destination VALUE(null, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $destination->getName());
        $query->bindValue(2, $destination->getDistance());
        $query->bindValue(3, $destination->getDescription());
        $query->bindValue(4, $destination->getTripDuration());
        $query->bindValue(5, $destination->getUnitPrice());
        $query->execute();
        $destination->setId($this->pdo->lastInsertId());
        return $destination;
    }

    public function findOneById(int $id): mixed
    {
        //$query = $this->pdo->prepare('SELECT user.*, (order.id) AS orders FROM `user` INNER JOIN `order` ON  (order.user_id) =20 WHERE user.id = 20');
        $query = $this->pdo->prepare('SELECT * FROM `destination` WHERE destination.id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetchObject(Destination::class);
        return $data;
    }
}