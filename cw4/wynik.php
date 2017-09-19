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
           $imie = $_GET['imie'];
           $nazwisko = $_GET['nazwisko'];
           $wiek = intval($_GET['wiek']);
           if(trim($imie)!='' && trim($nazwisko)!='' && $wiek>0){
               $stan = $wiek>=18 ? "osoba pełnoletnia" : "osoba niepełnoletnia";
               echo "<p>Zarejestrowany użytkownik: {$imie} {$nazwisko} {$stan}</p>";
           }else{
               echo "<p>Błędne dane!! <a href='cw4.php'>Powrót do formularza</a></p>";
           }
        }
        ?>
    </body>
</html>
