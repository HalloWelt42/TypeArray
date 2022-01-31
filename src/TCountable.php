<?php


namespace Hallowelt42\TypeArray;


trait TCountable
{
    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->container);
    }
}

