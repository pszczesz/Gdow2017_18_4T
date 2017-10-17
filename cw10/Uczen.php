<?php
require_once 'Czlowiek.php';
class Uczen extends Czlowiek {
    private $srOcen;    
    public function __construct($srOcen=4.0,$imie = "noname", 
                                       $nazwisko = "noname", $wiek = 30) {
        parent::__construct($imie, $nazwisko, $wiek);//wywol konstr klasy baz
        $this->srOcen = $srOcen;
    }
    public function __toString() {//nadpisywanie metody klasy bazowej
        $html = parent::__toString();
        $html .= "<div>Średnia ocen ucznia:"
                . " <span class='wyr'>{$this->srOcen}</span></div>\n";
        return $html;
    }
}

