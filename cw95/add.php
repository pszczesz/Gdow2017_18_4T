<?php
require_once 'functions.php';
//DanePre($_POST);
if(isset($_POST['imie'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pensja = intval($_POST['pensja']);
    if(trim($imie)!='' && trim($nazwisko)!='' && $pensja>=0){
        $line = $imie.' '.$nazwisko.' '.$pensja.PHP_EOL;
        AddRowToFile($line,'dane.txt');
    }
}

