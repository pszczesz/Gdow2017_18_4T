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
                        <a href="cw11.php">Dodaj pracownika</a>
                    </li>
                     <li>
                        <a href="cw11.php">Wszystkie działy</a>
                    </li>
                </ul>
            </div>
            <div id="prawy">
            <?php
            require_once 'functions.php';
            getAllWorkers();
            ?>
            
            </div>
            <div id="stopka">Zawartość stopki 2017</div>
        </div>
    </body>
</html>