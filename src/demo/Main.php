<?php

namespace Hallowelt42\TypeArray\demo;

class Main
{
    public function __construct()
    {

        // create
        $persons = new PersonList();

        $person = new Person();
        $person->setId(1);
        $person->setName('Alice');
        $persons[] = $person;

        $person = new Person();
        $person->setId(2);
        $person->setName('Bob');
        $persons[] = $person;

        $manager = new PersonManager($persons);
        $manager->printAll();

        /**
         * this code print:
         *
         *      ID: 1 - Name: Alice
         *      ID: 2 - Name: Bob
         *
         *
         */


        print_r($manager->getJson());

        /**
         *  [
         *      {
         *          "Person": {
         *              "id": 1,
         *              "name": "Alice"
         *         }
         *      },
         *      {
         *          "Person": {
         *              "id": 2,
         *              "name": "Bob"
         *          }
         *      }
         *  ]
         *
         */

    }
}