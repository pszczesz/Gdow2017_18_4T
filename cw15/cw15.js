window.onload = function (){
    document.getElementById("addNew").onsubmit = function (){
        var imOK = Validate(document.getElementById("imie"));
        var nazOK = Validate(document.getElementById("nazwisko"));
        
        return imOK && nazOK;
    };
    function Validate(elem){
        var value = elem.value;
        var next = elem.nextElementSibling;
        var wz = /^[A-ZŚĆŁŃÓĄĘ]{1}[a-ząęźćńłó]{2,}$/;
        if(wz.test(value)){
            next.innerHTML = "";
            return true;
        }else{
            next.innerHTML = "Błędne dane!!!";
            return false;
        }
    }
};


