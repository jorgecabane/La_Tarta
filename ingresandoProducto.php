<?php 

    session_start();
	
    include_once "conexion.php";
	

		if (isset($_SESSION["usuario"]))
		{
		
		if (isset($_POST['producto'])    &&    isset($_POST['codigo'])            &&  isset($_POST['precio']) )    {
		
		$nombre=$_POST['producto'];
		$codigo=$_POST['codigo'];
		$precio=$_POST['precio'];
		$costo=$_POST['costo'];
		
		$query = "Insert into Insumos (Nombre, Codigo, precio, costo)                           
		Values ('$nombre',$codigo,$precio,$costo)";                     //este query si funciona
    //echo $query;
    $resultado = mysql_query($query) or die(mysql_error());
    //seleccionar el id del producto recien metio
    $query2 =  "Select idInsumos from Insumos where Nombre='$nombre' ";
            $resultado2=mysql_query($query2) or die(mysql_error());
            $idinsumo=mysql_fetch_assoc($resultado2);
    $holi=$idinsumo['idInsumos'];
	
    $idusuario=$_SESSION['idusuario'];
    //echo $idusuario;
            //ingresar el producto a inventario
            $query3="Insert into Inventario Values ($holi,$idusuario,0)";
            $resultado3=mysql_query($query3);
           
		
		if($resultado3 && $resultado2 && $resultado)
		{
	//echo $holi;
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
