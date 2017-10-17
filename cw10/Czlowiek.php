<?php
class Czlowiek {
    protected $imie;
    protected $nazwisko;
    protected $wiek;
    public function __construct($imie = "noname", $nazwisko = "noname", $wiek = 30) {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
    }
    public function __toString() {
        $html = "<div class='info'><p> Informacje podstawowe</p>\n";
        $html .= "<p>Imię: <span class='wyr'>{$this->imie}"
                . "</span> Nazwisko: <span class='wyr'>"
                . "{$this->nazwisko}</span>"
                . " Wiek: <span class='wyr'>{$this->wiek}</span>"
                . "</p></div>\n";
        return $html;
    }
}


