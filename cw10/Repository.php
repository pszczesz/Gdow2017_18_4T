<?php
require_once 'Uczen.php';
require_once 'Nauczyciel.php';
require_once 'Pracownik.php';
class Repository{
    public static function GetAll(){
        $dane = [];
        $dane[] = new Uczen();
        $dane[] = new Nauczyciel(["polski","angielski"],
                "Adam","Nowak",44);
        $dane[] = new Nauczyciel(["matematyka","fizyka"],
                "Renata","Wałek",28);
        $dane[] = new Uczen(4.9, "Bolek","Lolek",44);
        $dane[] = new Pracownik(3900, "Tomasz","Kowal",44);
        $dane[] = new Pracownik(2900, "Anna","Turek",44);
        $dane[] = new Pracownik(4870, "Monika","Kwika",44);
        return $dane;
    } 
}

