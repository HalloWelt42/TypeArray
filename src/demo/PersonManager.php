<?php

namespace Hallowelt42\TypeArray\demo;

class PersonManager
{
    private PersonList $person_list;

    /**
     * @param PersonList $person_list
     */
    public function __construct(PersonList $person_list)
    {
        $this->person_list = $person_list;
    }

    /**
     * @return void
     */
    public function printAll():void{
        foreach ($this->person_list as $person){
            print_r("ID: {$person->getId()} - Name: {$person->getName()}");
            print_r(PHP_EOL);
        }
    }


}