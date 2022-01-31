<?php


namespace Hallowelt42\TypeArray;


trait TSerializable
{
  public function serialize()
  {
    $unserialized = '';
    return (string)$unserialized;
  }

  public function unserialize($serialized)
  {

  }
}
