<?php
require_once 'functions.php';
if(isset($_POST['imie'])){
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pensja = intval($_POST['pensja']); 
    $depts = intval($_POST['depts']);
    if(
       trim($imie)!="" && trim($nazwisko)!=''
            && $pensja>0 && $depts>0){
        UpdateToWorkers($id,$imie,$nazwisko,$pensja,$depts);
        header('Location: cw11.php');
       // echo "ok";
    }else{
       // echo "zle";
        header('Location: addForm.php');
    }
}