<?php
namespace App\repository;

use App\models\Destination;
use \PDO;
class DestinationRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Destination::class);
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

    public function findDestinationsList(): array
    {
        $query = $this->pdo->query('SELECT destination.name FROM `destination` WHERE destination.name != "" GROUP BY destination.name');
        $data = $query->fetchAll();
        return $data;
    }

}