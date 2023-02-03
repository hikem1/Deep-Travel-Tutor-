<?php
namespace App\models;
class User
{

    private int $id;
    private ?string $firstname = null;
    private ?string $lastname = null;
    private ?string $address = null;
    private string $email;
    private ?string $phone = null;
    private ?string $medicalCertificat = null;
    private ?string $dob = null;
    protected ?string $pass;
    private ?string $role = null;

    /**
     * @var Order[] $orders
     */
    private array $orders = [];

    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param array $orders
     */
    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
    }


    /**
     * @return string|null
     */
    public function getRole(): string|null
    {
        return $this->role;
    }

    /**
     * @param string|null $role
     */
    public function setRole(string|null $role): void
    {
        $this->role = $role;
    }


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
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname(): string|null
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string|null$firstname
     * @return void
     */
    public function setFirstname(string|null $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string|null
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string|null $lastname
     * @return void
     */
    public function setLastname(string|null $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): string|null
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param string|null $address
     * @return void
     */
    public function setAddress(string|null $address): void
    {
        $this->address = $address;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;

    }

    /**
     * Get the value of phone
     */
    public function getPhone(): string|null
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;

    }

    /**
     * Get the value of medicalCertificat
     */
    public function getMedicalCertificat(): string|null
    {
        return $this->medicalCertificat;
    }

    /**
     * Set the value of medicalCertificat
     *
     * @param string|null $medicalCertificat
     * @return void
     */
    public function setMedicalCertificat(string|null $medicalCertificat): void
    {
        $this->medicalCertificat = $medicalCertificat;
    }

    /**
     * Get the value of dob
     */
    public function getDob(): string|null
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @param string|null $dob
     * @return void
     */
    public function setDob(string|null $dob): void
    {
        $this->dob = $dob;

    }

    /**
     * Get the value of pass
     */
    public function getPass(): string|null
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @param string|null $pass
     * @return void
     */
    public function setPass(string|null $pass): void
    {
        $this->pass = password_hash($pass, PASSWORD_DEFAULT);

    }
}