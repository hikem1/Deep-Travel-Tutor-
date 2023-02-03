<?php
namespace App\models;
class Activity
{

    private int $id;
    private string $name;
    private int $ageLimitAccess;

    /**
     * @return array
     */
    public function getSpaceships(): array
    {
        return $this->spaceships;
    }

    /**
     * @param array $spaceships
     */
    public function setSpaceships(array $spaceships): void
    {
        $this->spaceships = $spaceships;
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

    private float $unitPrice;
    /**
     * @var SpaceShip[] $spaceships
     */
    private array $spaceships = [];

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
     * Get the value of ageLimitAccess
     */
    public function getAgeLimitAccess(): int
    {
        return $this->ageLimitAccess;
    }

    /**
     * Set the value of ageLimitAccess
     *
     * @return  self
     */
    public function setAgeLimitAccess(int $ageLimitAccess): void
    {
        $this->ageLimitAccess = $ageLimitAccess;

    }

    /**
     * Get the value of price
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
}