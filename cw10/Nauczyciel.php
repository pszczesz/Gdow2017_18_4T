<?php
require_once 'Czlowiek.php';
class Nauczyciel extends Czlowiek{
    private  $przedmioty;
    public function __construct(array $przedmioty, $imie = "noname", $nazwisko = "noname", $wiek = 30) {
        parent::__construct( $imie, $nazwisko, $wiek);
        $this->przedmioty = $przedmioty;
    }
    public function __toString() {
        $html = parent::__toString();
        $lista = implode(', ', $this->przedmioty);
        $html .= "<div>Nauczane przedmioty: <span class='wyr'>{$lista}</span></div>\n";
        return $html;
    }
}
