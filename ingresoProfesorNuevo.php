<?php 

    session_start();
    include_once "conexion.php";
    include "header.php";
		if (isset($_SESSION["usuario"])) {
	
	
	
	?>
	



                 <form name="form1" action="ingresandoProfesor.php" method="POST">
                 <div><label>Nombre: </label><input name="nombre" type="text" ></div>
                 <div><label>Apellido: </label><input name="apellido" type="text"></div>
                 <input type="submit" value="Ingresar">
                 </form>
	
                 <div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>
			
<?php 

}
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}
?>