<?php
namespace App\models;
class SpaceShip
{

    private int $id;
    private string $name;
    private int $passengerCapacity;
    private string $description;
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
     * @return array
     */
    public function getActivities(): array
    {
        return $this->activities;
    }

    /**
     * @param array $activities
     */
    public function setActivities(array $activities): void
    {
        $this->activities = $activities;
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

    private Destination $destination;
    /**
     * @var Activity[] $activities
     */
    private array $activities = [];
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
     * Get the value of string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of string
     *
     * @return  self
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of passengerCapacity
     */
    public function getPassengerCapacity(): int
    {
        return $this->passengerCapacity;
    }

    /**
     * Set the value of passengerCapacity
     *
     * @return  self
     */
    public function setPassengerCapacity(int $passengerCapacity): void
    {
        $this->passengerCapacity = $passengerCapacity;

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
}