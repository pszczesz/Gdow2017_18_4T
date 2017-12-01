window.onload = function (){
    document.getElementById("liczPole").onclick = function (){
        var wybor = document.getElementsByName("figura");
        console.log(wybor);
        for(var i=0;i<wybor.length;i++){
            if(wybor[i].checked) {
                var wybWartosc = wybor[i].value;
            }
        }
        console.log(wybWartosc);
        switch(wybWartosc){
            case "prostokat": ObliczProstokat();
                break;
             case "trojkat": ObliczTrojkat();
                break; 
            case "kolo": ObliczKolo();
                break;
            default : document.getElementById("wynik")
                        .innerHTML = "BRAK DANYCH";
        }
        function ObliczProstokat(){
            var a = parseFloat(document.getElementById("pa").value);
            var b = parseFloat(document.getElementById("pb").value);
            if(isNaN(a)|| isNaN(b)){
                document.getElementById("wynik")
                        .innerHTML = "Błędne dane!!";
                return ;
            }
            document.getElementById("wynik")
                    .innerHTML = "Pole prostokąta wynosi: "+(a*b).toFixed(2);
            return ;
        }
        function ObliczTrojkat(){
            var a = parseFloat(document.getElementById("ta").value);
            var h = parseFloat(document.getElementById("th").value);
            if(isNaN(a)|| isNaN(h)){
                document.getElementById("wynik")
                        .innerHTML = "Błędne dane!!";
                return ;
            }
            document.getElementById("wynik")
                    .innerHTML = "Pole trójkąta wynosi: "+(1/2*(a*h).toFixed(2));
            return ;
        }
        function ObliczKolo(){
            var r = parseFloat(document.getElementById("kr").value);
            
            if(isNaN(r)){
                document.getElementById("wynik")
                        .innerHTML = "Błędne dane!!";
                return ;
            }
            document.getElementById("wynik")
                    .innerHTML = "Pole koła wynosi: "+(Math.PI*r*r).toFixed(2);
            return ;
        }
    };
};


