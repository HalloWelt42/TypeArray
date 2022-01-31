<?php

namespace Hallowelt42\TypeArray\demo;

use Exception;
use Hallowelt42\TypeArray\ListType;

/**
 *
 */
class PersonList extends ListType
{

    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(Person::class);
    }

    /**
     * @param mixed $offset
     * @return Person
     */
    public function offsetGet(mixed $offset): Person
    {
        return parent::offsetGet(Person::class);
    }

    /**
     * @return Person
     */
    public function current(): Person
    {
        return parent::current();
    }

}