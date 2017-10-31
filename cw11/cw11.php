<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw11.css"/>
    </head>
    <body> 
        <div id="wrapper">
            <div id="baner"><a href="cw11.php">FIRMA 2017 - ALEX</a></div>
            <div id="lewy">
                <ul>
                    <li>
                        <a href="cw11.php">Wszyscy pracownicy</a>
                    </li>
                    <li>
                        <a href="addForm.php">Dodaj pracownika</a>
                    </li>
                     <li>
                        <a href="allDepts.php">Wszystkie działy</a>
                    </li>
                     <li>
                        <a href="addDept.html">Dodaj nowy dział</a>
                    </li>
                </ul>
            </div>
            <div id="prawy">
               
            <?php
            require_once 'functions.php';
            $dane = getAllWorkers();
            echo WorkersToHtml($dane);
            ?>
               
            </div>
            <div id="stopka">Zawartość stopki 2017</div>
        </div>
    </body>
</html>
