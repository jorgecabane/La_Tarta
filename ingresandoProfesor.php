<?php 

    session_start();
	
    include_once "conexion.php";
	

		if (isset($_SESSION["usuario"]))
		{
		
		if (isset($_POST['nombre'])    &&    isset($_POST['apellido']) )    {
		
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		
		
		$query = "Insert into Profesores (Nombre, Apellido, Saldo)                           
		Values ('$nombre','$apellido',0)";                     //este query si funciona
    //echo $query;
    $resultado = mysql_query($query) or die(mysql_error());

           
		
		if($resultado)
		{
	//echo $holi;
		header("location:ingresoProfesorNuevo.php");
		} // si funciono el query
		else
		{
		echo"Ocurrio un error <a href='ingresoProfesorNuevo.php'/> Volver </a> ";
		
		} // no funciono el query
		
				
		
		} // si estan posteados todos los campos
		else
		{
		echo "Algun campo esta vacio. <a href='ingresoProfesorNuevo.php'/> Volver </a>" ;
		}  // si algun campo esta vacio
		} // si existe usuario conectado
		
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
} // si no esta autentificado
?>
