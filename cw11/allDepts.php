<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw11.css"/>
        <style>
            ul{
                text-align: left;
            }
            span.wyr{font-weight: bold; color: #996600;}
            div.link a{text-decoration: none; color: #996600;cursor: pointer;}
        </style>
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
               $dane = GetAllDepts();
               echo DeptsToList($dane);
               ?>
                <div class="link"><a href="addDept.html">Dodaj nowy dział</a></div>
            </div>
            <div id="stopka">Zawartość stopki 2017</div>
        </div>
    </body>
</html>
