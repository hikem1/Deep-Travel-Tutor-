<?php
namespace App\repository;

use App\models\Ticket;
use \PDO;
class TicketRepository
{
    private PDO $pdo;
    private string $url = 'mysql:host=127.0.0.1:3306;dbname=deep_travel_space';
    private string $username = 'root';
    private string $pass = '';
    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->username, $this->pass);
    }

    public function addTicket(int $orderId, int $sessionId): int
    {
        $query = $this->pdo->prepare('INSERT INTO `ticket` VALUE(null, ?, ?)');
        $query->bindValue(1, $orderId);
        $query->bindValue(2, $sessionId);
        $query->execute();
        return $orderId;
    }
    public function findByOrderId(int $id): mixed
    {
        $query = $this->pdo->prepare('SELECT * FROM `ticket` WHERE ticket.order_id = :id ORDER BY ticket.id');
        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_CLASS, Ticket::class);
        return $data;
    }
    public function countTicketsByOrderId(int $orderId): array
    {
        $query = $this->pdo->prepare('SELECT COUNT(id) AS ticketNumber FROM `ticket` WHERE order_id = :orderId');
        $query->bindValue(':orderId', $orderId);
        $query->execute();
        $data = $query->fetch();
        return $data;
    }
}

