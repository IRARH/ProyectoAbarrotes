<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require_once 'conexion.php';

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['productos']))
{
	$q=conexion()->real_escape_string($_POST['productos']);
	$query="SELECT * FROM productos WHERE 
		codigo_barras LIKE '%".$q."%' OR
		proveedor LIKE '%".$q."%' OR
		nombre_producto LIKE '%".$q."%' OR
		costo_compra LIKE '%".$q."%' OR
		costo_venta LIKE '%".$q."%' OR
		cantidad_piezas LIKE '%".$q."%' OR
		piezas_caja LIKE '%".$q."%' OR
		cantidad_cajas LIKE '%".$q."%' OR
		total_precio_venta LIKE '%".$q."%' OR
		total_precio_compra LIKE '%".$q."%' OR
		fecha LIKE '%".$q."%'";

		$buscarProductos = mysqli_query(conexion(), $query);  //conexion()->query($query);
	if (mysqli_num_rows($buscarProductos) > 0)
	{
		$tabla.= 
		'<table>
			<tr>
				<td class="color">Codigo de Barras</td>
				<td class="color">Proveedor</td>
				<td class="color">Nombre de Producto</td>
				<td class="color">Costo compra</td>
				<td class="color">Costo venta</td>
				<td class="color">Cantidad piezas</td>
				<td class="color">Piezas p/caja</td>
				<td class="color">Cantidad cajas</td>
				<td class="color">Total venta</td>
				<td class="color">Total Compra</td>
				<td class="color">Fecha</td>
			</tr>';

		while($filaProductos= $buscarProductos->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td>'.$filaProductos['codigo_barras'].'</td>
				<td>'.$filaProductos['proveedor'].'</td>
				<td>'.$filaProductos['nombre_producto'].'</td>
				<td>'.$filaProductos['costo_compra'].'</td>
				<td>'.$filaProductos['costo_venta'].'</td>
				<td>'.$filaProductos['cantidad_piezas'].'</td>
				<td>'.$filaProductos['piezas_caja'].'</td>
				<td>'.$filaProductos['cantidad_cajas'].'</td>
				<td>'.$filaProductos['total_precio_venta'].'</td>
				<td>'.$filaProductos['total_precio_compra'].'</td>
				<td>'.$filaProductos['fecha'].'</td>
			</tr>
			';
		}

		$tabla.='</table>';
	} else
		{
			$tabla="<div id='mensajeError'>No se encontraron coincidencias con sus criterios de búsqueda.</div>";
		}
}



echo $tabla;
?>

