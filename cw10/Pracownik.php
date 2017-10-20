<?php

require_once 'Czlowiek.php';

class Pracownik extends Czlowiek {

    private $pensja;

    function __construct($pensja, $imie = "noname"
    , $nazwisko = "noname", $wiek = 30) {
        parent::__construct($imie, $nazwisko, $wiek);
        $this->pensja = $pensja;
    }

    public function __toString() {
        $html = parent::__toString();
        $html .= "<div>Pensja pracownika:"
                . " <span class='wyr'>{$this->pensja}</span></div>\n";
        return $html;
    }
}
