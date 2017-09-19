<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
       // echo '<pre>'; var_dump($_POST);echo '</pre>'
        if(!isset($_POST['imie'])){
            echo "<p>brak danych <a href='cw5.html'>Powrót do formularza</a></p>";
        }else{
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $klasa = $_POST['klasa'];
            $plec = $_POST['plec'];
            $zaint = isset($_POST['zaint']) ? $_POST['zaint'] : [];
            if(trim($imie)!='' && trim($nazwisko)!=''){
                
            }else{
                 echo "<p>brak danych <a href='cw5.html'>Powrót do formularza</a></p>";
            }
        }
        ?>
       
    </body>
</html>
