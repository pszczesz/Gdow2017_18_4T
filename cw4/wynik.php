<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //var_dump($_GET);
        if (isset($_GET['imie']) 
                && isset($_GET['nazwisko']) 
                && isset($_GET['wiek'])) {
            echo "<p>Zarejestrowano: imię:{$_GET['imie']} "
            . "nazwisko:{$_GET['nazwisko']} wiek:{$_GET['wiek']}</p>";
        }
        ?>
    </body>
</html>
