<?php
include_once './repository/MainRepository.php';

class UserRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function addUser(User $user):User {
        $query = $this->pdo->prepare('INSERT INTO user VALUE(null, ?, ?, ?, ?, ?, ?, ?, ?)');
        $query->bindValue(1, $user->getFirstname());
        $query->bindValue(2, $user->getLastname());
        $query->bindValue(3, $user->getAddress());
        $query->bindValue(4, $user->getEmail());
        $query->bindValue(5, $user->getPhone());
        $query->bindValue(6, $user->getMedicalCertificat());
        $query->bindValue(7, $user->getDob());
        $query->bindValue(8, $user->getPass());
        $query->execute();
        $user->setId($this->pdo->lastInsertId());
        return $user;
    }
}