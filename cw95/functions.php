<?php
function getAll($filename){
    if(!file_exists($filename)){
        return [];
    }
    $dane = [];
    $plik = fopen($filename, 'r');
    if($plik){
        while (($line=fgets($plik))){
            $dane[] = explode(' ', trim($line));
        }
    }
    fclose($plik);
     return $dane;       
}
function DanePre(array $dane){
    echo "<pre>";
    var_dump($dane);
    echo "</pre>";
}
function WorkersToTable(array $dane){
    $html = "<table class='workers'>\n";
    $html .= "<tr><th>Lp</th><th>Nazwisko</th><th>Imię</th>"
            . "<th>Pensja</th><th>Operacje</th></tr>";
    $i = 0;
    foreach ($dane as $k=>$row) {
        $i++;
        $html .= "<tr><td>{$i}</td><td>{$row[1]}</td>"
                . "<td>{$row[0]}</td><td>{$row[2]}</td>"
                . "<td><a href='delete.php?key={$k}'>Usuń</a></td></tr>\n";
    }
    $html .= "</table>\n";
    return $html;
}
function AddRowToFile($tekst,$filename){    
        $file = fopen($filename, 'a');
        if($file){
            fwrite($file, $tekst);
            fclose($file);
        }    
}
function SaveToFile(array $dane,$filename){
     if(!file_exists($filename)){
        return FALSE;
    }
    $file = fopen($filename, 'w');
    if($file){
        foreach ($dane as $row) {
            fwrite($file, $row[0].' '.$row[1].' '.$row[2].PHP_EOL);
        }
        fclose($file);
        return TRUE;
    }
}
