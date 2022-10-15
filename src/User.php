<?php

namespace Nin\BlogPhp;

class User
{
    public function __construct(private int $id, private string $firstName, private string $lastName)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}