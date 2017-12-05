<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Święta 2017</title>
        <link href="cw15.css" rel="stylesheet" type="text/css"/>
        <style>
            table{margin: auto; border-collapse: collapse; margin-left: 100px;}
            th,td{padding: 7px; border: solid thin brown;}
            th{ color: #ffcccc; background-color: #660000;}
            td a{text-decoration: none; color: black; font-weight: bold;}
        </style>
    </head>
    <body>

        <div id="wrapper">
            <div id="baner"><a href="cw15.php"><img src="Swieta.png" alt="Święta"></a></div>
            <div id="menu">
                <ul>
                    <li><a href="cw15.php">Strona Główna</a></li>
                    <li><a href="klienci.php">Klienci</a></li>
                    <li><a href="prezenty.php">Prezenty</a></li>
                </ul>
            </div>
            <div id="content">
                <h3>Klienci:</h3>
                
                <div id="prezenty">
                <?php
                if (isset($_GET['id'])) {
                    $conn = new mysqli("localhost", "root", "", "swieta2017");
                    //print_r($conn);
                    if ($conn->connect_errno > 0) {
                        echo "Błąd połączenia: {$conn->connect_error}";
                        exit();
                    }
                    $id= intval($_GET['id']);
                    $conn->query("SET NAMES utf8");
                    $sql = "SELECT * FROM prezenty WHERE odbiorcaID={$id}";
                    $result = $conn->query($sql);
                    if($result){
                        echo "<ul>";
                         while($row = $result->fetch_assoc()){
                             echo "<li>{$row['nazwa']} {$row['cena']} zł {$row['opis']}</li>\n";
                         }
                          echo "</ul>";
                    }                   
                }
                ?>
                </div>                
                <?php
                $conn = new mysqli("localhost", "root", "", "swieta2017");
                //print_r($conn);
                if ($conn->connect_errno > 0) {
                    echo "Błąd połączenia: {$conn->connect_error}";
                    exit();
                }
                $conn->query("SET NAMES utf8");
                $sql = "SELECT * FROM odbiorcy";
                $result = $conn->query($sql);
                //print_r($result);
                echo "<table>";
                echo "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th></tr>\n";
                $lp = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . ($lp++) . "</td>";
                    echo "<td>{$row['imie']}</td><td><a href='klienci.php?id={$row['id']}'>{$row['nazwisko']}</a></td>\n";
                    echo "</tr>\n";
                }
                echo "</table>";
                $conn->close();
                ?>
                
            </div>

        </div>


    </body>
</html>
