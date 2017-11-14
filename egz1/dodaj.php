<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Dodaj nową usługę</title>
    </head>
    <body>
        <h1>Dodaj nową usługę</h1>
        <div>
            <form method="post">
                <fieldset>
                    <legend>Nowa usługa</legend>
                    <div class="line">
                        <label>
                            Nazwa usługi: 
                        </label>
                        <input type="text" name="nazwa" id="nazwa"/>
                    </div>
                    <div class="line">
                        <label>
                            Cena usługi: 
                        </label>
                        <input type="text" name="cena" id="cena"/>
                    </div>
                    <div class="line">
                        <label></label>
                        <input type="submit" value="Dodaj usługę"/>
                    </div>
                </fieldset>
            </form> 
        </div>
        <?php
        if (isset($_POST['nazwa'])) {
            $conn = new mysqli("localhost", "root", "", "salon_prob");
            if ($conn->connect_errno > 0) {
                echo "Błąd: " . $conn->connect_error;
                exit();
            }
            $nazwa = $_POST['nazwa'];
            $cena = floatval($_POST['cena']);
            if (trim($nazwa) != '' && $cena > 0) {
                $sql = "INSERT INTO uslugi(nazwa,cena) values('{$nazwa}',{$cena})";
                $result = $conn->query($sql);
                if ($result) {
                    echo "<p>Dodano nową usługę "
                    . "<a href='salon.php'>Powrót na stronę główną</a></p> ";
                } else {
                    echo "<p>Błąd przy próbie dodanioa usługi!!!</p>";
                }
            }
            $conn->close();
        } 
        //if(isset($conn)) $conn->close();
        ?>
        <script type="text/javascript">
            window.onload = function () {
                console.log("fdgdg");
                document.forms[0].onsubmit = function () {
                    return false;
                };
            };

        </script>
    </body>
</html>
