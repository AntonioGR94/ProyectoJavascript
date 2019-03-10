document.addEventListener('DOMContentLoaded',function(){
        asociarEvento();
})
 
function asociarEvento(){
        let formulario = document.getElementById('brandForm'); 
        
        formulario.addEventListener('submit',function(event){
                event.preventDefault();
                crearBrandAjax();
        });
}
 
function crearBrandAjax(){
        let datosFormulario = $("#brandForm").serialize(); 
        axios.post("brands/createBrand", datosFormulario) 
        .then(function(respuesta){
        $("#brandsCreadas").append(respuesta.data);
        })
 }
 
 
 
 
 
function ejecucionFormulario(){
        alert(`HOLA`);
 
 }