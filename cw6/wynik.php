<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['liczba']) && is_numeric($_POST['liczba'])) {
            $liczba = intval($_POST['liczba']);
            echo "<p>{$liczba}<sup>2</sup> = " . pow($liczba, 2) . "</p>\n";
            echo "<p>{$liczba}<sup>3</sup> = " . pow($liczba, 3) . "</p>\n";
        } else {
            echo "<p>brak danych lub błędne dane</p>";
        }
        ?>
    </body>
</html>
