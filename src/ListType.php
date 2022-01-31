<?php


namespace Hallowelt42\TypeArray;


use ArrayAccess;
use Countable;
use Exception;
use SeekableIterator;

class ListType implements ArrayAccess, SeekableIterator, Countable  /* TODO : Serializable */
{
    use TArrayAccess;
    use TCountable;
    use TSeekable;
    use TIterator;

    /**
     * @var ?string
     */
    protected ?string $T;

    /**
     * @var int
     */
    protected int $position;

    /**
     * @var array
     */
    protected array $container;

    /**
     * ListType constructor.
     * @param string|null $T
     * @throws Exception
     */
    public function __construct(string $T = NULL)
    {
        if (class_exists($T) === FALSE) {
            throw new Exception();
        }

        $this->T = $T;

        $this->container = [];
    }

    /**
     * @param mixed $value
     * @throws Exception
     */
    public function typeTest(mixed $value): void
    {
        if ($value instanceof $this->T === FALSE) {
            throw new Exception("isn't type of {$this->T}");
        }
    }

}
