<?php

namespace App\DTO;

class RegisterDTO
{
private string $email;
private string $name;
private string $password;
private string $phone;
private int $dep_id;

    /**
     * @param string $email
     * @param string $name
     * @param string $password
     * @param string $phone
     * @param int $dep_id
     */
    public function __construct(string $email, string $name, string $password, string $phone, int $dep_id)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->phone = $phone;
        $this->dep_id = $dep_id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getDepId(): int
    {
        return $this->dep_id;
    }

    public function setDepId(int $dep_id): void
    {
        $this->dep_id = $dep_id;
    }



}
