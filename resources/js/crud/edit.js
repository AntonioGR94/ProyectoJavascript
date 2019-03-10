document.addEventListener('DOMContentLoaded',function(){  

        $("#editarBrand").on('submit', function(e){
                e.preventDefault();
                editarBrandAjax();
            })  
 
});
function editarBrandAjax(){

        let datosFormulario = $("#editarBrand").serialize(); //Asi se coje todos los datos del formulario
      
        let idLibro = $("#editarBrand").attr("data-idBrand");
    
        axios.put(`/brands/editAjax/${idLibro}` , datosFormulario)
        .then(function(respuesta){
      
              if(respuesta.data === 1){
                  alert("SE HA EDITADO CORRECTAMENTE");
              }
      
          })
      
}