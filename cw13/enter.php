<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Zalogowano</title>
    </head>
    <body>
        <h1>Zalogowano</h1>
        <?php
        session_start();
        if(isset($_SESSION['zalogowano'])){
            echo "<p>Zalogowono jako: {$_SESSION['login']}</p>";
        }else{
            header("Location: cw13.php");
        }        
        ?>
        <form method="post">
            <input type="hidden" value="wylogowano" name="sesja"/>
            <input type="submit" value="Wyloguj"/>
        </form>
        <?php
        if(isset($_POST['sesja'])){
            session_destroy();
            header("Location: enter.php");
        }
        ?>
    </body>
</html>
