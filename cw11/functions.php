<?php

function getConnection() {
    $conn = new mysqli('localhost', 'root', '', "firma4ti_2017");
    //var_dump($conn);
    if ($conn->connect_errno !== 0) {
        echo "ERROR!! " . $conn->connect_error;
        return null;
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}

function getAllWorkers() {
    $conn = getConnection();
    if ($conn == null) {
        return [];
    }
    $workers = [];
    $sqlQuery = "SELECT workers.id,firstname,lastname,salary,depts.name FROM workers"
            . " inner join depts on workers.dept_id=depts.id order by lastname";
    $result = $conn->query($sqlQuery);
//    echo "<pre>";
//    var_dump($result);
//    echo "</pre>";
    if ($result) {
        while (($row = $result->fetch_assoc())!=false) {
            $workers[] = $row;
        }
    }
    $conn->close();
    return $workers;
}

function WorkersToHtml(array $dane) {
    $html = "<table><tr><th>Imię</th><th>Nazwisko</th><th>Pensja</th>"
            . "<th>Stanowisko</th><th>Operacje</th></tr>\n";
    foreach ($dane as $row) {
        $html .= "<tr>\n"
                . "<td>{$row['firstname']}</td>\n"
                . "<td>{$row['lastname']}</td>\n"
                . "<td>{$row['salary']}</td>\n"
                . "<td>{$row['name']}</td>\n"
                . "<td><a href='deleteWorker.php?id={$row['id']}'>Usuń</a>"
                . " <a href='updateWorker.php?id={$row['id']}'>Edytuj</a></td></tr>\n";
    }
    return $html."</table>\n";
}
function GetAllDepts(){
    $conn = getConnection();
    if($conn==NULL) return [];
    $result =  $conn->query("SELECT * FROM depts");
    $dane = [];
    if($result){
        while (($row=$result->fetch_assoc())!=false){
            $dane[] = $row;
        }
    }
    $conn->close();
    return $dane;
}
function DeptsToSelect(array $dane){
    $html = "<select name='depts'>\n";
    foreach ($dane as $row) {
        $html .= "<option value='{$row['id']}'>{$row['name']}</option>\n";
    }
    return $html.'</select>';
}
function AddToWorkers($imie,$nazwisko,$pensja,$depts){
    $conn = getConnection();
    if($conn==NULL) return FALSE;
    $sqlInsert = "INSERT INTO workers(firstname,lastname,salary,dept_id) "
            . "VALUES('{$imie}','{$nazwisko}',{$pensja},{$depts})";
    $result = $conn->query($sqlInsert);
    $conn->close();
    return $result;
}
function DeptsToList(array $dane){
    $html = "<ul>\n";
    foreach ($dane as $row) {
        $html .= "<li><span class='wyr'>{$row['name']}</span> opis stanowiska: "
        . "{$row['description']}</li>\n";
    }
    return $html."</ul>\n";
}
function AddNewDepts($name,$desc){
    $conn = getConnection();
    if($conn==NULL)       { return false;}
    $sql = "INSERT INTO depts(name, description) "
            . "VALUES('{$name}','{$desc}')";
    $result = $conn->query($sql);
    return $result;
}
function DeleteWorker($id){
    $conn = getConnection();
    if($conn==NULL){        return false;}
    $sql = "DELETE FROM workers WHERE id={$id}";
    $result = $conn->query($sql);
    return $result;
}