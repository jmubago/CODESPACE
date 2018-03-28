//capturar las teclas del teclas <> y navegar a la siguiente o la página anterior


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


    window.onload = function(){
            document.onkeydown = inspeccionarTecla;
           
    };

    var desplazamiento = 20;
    var desplazamientoVertical = 20;
    function inspeccionarTecla(evobjet){
            var elCaracter = evobjet.keyCode;
            
            if(elCaracter == 39){
                if(document.getElementById("nav_siguiente")) {
                    document.getElementById("nav_siguiente").click();
                }
            }else if(elCaracter == 37){
                if(document.getElementById("nav_anterior")) {
                   document.getElementById("nav_anterior").click();
                }
            }

    }






