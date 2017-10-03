<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        $t1 = [34,45,67,"erte", 345,"sdf sdfsfs"];
        print_r($t1);
        $tekst = implode('-', $t1);
        echo $tekst.'<br>';
        $tekst2 = "alka ma fajnego kota ale go nie karmi";
        $t2 = explode(' ', $tekst2);
        print_r($t2);
        ?>
      </pre>
    </body>
</html>
