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
        <h3>Licznik odwiedzin: 
        <?php
        $f = fopen("licznik.txt", 'r');
        $licznik = intval(fgets($f));
        fclose($f);
        echo ++$licznik;
        $f = fopen("licznik.txt", 'w');
        fwrite($f, $licznik);
        fclose($f);
        ?>
        
        </h3>
        <?php
        require_once 'Repository.php';
        $dane = Repository::GetAll();
        foreach ($dane as $item) {
            echo $item;
        }
        ?>
    </body>
</html>
