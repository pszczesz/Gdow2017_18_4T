<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            $t1 = array(56, 89, 34, "ala ma kota", true, 565);
            print_r($t1);
            var_dump($t1);
            echo "<p>Rozmiar tablicy: ". count($t1)."</p>\n";
            $t1[] = "nowy";
            print_r($t1);
            $t2 = ["asdas", 34.8,false,[34,78,45]];
            $t2[33]="element 33";
            var_dump($t2);
            $t2[2]="zmieniony";
            print_r($t2);
            echo "<p>Element tablicy t2[1] = {$t2[1]}</p>\n";
            ?>
        </pre>
    </body>
</html>
