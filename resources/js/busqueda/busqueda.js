document.addEventListener('DOMContentLoaded',function(){  

$("#formBuscar").submit(function(event){
        event.preventDefault();
        mostrarModal("busquedaModal");
        axios.post('/sneakers/buscarAjax', {
                busqueda: $("#busqueda").val()
        }).then(function (response) {
                $("#sneakersMostrar").html(response.data);
        }).catch(function (error) {
                console.log(error);
        }).then(function(){
                cerrarModal("busquedaModal");
        });
        })
});
    
function mostrarModal(id){
        $("#"+id).modal('show');
}
function cerrarModal(id){
        $("#"+id).modal('hide');
}