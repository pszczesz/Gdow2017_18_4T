<?php
require_once 'functions.php';
DanePre($_GET);
if(isset($_GET['key'])){
    $dane = getAll('dane.txt');
    $key = intval($_GET['key']);
   // echo 'przed';
   // DanePre($dane);
    unset($dane[$key]);
   //  echo 'po';
    //DanePre($dane);
    SaveToFile($dane,'dane.txt');
}
header('Location: cw95.php');
