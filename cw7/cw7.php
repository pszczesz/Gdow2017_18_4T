<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function GetColors() {
            return [
                "black" => "czarny",
                "white" => "biały",
                "red"   => "czerwony",
                "yellow"=> "żółty",
                "grey"  => "szary",
                "purple"=> "fioletowy",
                "green" => "zielony"
            ];
        }
        function ColorsToSelect(array $dane){
            $html = "<select name='colors' id='colors'>\n";
            foreach ($dane as $k=>$item) {
                $html .= "<option value='{$k}'>{$item}</option>\n";
            }
            return $html.'</select>';
        }
        $colors = GetColors();
        asort($colors);//sortowanie po wartościach
       // ksort($colors); //sortowanie po kluczach
        echo ColorsToSelect($colors);
        ?>
        <script type="text/javascript">
        var kol =  document.getElementById("colors").value;
        document.body.style.backgroundColor = kol;
        document.getElementById("colors").onchange = function (){
            document.body.style.backgroundColor = this.value;
        };
        //console.log(kol);
        </script>
    </body>
</html>
