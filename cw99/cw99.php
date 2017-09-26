<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
            label{display: inline-block; width: 200px; text-align: right}
            div.line{margin: 10px;}
            input.zaint{margin-left: 210px;}
            input#zat{width: 150px; padding: 5px;}
            table{border-collapse: collapse;}
            td{padding: 5px; border: solid 1px brown; height: 20px; width: 20px;
                text-align: center;}
            td.first{color: #ffcccc; background-color: #ff6600;}
            div#wynik{margin: 20px;}
        </style>
    </head>
    <body>
        <div>
            <form  method="post">
                <fieldset>
                    <legend>Wprowadź dane</legend>
                    <div class="line">
                        <label>Szerokość </label>
                        <input type="text" name="width"/>
                    </div>
                    <div class="line">
                        <label>Wysokość </label>
                        <input type="text" name="height"/>
                    </div>   
                    <div class="line">
                        <label></label>
                        <input type="submit" value="Generuj" id="zat"/>
                    </div>
                </fieldset>  
            </form>
        </div>
        <div id="wynik">
            <?php
               if(isset($_POST['height']) && isset($_POST['width'])){
                $width = intval($_POST['width']);
                $height = intval($_POST['height']);
                $height = $height<=0 || $height>40 ? 20 : $height;
                $width = $width<=0 || $width>40 ? 20 : $width;
                $html = '<table>';
                for($i=1; $i<=$height;$i++){
                    $html .= "<tr>";
                    for($j=1; $j<=$width;$j++){
                        $wyr = $i==1 || $j==1 ? " class='first' ":" ";
                        $html .= "<td {$wyr}>".($i*$j)."</td>\n";
                    }
                    $html .= "</tr>\n";
                }
                echo $html.'</table>';
            }
            ?>
        </div>
    </body>
</html>
