<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pętle w php</title>
        <style>
            table{ border-collapse: collapse; margin: 20px;}
            td,th{border: solid thin grey; padding: 5px; width: 40px;}
            th{color:white ; background-color: #ff9999;}
            td{text-align: right;}
        </style>
    </head>
    <body>
        <h1>Pętle w php</h1>
        <h3>Pętla for</h3>
        <table>
            <tr><th>x</th><th>x<sup>2</sup></th><th>x<sup>3</sup></th></tr>
        <?php
        for($i=1;$i<10;$i++){
            echo '<tr><td>'.$i.'</td><td>'.($i*$i)
                    .'</td><td>'.($i*$i*$i).'</td></tr>'."\n";            
        }
        ?>
        </table>
        <h3>Pętla while</h3>
        <?php
        $suma = 0;
        while ($suma<100){
            $liczba = rand(0, 20);
            echo $liczba.' ';
            $suma += $liczba;
        }
        echo '<br>Suma wynosi: '.$suma;
        ?>
        <h3>Pętla do ...while</h3>
        <?php
        $liczba = 0;        
        do{
            $liczba = rand(0, 20);
            echo $liczba. ' ';            
        }while($liczba!=0);
        
        ?>
    </body>
</html>
