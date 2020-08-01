$(document).ready(function() {

    function obtener_registros(productos) {
        $.ajax({
            url: '../Clases/consulta_peticion_ajax.php',
            type: 'POST',
            dataType: 'html',
            data: { productos: productos },
        })

        .done(function(resultado) {
            $("#contenedor #productos_busqueda #div1").html(resultado);
        })
    }

    $(document).on('keyup', '#busqueda', function() {
        var valorBusqueda = $(this).val();
        if (valorBusqueda != "") {
            obtener_registros(valorBusqueda);
        } else {
            obtener_registros();
        }
    });
});