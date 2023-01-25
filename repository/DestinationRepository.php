<?php
include_once './repository/MainRepository.php';

class DestinationRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Destination::class);
    }

    public function addDestination(Destination $destination):Destination {
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
}