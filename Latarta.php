<?php 

    session_start();
    include_once "conexion.php";
    include "header.php";
		if (isset($_SESSION["usuario"])) {
	if($_SESSION['usuario']='admin') {
	
	
	?>
	<html>
	<pre>
La Tarta

<a href="Venta.php">Venta</a>
<a href="ingresoInsumoNuevo.php">Ingreso Insumo Nuevo</a>
<a href="ingresoProfesorNuevo.php">Ingreso Profesor Nuevo</a>
<a href="ResumenProfesores.php">Resumen Profesores</a>
<a href="inventario.php">Resumen Insumos</a>
<a href="cierrecaja.php">Cierre de Caja</a>
<a href="CambiandoInsumos.php">Cambiar Precio y/o Costo</a>
<a href="resumencierrescaja.php">Resumen Cierres de Caja</a>
</html>












<?php 


} // si es admin quien se logea

else 
{
?>
	<html>
	<pre>
La Tarta

<a href="Venta.php">Venta</a>
<?php
}

echo '<a href="logout.php">Logout</a>';
}//si existe sesion
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}
?>
