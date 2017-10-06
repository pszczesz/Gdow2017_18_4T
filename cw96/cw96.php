<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $filename = 'dane.txt';
        if(file_exists($filename)){
             $plik = fopen($filename, 'r');
             if($plik){
                 while(($line=fgets($plik))!=FALSE){
                     echo "<p>{$line}</p>\n";
                 }
                 if(!feof($plik)){
                     echo "<p>Coś nie tak z odczytem</p>\n";
                 }
                 fclose($plik);
                 $nowe = "Wojciech Paleta 5600";
                 $plik = fopen($filename, 'a');
                 if($plik){
                     fwrite($plik, $nowe.PHP_EOL);
                 }
             }
        }else{
            echo "Brak pliku";
        }
        
       
        
        ?>
    </body>
</html>
