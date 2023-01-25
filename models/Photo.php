<?php

class Photo {

    private int $id;
    private string $name;
    private string $link;
    private int $id_spaceship;
    private int $id_destination;
    private int $id_activity;

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
     * Get the value of name
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name):void
    {
        $this->name = $name;
    }

    /**
     * Get the value of link
     */ 
    public function getLink():string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink(string $link):void
    {
        $this->link = $link;
    }

    /**
     * Get the value of id_spaceship
     */ 
    public function getId_spaceship():int
    {
        return $this->id_spaceship;
    }

    /**
     * Set the value of id_spaceship
     *
     * @return  self
     */ 
    public function setId_spaceship(int $id_spaceship):void
    {
        $this->id_spaceship = $id_spaceship;
    }

    /**
     * Get the value of id_destination
     */ 
    public function getId_destination():int
    {
        return $this->id_destination;
    }

    /**
     * Set the value of id_destination
     *
     * @return  self
     */ 
    public function setId_destination(int $id_destination):void
    {
        $this->id_destination = $id_destination;
    }

    /**
     * Get the value of id_activity
     */ 
    public function getId_activity():int
    {
        return $this->id_activity;
    }

    /**
     * Set the value of id_activity
     *
     * @return  self
     */ 
    public function setId_activity(int $id_activity):void
    {
        $this->id_activity = $id_activity;
    }
}