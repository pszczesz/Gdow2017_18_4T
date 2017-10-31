    <?php
    require_once 'functions.php';
    if(isset($_GET['id'])){        
        $id = $_GET['id'];
        DeleteWorker($id);        
    }
    header("Location: cw11.php");
