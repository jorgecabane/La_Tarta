<?php

include_once('conexion.php');

 
// $letras= $_POST['name_startsWith'];
$letras = 'f';


        $query = "SELECT Insumos.nombre
            FROM Insumos
            WHERE Insumos.Nombre like '$letras%'";
			
$resultado = mysql_query($query) or die(mysql_error());
	
		$row = array();	
		while ($row2 = mysql_fetch_array($resultado) )
		{
		// en algun freaking lugar de esta wea esta dando solamente 1 resultado 
			$row = $row2['nombre'];
			echo $row2;
		}
        

        //print_r($row);
        echo json_encode($row);


?>