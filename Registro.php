<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles_registro.css"/>
</head>
<body>
    <section id="principal">
        <header id="encabezado"><h2>Registro de Productos </h2>
         
        </header>
        
        <div id="formulario">    
            <form action="#" method="POST">
                <label for="codigo_barras">Codigo de Barras</label>
                <input type="text" name="codigo_barras" id="codigo_barras" required/>

                <label for="nombre_producto">Nombre del Proveedor</label>
                <input type="text" name="nombre_producto" id="nombre_producto" required/>

                <label for="marca_producto">Marca del Producto</label>
                <input type="text" name="marca_producto" id="marca_producto" required />

                <label for="tipo_producto">Tipo de Producto</label>
                <input type="text" name="tipo_producto" id="tipo_producto" required />


                <label for="precio_pieza">Costo Compra</label>
                <input type="text" name="precio_pieza" id="precio_pieza" required />

                <label for="precio_pieza">Costo Venta</label>
                <input type="text" name="precio_pieza" id="precio_pieza" required />


                <label for="cantidad_pieza">Cantidad de Piezas</label>
                <input type="text" name="cantidad_pieza" id="cantidad_pieza" required />

                <label for="pieza_caja">Piezas por Caja</label>
                <input type="text" name="pieza_caja" id="pieza_caja" required />

                <label for="cantidad_cajas">Cantidad de Cajas</label>
                <input type="text" name="cantidad_pieza" id="cantidad_pieza" required />

                <label for="precio_total">Precio Total</label>
                <input type="text" name="precio_total" id="precio_total" required />


            </form>
        </div>
        <div id="final">
            <input type="submit" value="Registrar "/>
     
        </div>
    </section>
</body>
</html>