<?php
namespace App\repository;

use App\models\SpaceShip;
use \PDO;
class SpaceShipRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
    }

    public function addSpaceShip(SpaceShip $spaceship): SpaceShip
    {
        $query = $this->pdo->prepare('INSERT INTO spaceship VALUE(null, ?, ?, ?)');
        $query->bindValue(1, $spaceship->getName());
        $query->bindValue(2, $spaceship->getPassengerCapacity());
        $query->bindValue(3, $spaceship->getDescription());
        $query->execute();
        $spaceship->setId($this->pdo->lastInsertId());
        return $spaceship;
    }
}