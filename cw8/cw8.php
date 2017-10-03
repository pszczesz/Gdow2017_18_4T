<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <h3>Sortowanie zwykłych tablic</h3>
        <?php
        $t1 = [23,89,78,55,121,76,7,45];
        print_r($t1);
        sort($t1);
        print_r($t1);
        $t2 = ["ggg","ryba","Tomasz","bbb","Franek"];
        print_r($t2);
        sort($t2);
        print_r($t2);
        $t3 = ["dd", "11","45","242","8","56"];
        sort($t3);
        print_r($t3);
        ?>
        <h3>Sortowanie tablic asocjacyjnych</h3>
        <?php
        $ta1 = ["ala"=>"dfgdf","4"=>"aytty",6=>45];
        print_r($ta1);
        sort($ta1);//niszczy tablice asocjacyjna znikaja klucze
        print_r($ta1);
        $days = ["monday"=>"poniedziałek","tuesday"=>"wtorek",
                 "wednesday"=>"środa","thursday"=>"czwartek",
                 "friday"=>"piątek","saturday"=>"sobota",
                 "sunday"=>"niedziela"];        
        ?>
        </pre>
    </body>
</html>
