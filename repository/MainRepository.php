<?php 
include_once './models/User.php';
include_once './models/Destination.php';
abstract class MainRepository{

    protected PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    protected string $className;
    private string $toLowerCaseClassName;

    public function __construct(string $className)
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
        $this->className = $className;
        $this->toLowerCaseClassName = strtolower($className);
    }

    /**
     * @return array
     */
    public function findAll(): array{
        $query = $this->pdo->query('SELECT * FROM ' . $this->toLowerCaseClassName);
        $data = $query->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $data;
    }

    public function findByName(string $name): array{
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->toLowerCaseClassName .' WHERE name LIKE :name');
        $like = '%'.$name.'%';
        $query->bindParam(':name', $like);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $data;
    }


}