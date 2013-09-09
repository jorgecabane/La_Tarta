<?php 

    session_start();
    include_once "conexion.php";
    include "header.php";
		if (isset($_SESSION['s_username'])) {
	
	
	
	?>
	<html>
	<pre>
La Tarta

<a href="Venta.php">Venta</a>
<a href="IngresoInsumos.php">Ingreso Insumos</a>
<a href="IngresoClientes.php">Ingreso Clientes</a>
<a href="ResumenProfesores.php">Resumen Profesores</a>
<a href="inventario.php">Resumen Insumos</a>
</html>












<?php 
echo '<a href="logout.php">Logout</a>';
}else{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;

}
?>
