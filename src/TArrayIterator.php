<?php


namespace Hallowelt42\TypeArray;


trait TArrayIterator
{
  use TArrayAccess;
  use TSeekableIterator;
  use TCountable;
  use TSerializable;

  /**
   * TArrayIterator constructor.
   * @param array $array
   * @param int $flags
   */
  public function __construct(array $array = [], int $flags = 0)
  {
    $this->container = [];
    $this->position  = 0;
    foreach ($array as $offset => $value) {
      $this->offsetSet($offset, $value);
    }
  }
}
