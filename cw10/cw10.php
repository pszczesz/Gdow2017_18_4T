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
        $c1 = new Czlowiek();
        $c2 = new Czlowiek("Genowefa","Brodzik",45);
        echo $c1;
        echo $c2;
        ?>
    </body>
</html>
