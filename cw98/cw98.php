<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablice w php</title>
    </head>
    <body>
        <h1>Tablice w php</h1>
        <h3>Tworzenie tablic</h3>
        <pre>
        <?php
        $t1 = array(43,343,56,"dfsf",56.33,"sdfs");
        print_r($t1);
        $t2 = array(1=>23,3=>45,4=>"sadadad",$t1);
        print_r($t2);
        $t3 = [324,343,89.90,"ewrw",true];
        print_r($t3);
        ?>
        <h3>Dodawanie elementów do tablic</h3>
        <?php
        $t3[] = "dodany element";
        $t3[9] = "wstawione pod 9";
        $t3[1] = "zmienione";
        print_r($t3);
        echo "<p>Stary sposób</p>";
        array_push($t3, 999,7777);
        print_r($t3);
        ?>
        <h3>Przeglądanie elementów do tablic</h3>
        <?php
            for($i=0;$i<count($t3);$i++){
                echo $t3[$i].' ';
            }
            foreach ($t3 as $item){
                echo $item."\n";
            }
        ?>
        <h3>Ćwiczenie:</h3>
        <?php
        for($i=1;$i<=10;$i++){
            $kwadraty[$i] = $i*$i;
        }
        for($i=1;$i<=count($kwadraty);$i++){
            echo "<p>Kwadrat liczby: {$i} to {$kwadraty[$i]}</p>";
        }
        ?>
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
