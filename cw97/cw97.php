<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function GenerList($ile){
            $html = '<ol>';
            for($i=1;$i<=$ile;$i++){
                $html .= "<li>Element listy</li>\n";
            }
            return $html . "</ol>";
        }
        echo GenerList(22);
        ?>
    </body>
</html>
