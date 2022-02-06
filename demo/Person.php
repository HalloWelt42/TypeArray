<?php

namespace Hallowelt42\TypeArrayDemo;



use Hallowelt42\TypeArrayDemo\lib\TJsonSerialize_ClassNameWithoutNS;
use JsonSerializable;

/**
 * a simple personal data
 */
class Person implements JsonSerializable
{
    use TJsonSerialize_ClassNameWithoutNS;

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