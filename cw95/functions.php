<?php
function getAll($filename){
    if(!file_exists($filename)){
        return [];
    }
    $dane = [];
    $plik = fopen($filename, 'r');
    if($plik){
        while (($line=fgets($plik))){
            $dane[] = explode(' ', $line);
        }
    }
    fclose($plik);
     return $dane;       
}
