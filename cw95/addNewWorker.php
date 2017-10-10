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
                <form id="dodaj" action="add.php" method="post">
                    <fieldset>
                        <legend>Dodaj pracownika</legend>
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
                            <label></label>
                            <input type="submit" value="Dodaj Pracownika"/>                            
                        </div>
                    </fieldset>
                </form>
              
            </div>
            <div id="footer">Strona firmowa 2017</div>

        </div>
    </body>
</html>
