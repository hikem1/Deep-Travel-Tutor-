<?php
namespace App\models;
class Order
{
    private int $id;
    private int $user_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

//    /**
//     * @return array
//     */
//    public function getTickets(): array
//    {
//        return $this->tickets;
//    }
//
//    /**
//     * @param array $tickets
//     */
//    public function setTickets(array $tickets): void
//    {
//        $this->tickets = $tickets;
//    }
//    /**
//     * @var Ticket[] $tickets
//     */
//    private array $tickets = [];
}