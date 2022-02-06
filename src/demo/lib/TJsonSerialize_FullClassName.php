<?php

namespace Hallowelt42\TypeArray\demo\lib;

trait TJsonSerialize_FullClassName
{
    public function jsonSerialize(): array
    {
        $entities = new class{};
        foreach ($this as $key => $val){
            $entities->$key=$val;
        }
        return [$this::class => $entities];
    }
}