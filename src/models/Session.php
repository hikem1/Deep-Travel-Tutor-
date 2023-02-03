<?php
namespace App\models;
class Session
{
    private int $id;
    private SpaceShip $spaceShip;
    private Destination $destination;
    private string $date;
    private int $destination_id;
    private int $spaceship_id;

    /**
     * @return int
     */
    public function getDestinationId(): int
    {
        return $this->destination_id;
    }

    /**
     * @param int $destination_id
     */
    public function setDestinationId(int $destination_id): void
    {
        $this->destination_id = $destination_id;
    }

    /**
     * @return int
     */
    public function getSpaceshipId(): int
    {
        return $this->spaceship_id;
    }

    /**
     * @param int $spaceship_id
     */
    public function setSpaceshipId(int $spaceship_id): void
    {
        $this->spaceship_id = $spaceship_id;
    }


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
     * @return SpaceShip
     */
    public function getSpaceShip(): SpaceShip
    {
        return $this->spaceShip;
    }

    /**
     * @param SpaceShip $spaceShip
     */
    public function setSpaceShip(SpaceShip $spaceShip): void
    {
        $this->spaceShip = $spaceShip;
    }

    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }

    /**
     * @param Destination $destination
     */
    public function setDestination(Destination $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


}