# TypeArray

## Anwendungszweck
Das TypeArray soll ein Problem typschwacher Arrays unter PHP lösen.

Es kann genutzt werden um sicher zu stellen, dass ein Array vom Typ eines bestimmten Objektes ist.

Diese Bibliothek macht Ihr Projekt nicht sehr abhängig, 
da die Schreibweise, wie Arrays in PHP verwendet werden gleich bleibt. 
Sie gewinnen aber mit der Bibliothek Typsicherheit und starke Typenhinweise (type hinting).



## Unterstützte Typen
* Jedes Objekt einer Klasse
  * z.B: 
### einfache Typen (Betastatus)
* boolean
* integer
* double
* double
* string


## Beispiel: Typenhinweise in PHPStorm
Quelle: [Demo](demo/PersonManager.php)

Hier können sie sehen, wie die typsicheren Arrays in verschiedenen Situation das Entwickeln unterstützen. 

![](demo/ressources/Bildschirmfoto%202022-02-06%20um%2013.13.32.png)

![](demo/ressources/Bildschirmfoto%202022-02-06%20um%2013.14.02.png)

![](demo/ressources/Bildschirmfoto%202022-02-06%20um%2013.12.40.png)


## Neue Typen anlegen
Neue Typen deklarieren sie wie folgt (Beispiel: [PersonList](demo/PersonList.php)):
```php
class PersonList extends ListType
{

    /**
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(Person::class);
    }

    /**
     * @param mixed $offset
     * @return Person
     */
    public function offsetGet(mixed $offset): Person
    {
        return parent::offsetGet(Person::class);
    }

    /**
     * @return Person
     */
    public function current(): Person
    {
        return parent::current();
    }

}
```

### Wichtig!
Die beiden Methoden ...
* `current`
* `offsetGet`

... müssen in der oben gezeigten Weise deklariert werden, 
damit die Typenhinweise unter verschiedenen Bedingungen funktionieren.

Der `parent::__construct(Person::class)` legt fest, von welchem Typ die Liste/Array 
das daraus instanziierte Objekt ist.