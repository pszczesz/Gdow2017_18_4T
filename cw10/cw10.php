<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 10</title>
        <style>
            span.wyr{color: green; font-weight: bold;}
            div.info{border-top: solid 1px grey;}
        </style>
    </head>
    <body>
        <?php
        require_once 'Czlowiek.php';
        require_once 'Uczen.php';
        require_once 'Nauczyciel.php';
        $c1 = new Czlowiek();
        $c2 = new Czlowiek("Genowefa","Brodzik",45);
        $u1 = new Uczen();
        $n1 = new Nauczyciel(['fizyka','matematyka'],"Renata","Kowalska",36);
        echo $c1;
        echo $c2;
        echo $u1;
        echo $n1;
        ?>
    </body>
</html>
