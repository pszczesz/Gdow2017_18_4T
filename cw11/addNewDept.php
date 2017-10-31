<?php
require_once 'functions.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    if(trim($name)!=''){
        AddNewDepts($name, $description);
        header("Location: allDepts.php");
    }else{
         header("Location: addDept.html");
    }
    
}