<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MOJA FIRMA</title>
        <link href="cw95.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner"><a href="cw95.php">MOJA FIRMA</a></div>
            <div id="lewy">
                <ul>
                    <li>
                        <a href="cw95.php">Stona główna</a>
                    </li>
                    <li>
                        <a href="addNewWorker.php">Dodaj pracownika</a>
                    </li>
                </ul>
            </div>
            <div id="content">
                
                <?php
                require_once 'functions.php';
                $workers = getAll("dane.txt");
               // DanePre($workers);
                echo WorkersToTable($workers);
                ?>
            </div>
            <div id="footer">Strona firmowa 2017</div>

        </div>
    </body>
</html>
