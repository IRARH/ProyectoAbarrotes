$(document).ready(function() {

    var codigo = $('#codigo_barras').val();

    function obtener_registros(cantidad, codigo) {
        $.ajax({
            url: '../Clases/consulta_peticion_ajax_stock.php',
            type: 'POST',
            dataType: 'html',
            data: {
                cantidad: cantidad,
                codigo: codigo
            },
        })

        .done(function(resultado) {
            $("#palabras #registro #formulario #mensajeStock").html(resultado);
        })
    }

    $(document).on('keyup', '#cantidadRetiro', function() {
        var valorStock = $(this).val();
        if (valorStock != "") {
            obtener_registros(valorStock, codigo);
        } else {
            obtener_registros();
        }
    });
});