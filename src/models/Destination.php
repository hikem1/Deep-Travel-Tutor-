<?php
namespace App\models;
class Destination
{

    private int $id;
    private string $name;
    private float $distance;
    private int $tripDuration;
    private string $description;
    private float $unitPrice;
    private int $spaceship_id;

    /**
     * @return int
     */
    public function getSpaceShipId(): int
    {
        return $this->spaceship_id;
    }

    /**
     * @param int $spaceship_id
     */
    public function setSpaceShipId(int $spaceship_id): void
    {
        $this->spaceship_id = $spaceship_id;
    }

    /**
     * @var Session[] $sessions
     */
    private array $sessions = [];

    /**
     * @return array
     */
    public function getSessions(): array
    {
        return $this->sessions;
    }

    /**
     * @param array $sessions
     */
    public function setSessions(array $sessions): void
    {
        $this->sessions = $sessions;
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
     * @return array
     */
    public function getMedias(): array
    {
        return $this->medias;
    }

    /**
     * @param array $medias
     */
    public function setMedias(array $medias): void
    {
        $this->medias = $medias;
    }

    private SpaceShip $spaceShip;
    /**
     * @var Media[] $medias
     */
    private array $medias = [];

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(int $id): void
    {
        $this->id = $id;

    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): void
    {
        $this->name = $name;

    }

    /**
     * Get the value of distance
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     *
     * @return  self
     */
    public function setDistance(float $distance): void
    {
        $this->distance = $distance;

    }

    /**
     * Get the value of tripDuration
     */
    public function getTripDuration(): int
    {
        return $this->tripDuration;
    }

    /**
     * Set the value of tripDuration
     *
     * @return  self
     */
    public function setTripDuration(int $tripDuration): void
    {
        $this->tripDuration = $tripDuration;

    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get the value of unitPrice
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * Set the value of unitPrice
     *
     * @return  self
     */
    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;

    }
}