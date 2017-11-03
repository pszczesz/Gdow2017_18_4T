<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw11.css"/>
    </head>
    <body> 
        <div id="wrapper">
            <div id="baner"><a href="cw11.php">FIRMA 2017 - ALEX</a></div>
            <div id="lewy">
                <ul>
                    <li>
                        <a href="cw11.php">Wszyscy pracownicy</a>
                    </li>
                    <li>
                        <a href="addForm.php">Dodaj pracownika</a>
                    </li>
                     <li>
                        <a href="allDepts.php">Wszystkie działy</a>
                    </li>
                     <li>
                        <a href="addDept.html">Dodaj nowy dział</a>
                    </li>
                </ul>
            </div>
            <div id="prawy">
                <?php
                $current = -1;
                if(isset($_GET['id'])){
                    require_once 'functions.php';
                    $id=$_GET['id'];
                    
                    $worker = getWorkerById($id);
                    $current = $worker['dept_id'];
                   // print_r($worker);
                }
                
                ?>
                <form action="updadeWorkerToDB.php" method="post">
                    <fieldset>
                        <legend>
                            Dodaj pracownika
                        </legend>
                        <input type="hidden" name="id" 
                               value="<?php echo $worker['id'];?>"/>
                        <div class="line">
                            <label>Imię: </label>
                            <input type="text" name="imie" id="imie" 
                                   value="<?php echo $worker['firstname'];?>"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Nazwisko: </label>
                            <input type="text" name="nazwisko" id="nazwisko" 
                                   value="<?php echo $worker['lastname'];?>"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Pensja: </label>
                            <input type="text" name="pensja" id="pensja" 
                                    value="<?php echo $worker['salary'];?>"/>
                            <span class="error"></span>
                        </div>
                        <div class="line">
                            <label>Stanowisko: </label>
                            <?php
                            require_once 'functions.php';
                            $dane = GetAllDepts();
                            echo DeptsToSelect($dane,$current);
                            ?>
                        </div>
                        <div class="line">
                            <label></label>
                            <input type="submit" value="Zapisz zmiany"/>
                            
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="stopka">Zawartość stopki 2017</div>
        </div>
    </body>
</html>
