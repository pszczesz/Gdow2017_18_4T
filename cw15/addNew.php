<?php
if(isset($_POST['imie'])){
    $conn = new mysqli("localhost","root","","swieta2017");
    if($conn->connect_errno!=0){
        echo "Error: ".$conn->connect_error;
         header("Location: dodajKlienta.php");
        exit;
    }
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    if($imie=='' || $nazwisko==''){
        echo "ERROR!!!";
        header("Location: dodajKlienta.php");
        exit;
    }
    $conn->query("SET NAMES utf8");
    $sql = "INSERT INTO odbiorcy(imie,nazwisko) "
            . "VALUES('{$imie}','{$nazwisko}')";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: klienci.php");
}

