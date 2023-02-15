<?php
namespace App\repository;

use App\models\Session;
use \PDO;
class SessionRepository extends MainRepository
{
    public function __construct()
    {
        parent::__construct(Session::class);
    }

    public function findAllNextSessions(int $limit, int $offset): array{
        $query = $this->pdo->query('SELECT `session`.`id`, `session`.`date`, `destination`.`name`, `destination`.`unitPrice`, COUNT(`ticket`.`id`) AS ticketAmount,`spaceship`.`passengerCapacity`
                                            FROM `session`
                                            INNER JOIN `ticket` ON `ticket`.`session_id` = `session`.`id`
                                            INNER JOIN `destination` ON `destination`.`id` = `session`.`destination_id`
                                            INNER JOIN `spaceship` ON `spaceship`.`id` = `session`.`spaceship_id`
                                            WHERE `session`.`date` > NOW()
                                            GROUP BY `session`.`id`
                                            ORDER BY `session`.`date` ASC LIMIT ' . $limit . ' OFFSET ' . $offset);
        $data = $query->fetchAll();
        return $data;
    }

    public function findSessionById(int $id): array{
        $query = $this->pdo->prepare('SELECT `session`.`id`, `session`.`date`, `destination`.`name`, `destination`.`unitPrice`,
                                            COUNT(`ticket`.`id`) AS ticketAmount,`spaceship`.`passengerCapacity`
                                            FROM `session`
                                            INNER JOIN `ticket` ON `ticket`.`session_id` = `session`.`id`
                                            INNER JOIN `destination` ON `destination`.`id` = `session`.`destination_id`
                                            INNER JOIN `spaceship` ON `spaceship`.`id` = `session`.`spaceship_id`
                                            WHERE `session`.`id` = :id
                                            GROUP BY `session`.`id`');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetch();
        return $data;
    }

    public function updateOneById(Session $session): Session
    {
        $query = $this->pdo->prepare('UPDATE `session` SET 
                  `destination_id` = ?, 
                  `spaceship_id` = ?,
                  `date` = ? 
                   WHERE `session`.`id` = ?');
        $query->bindValue(1, $session->getDestinationId());
        $query->bindValue(2, $session->getSpaceshipId());
        $query->bindValue(3, $session->getDate());
        $query->bindValue(4, $session->getId());
        $query->execute();
        return $session;
    }
}