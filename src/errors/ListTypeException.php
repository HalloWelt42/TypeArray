<?php

namespace Hallowelt42\TypeArray\errors;

use Exception;
use Throwable;

class ListTypeException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}