<?php

function getConnection(){
    $conn = new mysqli('localhost', 'root', '', "firma4ti_2017");
    //var_dump($conn);
    if($conn->connect_errno!==0){
        echo "ERROR!! ".$conn->connect_error;
        return null;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWorkers(){
    $conn = getConnection();
    if($conn==null) {return [];}
    $workers = [];
    $sqlQuery = "SELECT * FROM workers";
    $result = $conn->query($sqlQuery);
//    echo "<pre>";
//    var_dump($result);
//    echo "</pre>";
    if($result){
        
    }
    }
