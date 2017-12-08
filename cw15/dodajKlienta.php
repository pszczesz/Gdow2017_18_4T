<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Święta 2017</title>
        <link href="cw15.css" rel="stylesheet" type="text/css"/>
        <link href="addNew.css" rel="stylesheet" type="text/css"/>
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
                <form action="addNew.php" method="post" id="addNew" >
                    <fieldset>
                        <legend>Dodaj nowego klienta</legend>
                        <div class="line">
                            <label>Imię: </label>
                            <input type="text" id="imie" name="imie"/>
                            <span class="error"></span>
                        </div>
                         <div class="line">
                            <label>Nazwisko: </label>
                            <input type="text" id="nazwisko" name="nazwisko"/>
                            <span class="error"></span>
                        </div>
                         <div class="line">
                             <label></label>
                            <input type="submit" value="Dodaj nowego klienta"/>                            
                        </div>                        
                    </fieldset>
                </form>
            </div>            
        </div>   
        <script type="text/javascript" src="cw15.js"></script>
    </body>
</html>
