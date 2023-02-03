<?php
namespace App\repository;

use App\models\Session;
use \PDO;
class SessionRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
    }

    public function findOneById(int $id): mixed
    {
        //$query = $this->pdo->prepare('SELECT user.*, (order.id) AS orders FROM `user` INNER JOIN `order` ON  (order.user_id) =20 WHERE user.id = 20');
        $query = $this->pdo->prepare('SELECT * FROM `session` WHERE session.id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetchObject(Session::class);
        return $data;
    }



}