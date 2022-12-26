<?php

class SpaceShip {

    private int $id;
    private string $name;
    private int $passengerCapacity;
    private string $description;
    

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id):void
    {
        $this->id = $id;

    }

    /**
     * Get the value of string
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of string
     *
     * @return  self
     */ 
    public function setName(string $name):void
    {
        $this->name = $name;
    }

    /**
     * Get the value of passengerCapacity
     */ 
    public function getPassengerCapacity():int
    {
        return $this->passengerCapacity;
    }

    /**
     * Set the value of passengerCapacity
     *
     * @return  self
     */ 
    public function setPassengerCapacity(int $passengerCapacity):void
    {
        $this->passengerCapacity = $passengerCapacity;

    }

    /**
     * Get the value of description
     */ 
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description):void
    {
        $this->description = $description;
    }
}