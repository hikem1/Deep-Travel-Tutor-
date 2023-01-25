<?php
include_once './repository/MainRepository.php';

class DestinationRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Destination::class);
    }

    public function addDestination(Destination $user):Destination {
        $query = $this->pdo->prepare('INSERT INTO destination VALUE(null, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $user->getName());
        $query->bindValue(2, $user->getDistance());
        $query->bindValue(3, $user->getDescription());
        $query->bindValue(4, $user->getTripDuration());
        $query->bindValue(5, $user->getUnitPrice());
        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }
}