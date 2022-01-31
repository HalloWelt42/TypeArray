<?php

namespace Hallowelt42\TypeArray\demo;


/**
 * a spmple personal data
 */
class Person
{
    private int    $id;
    private string $name;

    public function __construct()
    {
        $this->name = '';
        $this->id   = -1;
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
     * @return Person
     */
    public function setId(int $id): Person
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }


}