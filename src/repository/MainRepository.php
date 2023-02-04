<?php
namespace App\repository;

use Nette;
use \PDO;
abstract class MainRepository
{

    protected PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    private string $className;
    private string $toLowerCaseClassName;

    public function __construct(string $className)
    {

        $this->pdo = new PDO($this->url, $this->username, $this->pass);
        $this->className = $className;
        $this->toLowerCaseClassName = strtolower((new \ReflectionClass(new $className()))->getShortName());
    }

    /**
     * @return array
     */
    public function findAll(int $limit, int $offset): array
    {
        $query = $this->pdo->query('SELECT * FROM ' . '`' . $this->toLowerCaseClassName . '` ' . 'LIMIT ' . $limit . ' OFFSET ' . $offset);
        $data = $query->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $data;
    }

    public function getDataCount(): int{
        $query = $this->pdo->query('SELECT COUNT(*) FROM' . '`' . $this->toLowerCaseClassName . '`');
        $data = $query->fetchColumn();
        return $data;
    }

    public function findBy(string $columnName, int $value): mixed
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . '`' . $this->toLowerCaseClassName . '`' . ' WHERE ' . $columnName . ' = :value');
        $query->bindParam(':value', $value);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $data;
    }

    public function findOneById(int $id): mixed
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . '`' . $this->toLowerCaseClassName . '`' . ' WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetchObject($this->className);
        return $data;
    }


}