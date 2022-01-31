<?php


namespace Hallowelt42\TypeArray;

use Exception;

trait TArrayAccess
{

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? NULL;
    }

    /**
     * this section goes into the class used / function protected or public typeTest( $value )
     *
     *    if( $val instanceof ExampleType === false ){
     *      throw new Exception();
     *    }
     *
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value):void
    {
        try {
            $this->typeTest($value);
        } catch (Exception $exception) {
            error_log($exception->getTraceAsString());
            return;
        }

        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }



    /**
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }
}
