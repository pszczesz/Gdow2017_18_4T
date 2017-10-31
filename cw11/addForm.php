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
                <form action="addWorker.php" method="post">
                    <fieldset>
                        <legend>
                            Dodaj pracownika
                        </legend>
                        <div class="line">
                            <label>Imię: </label>
                            <input type="text" name="imie" id="imie"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Nazwisko: </label>
                            <input type="text" name="nazwisko" id="nazwisko"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Pensja: </label>
                            <input type="text" name="pensja" id="pensja"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Stanowisko: </label>
                            <?php
                            require_once 'functions.php';
                            $dane = GetAllDepts();
                            echo DeptsToSelect($dane);
                            ?>
                        </div>
                        <div class="line">
                            <label></label>
                            <input type="submit" value="Dodaj pracownika"/>
                            
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="stopka">Zawartość stopki 2017</div>
        </div>
    </body>
</html>
