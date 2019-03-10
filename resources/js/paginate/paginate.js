let contadorMostrados = 10;
    $(window).on("scroll", function() {
        $("#spinner").hide();
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();

        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            $("#spinner").show();
            axios.get('/sneakers/paginate/obtenerAjax/'.concat(contadorMostrados))
            .then(function (response) {
                if(response.data === ""){
                    alert("NO HAY MAS LIBROS");
                }else{
                    $("#sneakersMostrar").append(response.data);
                    contadorMostrados += 10;
                }
            }).catch(function (error) {
                console.log(error);
            }).then(function(){
                $("#spinner").hide();
            });
        }
    });