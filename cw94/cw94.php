<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Programowanie obiektowe wstęp</title>
        <style>
            span.wyr{color: red; font-weight: bold;}
            div.info{border: solid thin #660000; padding: 10px;
                 background-color: #ffffcc;}
        </style>
    </head>
    <body>
        <h1>Programowanie obiektowe wstęp</h1>
        <?php

        class Worker {
            private $imie;
            private $nazwisko;
            private $pensja;
            public function __construct($imie, $nazwisko, $pensja) {
                $this->imie = $imie;
                $this->nazwisko = $nazwisko;
                $this->pensja = $pensja;
            }
            public function __toString() {
                $html = "<div class='info'><p> Dane osobowe pracownika</p>\n";
                $html .= "<p>Imię: <span class='wyr'>{$this->imie}"
                        . "</span> Nazwisko: <span class='wyr'>"
                        . "{$this->nazwisko}</span>"
                        . " Pensja: <span class='wyr'>{$this->pensja}</span>"
                        . "</p></div>\n";
                return $html;
            }          
        }
        $w = new Worker("Adam", "Nowak", 3900);
        $w1 = new Worker("Anna", "Grydlak", 4100);
        echo $w;
        echo $w1;
        ?>
    </body>
</html>
