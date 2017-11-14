<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon pielęgnacji</title>
        <link href="salon.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="baner"><h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1></section>
        <section id="lewy">
            <h3>
                SALON ZAPRASZA W DNIACH
            </h3>
            <ul>
                <li>Poniedziałek, 12:00 - 18:00</li>
                <li>Wtorek, 12:00 - 18:00</li>
            </ul>
            <a href="pies.jpg"><img src="pies_mini.jpg" alt="pies"></a>
            <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
        </section>
        <section id="srodkowy">
            <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
            <?php
            $conn = new mysqli("localhost","root","","salon_prob");
            if($conn->connect_errno>0){
                echo "Błąd: ".$conn->connect_error;
                exit();
            }
            $sql = "SELECT `imie`,`rodzaj`,`nastepna_wizyta`,`telefon`  "
                    . "FROM `zwierzeta` where `nastepna_wizyta`<>0 ";
            $result = $conn->query($sql);
           // var_dump($result);           
            if($result){
                while($row = $result->fetch_assoc()){
                   // print_r($row);
                    $rodzaj = "";
                    if($row['rodzaj']==1) {$rodzaj="Pies";}
                    if($row['rodzaj']==2) {$rodzaj="Kot";}
                    echo "<p>".$rodzaj." ".$row['imie']."</p>";
                    echo "<p>Data następnej wizyty: {$row['nastepna_wizyta']},"
                    . " telefon właściciela: {$row['telefon']}</p>";
                }
            }           
            ?>
            
        </section>
        <section id="prawy">
            <h3>USŁUGI </h3>
            <?php
            $sql =  "SELECT `nazwa`,`cena` FROM `uslugi` ";
            $result=$conn->query($sql);
            //print_r($result);
            if($result){
                while($row = $result->fetch_assoc()){
                    echo "<p>{$row['nazwa']} {$row['cena']}</p>";
                }
            }
            $conn->close();
            ?>
            <p><a href="dodaj.php">Dodaj nową usługę</a></p>
        </section>
        <?php
        
        ?>
    </body>
</html>
