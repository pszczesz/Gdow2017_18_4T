window.onload = function(){
  document.getElementById("kolor_tla").onchange = function (){
      document.getElementById("lewy").style.backgroundColor = this.value;
  };
  document.getElementById("rozmiar").onchange = function (){
      document.getElementById("lewy").style.fontSize = this.value+"px";
  }; 
  document.getElementById("kolor_tekstu").onchange = function (){
      document.getElementById("lewy").style.color = this.value;
  }; 
};


