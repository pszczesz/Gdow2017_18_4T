<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            label{display: inline-block; width: 300px; text-align: right}
            div.line{margin: 10px;}
        </style>
    </head>
    <body>
        <form action="wynik.php" method="get">
            <fieldset>
                <legend>
                    Dane osobowe:
                </legend>
                <div class="line">
                    <label>Imię</label>
                    <input type="text" name="imie" id="imie"/>
                </div>
                <div class="line">
                    <label>Nazwisko</label>
                    <input type="text" name="nazwisko" id="nazwisko"/>
                </div>
                <div class="line">
                    <label>Wiek</label>
                    <input type="text" name="wiek" id="wiek"/>
                </div>
                <div class="line">
                    <label></label>
                    <input type="submit" value="Zatwierdź"/>
                </div>
            </fieldset>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
