<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Strona testowa</title>
        <link href="egz2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <div id="baner">
                 <a href="egz2.php"><h1>STRONA TESTOWA</h1></a>
            </div>
            <div id="lewy">
                <div class="line">
                    <span class="info">Kolor tła</span>
                    <?php
                    $conn = new mysqli("localhost","root","","strona_testowa");
                    $conn->query("SET NAMES utf8");
                    $sql = "SELECT * FROM kolory";
                    $result = $conn->query($sql);
                    echo "<select id='kolor_tla'>";
                    while($row=$result->fetch_array()){
                        echo "<option value='{$row[2]}'>{$row[1]}</option>";
                    }
                    echo "</select>";
                    $conn->close();
                    ?>
                </div>
                 <div class="line">
                    <span class="info">Wielkość czcionki</span>
                    <?php
                    $conn = new mysqli("localhost","root","","strona_testowa");
                    $conn->query("SET NAMES utf8");
                    $sql = "SELECT * FROM rozmiary";
                    $result = $conn->query($sql);
                    echo "<select id='rozmiar'>";
                    while($row=$result->fetch_array()){
                        echo "<option value='{$row[1]}'>{$row[1]}</option>";
                    }
                    echo "</select>";
                    $conn->close();
                    ?>
                </div>
                 <div class="line">
                    <span class="info">Kolor tekstu</span>
                    <?php
                     $conn = new mysqli("localhost","root","","strona_testowa");
                    $conn->query("SET NAMES utf8");
                    $sql = "SELECT * FROM kolory";
                    $result = $conn->query($sql);
                    echo "<select id='kolor_tekstu'>";
                    while($row=$result->fetch_array()){
                        echo "<option value='{$row[2]}'>{$row[1]}</option>";
                    }
                    echo "</select>";
                    $conn->close();
                    ?>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                    </p>
                   

                </div>
            </div>
            <div id="prawy">
                <h3>MENU:</h3>
                <ul>
                    <li><a href="egz2.php">Pierwsza strona</a></li>
                    <li><a href="podStr2.php">Druga strona</a></li>
                    <li><a href="podStr3.php">Trzecia strona</a></li>
                </ul>
                
            </div>
            <div id="stopka">Wykonane Adam Nowak 2017</div>
        </div>
        <script type="text/javascript" src="strona_testowa.js"></script>
    </body>
</html>
