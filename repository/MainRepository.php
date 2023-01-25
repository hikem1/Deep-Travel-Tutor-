<?php 
include_once './models/User.php';
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
    public function findAll():array{
        $query = $this->pdo->query('SELECT * FROM ' . $this->toLowerCaseClassName);
        $users = $query->fetchAll(PDO::FETCH_CLASS, $this->className);
        return $users;
    }


}