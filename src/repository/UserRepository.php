<?php
namespace App\repository;

use App\models\User;
use \PDO;

class UserRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);

        $className = (new \ReflectionClass(new User()))->getShortName();
    }

    public function addUser(User $user): User
    {
        $query = $this->pdo->prepare('INSERT INTO user VALUE(null, ?, ?, ?, ?, ?, ?, ?, ?,?)');
        $query->bindValue(1, $user->getFirstname());
        $query->bindValue(2, $user->getLastname());
        $query->bindValue(3, $user->getAddress());
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getPass());
        $query->bindValue(6, $user->getPhone());
        $query->bindValue(7, $user->getMedicalCertificat());
        $query->bindValue(8, $user->getDob());
        $query->bindValue(9, $user->getRole());
        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }

    public function findAll(): array
    {
        $query = $this->pdo->query('SELECT * FROM `user`');
        $data = $query->fetchAll(PDO::FETCH_CLASS, User::class);
        return $data;
    }

    public function findOneById(int $id): mixed
    {
        //$query = $this->pdo->prepare('SELECT user.*, (order.id) AS orders FROM `user` INNER JOIN `order` ON  (order.user_id) =20 WHERE user.id = 20');
        $query = $this->pdo->prepare('SELECT * FROM `user` WHERE user.id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetchObject(User::class);
        return $data;
    }

    public function deleteOneById(int $id): void
    {
        $query = $this->pdo->prepare('DELETE FROM `user` WHERE `user`.`id` = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function findRolesList(): array
    {
        $query = $this->pdo->query('SELECT user.role FROM `user` WHERE user.role != "" GROUP BY user.role');
        $data = $query->fetchAll();
        return $data;
    }

    public function findIfExist(string $email): bool
    {
        $query = $this->pdo->prepare('SELECT user.email FROM `user` WHERE user.email = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $data = $query->fetch();
        return (bool)$data ;
    }

    public function updateOneById(User $user): User
    {
        $query = $this->pdo->prepare('UPDATE `user` SET 
                  `firstname` = ?, 
                  `lastname` = ?,
                  `address` = ?, 
                  `email` = ?, 
                  `phone` = ?, 
                  `medicalCertificat` = ?, 
                  `dob` = ?, 
                  `role` = ?
                   WHERE `user`.`id` = ?');
        $query->bindValue(1, $user->getFirstname());
        $query->bindValue(2, $user->getLastname());
        $query->bindValue(3, $user->getAddress());
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getPhone());
        $query->bindValue(6, $user->getMedicalCertificat());
        $query->bindValue(7, $user->getDob());
        $query->bindValue(8, $user->getRole());
        $query->bindValue(9, $user->getId());
        $query->execute();
        return $user;
    }
}

