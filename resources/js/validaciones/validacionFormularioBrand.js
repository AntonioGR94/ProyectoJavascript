//Este evento se lanza cuando se carga todo el DOM en la página
document.addEventListener("DOMContentLoaded", function(event) {
        let formulario = document.getElementById("brandForm");
        let inputNombre = document.getElementById("name");
        let inputUrl = document.getElementById("url");
        let inputCreateDate = document.getElementById("createDate");
        
        
        inputNombre.addEventListener("keydown", function(event){
            comprobarCampo(event,comprobarNombre);
        });
    
        inputUrl.addEventListener("keydown", function(event){
            comprobarCampo(event,comprobarUrl);
        })
    
        inputCreateDate.addEventListener("keydown", function(event){
            comprobarCampo(event,comprobarCreateDate);
        });
    });
    
    function marcarInputCorrecto(input){
        input.classList.remove("invalido");
        input.classList.add("valido");
    }
    
    function marcarInputErroneo(input){
        input.classList.remove("valido");
        input.classList.add("invalido");
    }
    
    let timeout = null;
    
    function comprobarCampo(event,funcionComprobar){
        clearTimeout(timeout);
        timeout = setTimeout(function () {
           funcionComprobar(event.target);
        }, 500);
    };
    
    function comprobarNombre(inputNombre){
        let correcto = false;
        let expresion = /^[a-zA-Z]+$/g;
        if(expresion.test(inputNombre.value)){
            marcarInputCorrecto(inputNombre);
            correcto = true;
        }else{
            marcarInputErroneo(inputNombre);
        }
        return correcto;
    }
    
    function comprobarUrl(inputUrl){
        let correcto = false;
        let expresion = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
    
        if(expresion.test(inputUrl.value)){
                marcarInputCorrecto(inputUrl);
                correcto = true;
            }else{
                marcarInputErroneo(inputUrl);
            }
            return correcto;
    }
    
    function comprobarCreateDate(inputCreateDate){
        let correcto = false;
        let expresion = /^[0-9]{4}/;
    
        if(expresion.test(inputCreateDate.value)){
                marcarInputCorrecto(inputCreateDate);
                correcto = true;
            }else{
                marcarInputErroneo(inputCreateDate);
            }
            return correcto;
    }

    
    function comprobarFormulario(event){
        event.preventDefault();
        let esNombreCorrecto = comprobarNombre(document.getElementById("nombre"));
        let esUrlCorrecta = comprobarUrl(document.getElementById("url"));
        let esFechaCorrecta = comprobarCreateDate(document.getElementById("createDate"));

        if(esNombreCorrecto && esUrlCorrecta && esFechaCorrecta){
            let formulario = document.getElementById("brandForm");
            formulario.submit();
        }else{
            console.log("ERROR EN EL FORMULARIO");
        }
    }