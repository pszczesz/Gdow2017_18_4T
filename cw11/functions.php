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
    $sqlQuery = "SELECT firstname,lastname,salary,depts.name FROM workers"
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
    return $workers;
}

function WorkersToHtml(array $dane) {
    $html = "<table><tr><th>Imię</th><th>Nazwisko</th><th>Pensja</th>"
            . "<th>Stanowisko</th></tr>\n";
    foreach ($dane as $row) {
        $html .= "<tr>\n"
                . "<td>{$row['firstname']}</td>\n"
                . "<td>{$row['lastname']}</td>\n"
                . "<td>{$row['salary']}</td>\n"
                . "<td>{$row['name']}</td>\n</tr>\n";
    }
    return $html."</table>\n";
}
