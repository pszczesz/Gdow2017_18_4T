window.onload = function (){
   document.forms[0].onsubmit = function (){
        var imOK = ValidateString(document.getElementById("imie"));
        var nazOK = ValidateString(document.getElementById("nazwisko"));
        var penOK = ValidateNumber(document.getElementById("pensja"));        
        return imOK && nazOK && penOK;
   };
    function ValidateString(elem){
        var value = elem.value;
        var info =  elem.nextElementSibling;
        var wz = /^[A-ZŚĆŹŻŁŃÓ]{1}[a-ząęźżćółń]{1,}/;
        if (wz.test(value)){
            info.innerHTML ="";
            return true;
        }else{
            info.innerHTML = "Błędne dane";
            return false;
        }
    }
    function ValidateNumber(elem){
        var value = parseInt(elem.value);
        var info =  elem.nextElementSibling;
        if(!isNaN(value) && value>=0){
             info.innerHTML ="";
            return true;
        }else{
            info.innerHTML = "Błędne dane";
            return false;
        }
    }
};

