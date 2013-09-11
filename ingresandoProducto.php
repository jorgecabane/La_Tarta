<?php 

    session_start();
	
    include_once "conexion.php";
	

		if (isset($_SESSION["usuario"]))
		{
		
		if (isset($_POST['producto'])    &&    isset($_POST['codigo'])            &&  isset($_POST['precio']) )    {
		
		$nombre=$_POST['producto'];
		$codigo=$_POST['codigo'];
		$precio=$_POST['precio'];
		
		$query = "Insert into Insumos
		Values (NULL,'$nombre',$codigo,$precio)";
    //echo $query;
    $resultado = mysql_query($query) or die(mysql_error());
		
		if($resultado)
		{
		header("location:ingresoInsumoNuevo.php");
		} // si funciono el query
		else
		{
		echo"Ocurrio un error <a href='ingresoInsumoNuevo.php'/> Volver </a> ";
		
		} // no funciono el query
		
		
		
		
		
		
		
		
		
		
		
		
		
		} // si estan posteados todos los campos
		else
		{
		echo "Algun campo esta vacio. <a href='ingresoInsumoNuevo.php'/> Volver </a>" ;
		}  // si algun campo esta vacio
		} // si existe usuario conectado
		
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
} // si no esta autentificado
?>