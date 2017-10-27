<?php
require_once 'functions.php';
if(isset($_POST['imie'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pensja = intval($_POST['pensja']); 
    $depts = intval($_POST['depts']);
    if(
       trim($imie)!="" && trim($nazwisko)!=''
            && $pensja>0 && $depts>0){
        AddToWorkers($imie,$nazwisko,$pensja,$depts);
        header('Location: cw11.php');
    }else{
        header('Location: addForm.php');
    }
}
