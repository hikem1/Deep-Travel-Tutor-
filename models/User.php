<?php 

class User {

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $address;
    private string $email;
    private string $phone;
    private string $medicalCertificat;
    private string $dob;
    protected string $pass;


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
     * Get the value of firstname
     */ 
    public function getFirstname():string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname):void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname():string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname):void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress():string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(string $address):void
    {
        $this->address = $address;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email):void
    {
        $this->email = $email;

    }

    /**
     * Get the value of phone
     */ 
    public function getPhone():string
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone(string $phone):void
    {
        $this->phone = $phone;

    }

    /**
     * Get the value of medicalCertificat
     */ 
    public function getMedicalCertificat():string
    {
        return $this->medicalCertificat;
    }

    /**
     * Set the value of medicalCertificat
     *
     * @return  self
     */ 
    public function setMedicalCertificat(string $medicalCertificat):void
    {
        $this->medicalCertificat = $medicalCertificat;
    }

    /**
     * Get the value of dob
     */ 
    public function getDob():string
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob(string $dob):void
    {
        $this->dob = $dob;

    }

    /**
     * Get the value of pass
     */ 
    public function getPass():string
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass(string $pass):void
    {
        $this->pass = $pass;

    }
}