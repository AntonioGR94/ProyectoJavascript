document.addEventListener('DOMContentLoaded',function(){  

        $("#mostrarSneaker").on('click', function(e){
                e.preventDefault();
                readSneakerAjax();
            })  
 
});
function readSneakerAjax(){


        let slugSneaker = $("#mostrarSneaker").attr("data-slugSneaker");
    
        axios.post(`/sneakers/readAjax/${slugSneaker}` , datosFormulario)
        .then(function(respuesta){
      
              if(respuesta.data === 1){
                  alert("SE HA EDITADO CORRECTAMENTE");
              }
      
          })
      
}