<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 13 - logowanie</title>
        <link href="cw13.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Ćwiczenie 13 - logowanie</h1>
        <form method="post" id="logownik">
            <fieldset>
                <legend>Dane logowania</legend>
                <div class="line">
                    <label>Login: </label>
                    <input type="text" name="login" id="login"/>
                    <span class="error"></span>
                </div>
                <div class="line">
                    <label>hasło: </label>
                    <input type="password" name="password" id="password"/>
                    <span class="error"></span>
                </div>
                <div class="line">
                    <label> </label>
                    <input type="submit" value="Zaloguj" id="zaloguj"/>                    
                </div>
            </fieldset>
        </form>
        <?php
        if(isset($_POST['login'])){
            $conn = new mysqli("localhost","root","","users_4a2017_2");
            //print_r($conn);
            if($conn->connect_errno>0){
                echo "<p>Błąd połączenia z bazą: {$conn->connect_error}</p>";
                exit();
            }
            $login = trim($_POST['login']);
            $password = trim($_POST['password']);
            if($login=='' || $password==''){
                echo "<p>Błąd danych!!</p>";
                exit;
            }
            $sql = "SELECT * FROM logins WHERE login like '{$login}'";
            $result = $conn->query($sql);
            //print_r($result);
            //echo "<p>{$result->num_rows}</p>";
            if($result->num_rows>0){
                $row = $result->fetch_assoc();
                if($row['password']==$password){
                    echo "<p>ZALOGOWANO</p>";
                    session_start();
                    $_SESSION['zalogowano']=true;
                    $_SESSION['login']=$login;
                    header("Location enter.php");
                }else{
                    header("Location: cw13.php");
                    echo "<p>NIE ZALOGOWANO</p>";
                }
            }else{
                header("Location: cw13.php");
                echo "<p>Błędny login</p>";
            }
        }
        ?>
    </body>
</html>
