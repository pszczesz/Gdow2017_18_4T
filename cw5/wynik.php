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
              $powitanie = $plec=='K' ? "witamy kandydatkę w serwisie" 
                   : "witamy kandydata w serwisie";
              $zainteresowania = "Twoje zainteresowania: <ul>";
              foreach ($zaint as $item) {
                  $zainteresowania .= "<li>{$item}</li>";
              }
              $zainteresowania .= "</ul>";
    echo <<< TEXT
  <p> Dane zarejestrowanego kandydata </p>
   <h3>{$imie} {$nazwisko} w klasie {$klasa}</h3>             
   <p>{$powitanie}</p>  
   <p>{$zainteresowania}</p>    
TEXT;
            }else{
                 echo "<p>brak danych <a href='cw5.html'>Powrót do formularza</a></p>";
            }
        }
        ?>
       
    </body>
</html>
