<?php 

    session_start();
    include_once "conexion.php";
    include "header.php";
		if (isset($_SESSION["usuario"])) {
	
	
	
	?>
	<script language=JavaScript>
<!-- Script courtesy of http://www.web-source.net - Your Guide to Professional Web Site Design and Development
function clear_textbox()
{
if (document.form1.codigo.value == "Utilice lector de barra o manual.")
document.form1.codigo.value = "";
}
-->
</script>



<form name="form1" action="ingresandoProducto.php" method="POST">
<div><label>Nombre Producto: </label><input name="producto" type="text" ></div>
<div><label>Codigo:          </label><input name="codigo" onFocus=clear_textbox() value="Utilice lector de barra o manual.">
<div><label>Precio: </label><input name="precio" type="text" ></div>
<input type="submit" value="Ingresar">
</form>
	
			
			
<?php 

}
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}
?>