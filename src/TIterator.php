<?php


namespace Hallowelt42\TypeArray;


trait TIterator
{
    /**
     * @var int
     */
    protected int $position;

    /**
     * reset position
     *
     * @return void
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->container[$this->position];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * +1 step forward
     *
     * @return void
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->container[$this->position]);
    }
}
