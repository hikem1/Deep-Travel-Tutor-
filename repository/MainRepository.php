<?php 
include_once './models/User.php';
class MainRepository{

    protected PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deeptravelspace';
    private string $username = 'root';
    private string $pass = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
        return $this->pdo;
    }

    public function testFind(){
        $query = $this->pdo->query('SELECT * FROM user');
        $users = $query->fetchAll(PDO::FETCH_CLASS, User::class);
        return $users;
    }


}