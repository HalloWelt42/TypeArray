<?php

namespace Hallowelt42\TypeArrayDemo\lib;

trait TJsonSerialize_ClassNameWithoutNS
{
    public function jsonSerialize(): array
    {
        $entities = new class {};

        foreach ($this as $key => $val) {
            $entities->$key = $val;
        }

        $name   = $this::class;
        $parts  = explode('\\', $name);
        $rename = $parts[count($parts) - 1];

        return [$rename => $entities];
    }
}