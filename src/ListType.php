<?php


namespace Hallowelt42\TypeArray;


use ArrayAccess;
use Countable;
use Exception;
use Hallowelt42\TypeArray\errors\ListTypeException;
use JsonSerializable;
use SeekableIterator;

class ListType implements ArrayAccess, SeekableIterator, Countable, JsonSerializable  /* TODO : Serializable */
{
    use TArrayAccess;
    use TCountable;
    use TSeekable;
    use TIterator;

    const BOOL      = 'boolean';
    const INT       = 'integer';
    const FLOAT     = 'double';
    const DOUBLE    = 'double';
    const STRING    = 'string';
    const ARRAY     = 'array';
    const OBJ       = 'object';
    const RESSOURCE = 'resource';

    /**
     * @var ?string
     */
    protected ?string $T;

    protected $simpleType;

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
    public function __construct(string $T = null)
    {
        if ($T === null) {
            throw new ListTypeException('undefined $T');
        }

        switch ($T) {
            case self::INT:
            case self::ARRAY:
            case self::BOOL:
            case self::DOUBLE:
            case self::FLOAT:
            case self::STRING:
            case self::RESSOURCE:
                $this->simpleType = true;
        }

//        if (is_object($T) === false) {
//            throw new ListTypeException('$T isn\'t object of class');
//        }

        $this->T = $T;

        $this->container = [];
    }

    /**
     * @param mixed $value
     * @throws Exception
     */
    public function typeTest(mixed $value): void
    {
        if ($this->simpleType === true) {
            $type = gettype($value);
            if($type !== $this->T){
                throw new ListTypeException("isn't type of '{$this->T}'");
            }
            return;
        }


        if ($value instanceof $this->T === false) {
            throw new ListTypeException("isn't type of {$this->T}");
        }
    }

    public function jsonSerialize(): array
    {
        return $this->container;
    }
}
